<?php require_once __DIR__ . '/partials/header.php'; ?>

<div class="auth-wrapper">
    <div class="card">
        <h2>Create Account</h2>
        <p style="text-align: center; color: #666; margin-bottom: 2rem;">Join the SalonHub community today.</p>
        <form method="POST" action="/salonhub/public/api/register">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="John Doe" required>
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="john@example.com" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Min. 8 characters" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        </form>
        <p style="text-align: center; margin-top: 1rem; font-size: 0.9rem;">
            Already have an account? <a href="/salonhub/public/login">Login</a>
        </p>
    </div>
</div>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
