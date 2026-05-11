<?php require_once __DIR__ . '/../partials/header.php'; ?>

<div style="margin-bottom: 2rem;">
    <h1>Admin Console</h1>
    <p>Welcome to the SalonHub global management suite.</p>
</div>

<div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
    <div class="card" style="text-align: center; padding: 1.5rem;">
        <h3 style="margin-bottom: 1rem;">Users</h3>
        <p style="font-size: 2rem; font-weight: 700;">View All</p>
        <a href="/salonhub/public/admin/users" class="btn btn-primary btn-block" style="margin-top: 1rem;">Manage</a>
    </div>
    <div class="card" style="text-align: center; padding: 1.5rem;">
        <h3 style="margin-bottom: 1rem;">Products</h3>
        <p style="font-size: 2rem; font-weight: 700;">Inventory</p>
        <a href="/salonhub/public/admin/products" class="btn btn-primary btn-block" style="margin-top: 1rem;">Manage</a>
    </div>
    <div class="card" style="text-align: center; padding: 1.5rem;">
        <h3 style="margin-bottom: 1rem;">Bookings</h3>
        <p style="font-size: 2rem; font-weight: 700;">Schedule</p>
        <a href="/salonhub/public/admin/bookings" class="btn btn-primary btn-block" style="margin-top: 1rem;">View</a>
    </div>
</div>

<div class="card" style="max-width: none; margin-top: 3rem;">
    <h2>Performance Overview</h2>
    <p>Analytics integration pending live data population.</p>
</div>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>
