<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'SalonHub - Premium Salon Experience' ?></title>
    <link rel="stylesheet" href="/salonhub/public/assets/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="/salonhub/public/" class="logo">SalonHub</a>
            <div class="links">
                <a href="/salonhub/public/">Salons</a>
                <a href="/salonhub/public/api/products">Shop</a>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="/salonhub/public/api/loyalty">Loyalty (<?= $_SESSION['user_name'] ?>)</a>
                    <?php if ($_SESSION['user_role'] === 'admin'): ?>
                        <a href="/salonhub/public/admin/dashboard" style="color: var(--accent);">Admin</a>
                    <?php endif; ?>
                    <a href="/salonhub/public/logout">Logout</a>
                <?php else: ?>
                    <a href="/salonhub/public/login">Login</a>
                    <a href="/salonhub/public/register">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container" style="padding-top: 2rem; min-height: 80vh;">
