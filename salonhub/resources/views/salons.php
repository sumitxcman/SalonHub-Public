<?php require_once __DIR__ . '/partials/header.php'; ?>

<div style="text-align: center; margin-bottom: 3rem;">
    <h1 style="font-size: 2.5rem; margin-bottom: 0.5rem;">Discover Your Perfect Look</h1>
    <p style="color: #666;">Book the best stylists at elite salon branches near you.</p>
</div>

<!-- Salon Search (From Step 12) -->
<div class="card" style="max-width: 600px; margin: 0 auto 3rem; padding: 1.5rem;">
    <form method="GET" action="/salonhub/public/api/salons/search" style="display: flex; gap: 10px;">
        <input type="text" name="city" placeholder="Enter city (e.g. New York)" style="flex: 1; padding: 0.8rem; border: 1px solid #ddd; border-radius: 4px;">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<div class="grid">
    <!-- Static Example Cards for Showcase -->
    <div class="item-card">
        <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=800&q=80" loading="lazy" alt="Elite Stylists">
        <div class="item-content">
            <h3>Elite Salon - Downtown</h3>
            <p>123 Luxury Ave, Suite 100</p>
            <p style="margin-top: 10px; font-weight: 600; color: var(--accent);">Rating: ⭐⭐⭐⭐⭐</p>
            <a href="/salonhub/public/api/salons/1/services" class="btn btn-primary btn-block" style="margin-top: 15px;">Book Appointment</a>
        </div>
    </div>

    <div class="item-card">
        <img src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?auto=format&fit=crop&w=800&q=80" loading="lazy" alt="Modern Salon">
        <div class="item-content">
            <h3>Modern Beauty Studio</h3>
            <p>456 Fashion Blvd, East Side</p>
            <p style="margin-top: 10px; font-weight: 600; color: var(--accent);">Rating: ⭐⭐⭐⭐</p>
            <a href="/salonhub/public/api/salons/2/services" class="btn btn-primary btn-block" style="margin-top: 15px;">Book Appointment</a>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
