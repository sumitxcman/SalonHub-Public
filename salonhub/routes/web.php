<?php
// Web Routes
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/SalonController.php';
require_once __DIR__ . '/../app/controllers/BookingController.php';
require_once __DIR__ . '/../app/controllers/ShopController.php';
require_once __DIR__ . '/../app/controllers/CouponController.php';
require_once __DIR__ . '/../app/controllers/EcommerceEnhancementController.php';
require_once __DIR__ . '/../app/controllers/AdvancedBookingController.php';
require_once __DIR__ . '/../app/controllers/AnalyticsController.php';
require_once __DIR__ . '/../app/controllers/LoyaltyController.php';

require_once __DIR__ . '/../app/controllers/AdminController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Dynamic base path detection: identifies the folder where index.php resides
$script_path = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
if ($script_path !== '/' && strpos($uri, $script_path) === 0) {
    $uri = substr($uri, strlen($script_path));
}

if (empty($uri) || $uri === '') $uri = '/';

require_once __DIR__ . '/../app/controllers/HomeController.php';

$authController = new AuthController();
$salonController = new SalonController();
$bookingController = new BookingController();
$shopController = new ShopController();
$couponController = new CouponController();
$ecommerceEnhance = new EcommerceEnhancementController();
$advancedBooking = new AdvancedBookingController();
$analyticsController = new AnalyticsController();
$loyaltyController = new LoyaltyController();
$adminController = new AdminController();
$homeController = new HomeController();

if (preg_match('/^\/api\/salons\/(\d+)\/services$/', $uri, $matches)) {
    $salonController->showSalonServices($matches[1]);
    exit;
}

switch ($uri) {
    case '/login': $authController->showLogin(); break;
    case '/register': $authController->showRegister(); break;
    case '/api/login': $authController->processLogin(); break;
    case '/api/register': $authController->processRegister(); break;
    case '/logout': $authController->logout(); break;
    
    case '/api/salons': $salonController->listSalons(); break;
    case '/api/salons/search': $salonController->searchLocation(); break;
    case '/api/bookings/create': $bookingController->create(); break;
    case '/api/bookings/block': $advancedBooking->blockSlot(); break;
    
    case '/api/products': $shopController->listProducts(); break;
    case '/api/shop/checkout': $shopController->checkout(); break;
    
    case '/api/coupons/validate': $couponController->validate(); break;
    case '/api/wishlists/add': $ecommerceEnhance->addWishlist(); break;
    case '/api/reviews/add': $ecommerceEnhance->submitReview(); break;
    
    case '/api/analytics': $analyticsController->getDashboard(); break;
    
    case '/api/loyalty': $loyaltyController->checkStatus(); break;

    case '/admin/dashboard': $adminController->dashboard(); break;
    case '/admin/users': $adminController->users(); break;
    case '/admin/products': $adminController->products(); break;
    case '/admin/bookings': $adminController->bookings(); break;
    
    case '/': $homeController->index(); break;
    default: http_response_code(404); echo "404 Not Found"; break;
}
