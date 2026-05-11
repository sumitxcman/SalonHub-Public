<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../models/Booking.php';
require_once __DIR__ . '/../services/AuthService.php';

class AdminController extends Controller {
    public function __construct() {
        if (!AuthService::hasRole('admin')) {
            $this->jsonResponse(['success' => false, 'message' => 'Forbidden'], 403);
            exit;
        }
    }

    public function dashboard() {
        $this->view('admin/dashboard');
    }

    public function users() {
        $userModel = new User();
        $users = $userModel->getAll();
        $this->view('admin/users', ['users' => $users]);
    }

    public function products() {
        $productModel = new Product();
        $products = $productModel->getAll();
        $this->view('admin/products', ['products' => $products]);
    }

    public function bookings() {
        $bookingModel = new Booking();
        $bookings = $bookingModel->getAllBookings();
        $this->view('admin/bookings', ['bookings' => $bookings]);
    }
}
