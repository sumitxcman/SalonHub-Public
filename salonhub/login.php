<?php 
require_once 'partials/db.php';
session_start();

$error = '';
$success = $_SESSION['success_msg'] ?? '';
unset($_SESSION['success_msg']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $error = 'Please enter both email and password.';
    } else {
        try {
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password_hash'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['full_name'];
                $_SESSION['user_email'] = $user['email'];
                
                header('Location: user_dashboard.php');
                exit();
            } else {
                $error = 'Invalid email or password.';
            }
        } catch (PDOException $e) {
            $error = 'Database error: ' . $e->getMessage();
        }
    }
}

include 'partials/header.php'; 
?>

<!-- Login Section -->
<section class="min-h-screen pt-32 pb-20 px-10 flex items-center justify-center bg-secondary relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl -translate-y-1/2 -translate-x-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl translate-y-1/2 translate-x-1/2"></div>

    <div class="max-w-md w-full bg-white p-10 md:p-16 rounded-[2.5rem] shadow-2xl border border-accent/5 reveal relative z-10">
        <div class="text-center mb-12">
            <h3 class="text-accent font-sans uppercase tracking-[0.4em] text-[10px] mb-4 font-bold">Welcome Back</h3>
            <h2 class="text-4xl font-playfair text-neutral-dark">Sign <span class="italic text-accent">In</span></h2>
        </div>

        <?php if ($error): ?>
            <div class="mb-6 p-4 bg-rose-50 border border-rose-100 text-rose-500 text-xs rounded-2xl font-sans tracking-widest text-center">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-500 text-xs rounded-2xl font-sans tracking-widest text-center">
                <?php echo $success; ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST" class="space-y-6">
            <div class="space-y-2">
                <label class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest ml-1 font-bold">Email Address</label>
                <input type="email" name="email" placeholder="ALEXA@EXAMPLE.COM" required class="w-full bg-secondary border border-accent/10 px-6 py-4 rounded-2xl focus:outline-none focus:border-accent transition-all text-sm font-sans tracking-wider text-neutral-dark">
            </div>

            <div class="space-y-2">
                <div class="flex justify-between items-center ml-1">
                    <label class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest font-bold">Password</label>
                    <a href="#" class="text-accent text-[8px] uppercase tracking-widest font-bold hover:text-neutral-dark transition-colors">Forgot?</a>
                </div>
                <input type="password" name="password" placeholder="••••••••" required class="w-full bg-secondary border border-accent/10 px-6 py-4 rounded-2xl focus:outline-none focus:border-accent transition-all text-sm font-sans tracking-wider text-neutral-dark">
            </div>

            <div class="pt-6">
                <button type="submit" class="w-full bg-accent text-white py-5 rounded-full font-sans uppercase tracking-[0.4em] text-sm hover:bg-neutral-dark transition-all duration-500 shadow-xl shadow-accent/20">
                    Sign In
                </button>
            </div>
        </form>

        <div class="mt-12 text-center border-t border-accent/5 pt-12">
            <p class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest">
                Don't have an account? <a href="register.php" class="text-accent font-bold hover:text-neutral-dark transition-colors">Create One</a>
            </p>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>
