<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/Booking.php';
require_once __DIR__ . '/../services/AuthService.php';

class BookingController extends Controller {
    public function create() {
        if (!AuthService::isAuthenticated()) {
            $this->jsonResponse(['success' => false, 'message' => 'Unauthorized. Please login.'], 401);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $customer_id = $_SESSION['user_id'];
            $salon_id = $_POST['salon_id'] ?? null;
            $service_id = $_POST['service_id'] ?? null;
            $start_date = $_POST['booking_date'] ?? null;
            $start_time = $_POST['start_time'] ?? null;
            $end_time = $_POST['end_time'] ?? null;
            
            $recurring_weeks = (int)($_POST['recurring_weeks'] ?? 0);

            if (!$salon_id || !$service_id || !$start_date || !$start_time || !$end_time) {
                $this->jsonResponse(['success' => false, 'message' => 'Missing booking payload.'], 400);
            }

            $bookingModel = new Booking();
            $created_ids = [];
            $parent_booking_id = null;

            $dates_to_book = [$start_date];
            for ($i = 1; $i <= $recurring_weeks; $i++) {
                $dates_to_book[] = date('Y-m-d', strtotime($start_date . " + {$i} weeks"));
            }

            foreach ($dates_to_book as $date) {
                $conflict = $bookingModel->checkSlotConflict($salon_id, $date, $start_time, $end_time);
                if ($conflict) {
                    $this->jsonResponse(['success' => false, 'message' => "Time slot unavailable on $date."], 400);
                }
            }
            
            foreach ($dates_to_book as $index => $date) {
                $booking_id = $bookingModel->createSingle($customer_id, $salon_id, $service_id, $date, $start_time, $end_time);
                if ($index === 0) {
                    $parent_booking_id = $booking_id;
                } elseif ($parent_booking_id) {
                    $stmt = $bookingModel->db->prepare("UPDATE bookings SET parent_booking_id = :pbid WHERE id = :id");
                    $stmt->execute(['pbid' => $parent_booking_id, 'id' => $booking_id]);
                }
                $created_ids[] = $booking_id;
            }
            
            $this->jsonResponse(['success' => true, 'message' => 'Booking(s) confirmed.', 'booking_ids' => $created_ids]);
        }
    }
}
