<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/SlotBlock.php';
require_once __DIR__ . '/../services/AuthService.php';

class AdvancedBookingController extends Controller {
    public function blockSlot() {
        if (!AuthService::hasRole('owner') && !AuthService::hasRole('admin')) {
            $this->jsonResponse(['success' => false], 401);
        }
        $salon_id = $_POST['salon_id'] ?? null;
        $date = $_POST['block_date'] ?? null;
        $start = $_POST['start_time'] ?? null;
        $end = $_POST['end_time'] ?? null;
        if ($salon_id && $date && $start && $end) {
            $sb = new SlotBlock();
            $sb->addBlock($salon_id, $date, $start, $end);
            $this->jsonResponse(['success' => true, 'message' => 'Slot blocked manually.']);
        }
    }
}
