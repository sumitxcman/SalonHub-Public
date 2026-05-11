<?php
require_once __DIR__ . '/Model.php';

class Order extends Model {
    public function createOrder($customer_id, $items, $total) {
        $this->db->beginTransaction();
        try {
            $stmt = $this->db->prepare("INSERT INTO orders (customer_id, total_amount, payment_status) VALUES (:cid, :tot, 'pending')");
            $stmt->execute(['cid' => $customer_id, 'tot' => $total]);
            $order_id = $this->db->lastInsertId();

            $stmt_item = $this->db->prepare("INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (:oid, :pid, :qty, :prc)");
            
            foreach ($items as $item) {
                $stmt_item->execute([
                    'oid' => $order_id,
                    'pid' => $item['id'],
                    'qty' => $item['quantity'],
                    'prc' => $item['price']
                ]);
            }
            
            $this->db->commit();
            return $order_id;
        } catch (Exception $e) {
            $this->db->rollBack();
            return false;
        }
    }
}
