<?php require_once __DIR__ . '/partials/header.php'; ?>

<div class="auth-wrapper">
    <div class="card">
        <h2>Welcome Back</h2>
        <form method="POST" action="/salonhub/public/api/login">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="email@example.com" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login Now</button>
        </form>
        <p style="text-align: center; margin-top: 1rem; font-size: 0.9rem;">
            Don't have an account? <a href="/salonhub/public/register">Register</a>
        </p>
    </div>
</div>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
