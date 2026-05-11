<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../models/Order.php';
require_once __DIR__ . '/../services/AuthService.php';

class ShopController extends Controller {
    public function listProducts() {
        $productModel = new Product();
        $this->jsonResponse(['success' => true, 'data' => $productModel->getAll()]);
    }

    public function checkout() {
        if (!AuthService::isAuthenticated()) {
            $this->jsonResponse(['success' => false, 'message' => 'Unauthorized.'], 401);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $customer_id = $_SESSION['user_id'];
            $cartItems = $_POST['items'] ?? []; 
            $total = 0;
            $productModel = new Product();
            $verifiedItems = [];
            foreach ($cartItems as $item) {
                $productId = $item['id'] ?? null;
                $quantity = (int)($item['quantity'] ?? 0);
                
                if ($productId && $quantity > 0) {
                    $product = $productModel->getById($productId);
                    if ($product) {
                        $price = $product['price'];
                        $total += ($price * $quantity);
                        $verifiedItems[] = [
                            'id' => $productId,
                            'quantity' => $quantity,
                            'price' => $price
                        ];
                    }
                }
            }

            if (empty($verifiedItems) || $total <= 0) {
                $this->jsonResponse(['success' => false, 'message' => 'Cart is empty or invalid.'], 400);
            }

            $orderModel = new Order();
            $order_id = $orderModel->createOrder($customer_id, $verifiedItems, $total);

            if ($order_id) {
                $this->jsonResponse(['success' => true, 'message' => 'Order placed.', 'order_id' => $order_id]);
            } else {
                $this->jsonResponse(['success' => false, 'message' => 'Processing failed.'], 500);
            }
        }
    }
}
