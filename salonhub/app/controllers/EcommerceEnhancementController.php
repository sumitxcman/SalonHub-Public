<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/Wishlist.php';
require_once __DIR__ . '/../models/Review.php';
require_once __DIR__ . '/../services/AuthService.php';

class EcommerceEnhancementController extends Controller {
    public function addWishlist() {
        if (!AuthService::isAuthenticated()) $this->jsonResponse(['success' => false], 401);
        $product_id = $_POST['product_id'] ?? null;
        if($product_id){
            $wl = new Wishlist();
            $wl->add($_SESSION['user_id'], $product_id);
            $this->jsonResponse(['success' => true, 'message' => 'Added to wishlist.']);
        }
    }
    public function submitReview() {
        if (!AuthService::isAuthenticated()) $this->jsonResponse(['success' => false], 401);
        $product_id = $_POST['product_id'] ?? null;
        $rating = $_POST['rating'] ?? 5;
        $text = $_POST['text'] ?? '';
        if($product_id){
            $rev = new Review();
            $rev->addReview($product_id, $_SESSION['user_id'], $rating, $text);
            $this->jsonResponse(['success' => true, 'message' => 'Review added.']);
        }
    }
}
