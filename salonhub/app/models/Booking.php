<?php
require_once __DIR__ . '/Model.php';

class Booking extends Model {
    public function createSingle($customer_id, $salon_id, $service_id, $date, $start_time, $end_time) {
        $this->db->beginTransaction();
        try {
            $stmt = $this->db->prepare("INSERT INTO bookings (customer_id, salon_id, booking_date, start_time, end_time, status) VALUES (:cid, :sid, :bdate, :stime, :etime, 'pending')");
            $stmt->execute([
                'cid' => $customer_id,
                'sid' => $salon_id,
                'bdate' => $date,
                'stime' => $start_time,
                'etime' => $end_time
            ]);
            $booking_id = $this->db->lastInsertId();

            $stmt2 = $this->db->prepare("INSERT INTO booking_services (booking_id, service_id) VALUES (:bid, :srv_id)");
            $stmt2->execute(['bid' => $booking_id, 'srv_id' => $service_id]);
            
            $this->db->commit();
            return $booking_id;
        } catch (Exception $e) {
            $this->db->rollBack();
            return false;
        }
    }
    
    public function checkSlotConflict($salon_id, $date, $start_time, $end_time) {
        $stmt = $this->db->prepare("SELECT id FROM bookings WHERE salon_id = :sid AND booking_date = :bdate AND status != 'cancelled' AND (start_time < :etime AND end_time > :stime)");
        $stmt->execute(['sid' => $salon_id, 'bdate' => $date, 'stime' => $start_time, 'etime' => $end_time]);
        return $stmt->fetch() !== false;
    }

    public function getAllBookings() {
        $stmt = $this->db->query("SELECT b.*, u.name as customer_name, s.name as salon_name FROM bookings b JOIN users u ON b.customer_id = u.id JOIN salons s ON b.salon_id = s.id ORDER BY b.booking_date DESC");
        return $stmt->fetchAll();
    }
}
