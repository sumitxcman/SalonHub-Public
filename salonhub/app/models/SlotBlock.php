<?php
require_once __DIR__ . '/Model.php';

class SlotBlock extends Model {
    public function addBlock($salon_id, $date, $start, $end) {
        $stmt = $this->db->prepare("INSERT INTO slot_blocks (salon_id, block_date, start_time, end_time) VALUES (:sid, :bdate, :stime, :etime)");
        return $stmt->execute(['sid' => $salon_id, 'bdate' => $date, 'stime' => $start, 'etime' => $end]);
    }
}
