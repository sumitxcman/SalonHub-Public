<?php 
require_once 'partials/db.php';
session_start();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($full_name) || empty($email) || empty($password)) {
        $error = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email format.';
    } else {
        try {
            // Create users table if it doesn't exist
            $pdo->exec("CREATE TABLE IF NOT EXISTS users (
                id SERIAL PRIMARY KEY,
                full_name VARCHAR(255) NOT NULL,
                email VARCHAR(255) UNIQUE NOT NULL,
                password_hash VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )");

            // Check if email exists
            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->execute([$email]);
            if ($stmt->fetch()) {
                $error = 'Email already registered.';
            } else {
                // Insert user
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("INSERT INTO users (full_name, email, password_hash) VALUES (?, ?, ?)");
                $stmt->execute([$full_name, $email, $hashed_password]);
                
                $_SESSION['success_msg'] = 'Registration successful! Please login.';
                header('Location: login.php');
                exit();
            }
        } catch (PDOException $e) {
            $error = 'Database error: ' . $e->getMessage();
        }
    }
}

include 'partials/header.php'; 
?>

<!-- Register Section -->
<section class="min-h-screen pt-32 pb-20 px-10 flex items-center justify-center bg-secondary relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl -translate-y-1/2 -translate-x-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl translate-y-1/2 translate-x-1/2"></div>

    <div class="max-w-md w-full bg-white p-10 md:p-16 rounded-[2.5rem] shadow-2xl border border-accent/5 reveal relative z-10">
        <div class="text-center mb-12">
            <h3 class="text-accent font-sans uppercase tracking-[0.4em] text-[10px] mb-4 font-bold">Join the Elite</h3>
            <h2 class="text-4xl font-playfair text-neutral-dark">Create <span class="italic text-accent">Account</span></h2>
        </div>

        <?php if ($error): ?>
            <div class="mb-6 p-4 bg-rose-50 border border-rose-100 text-rose-500 text-xs rounded-2xl font-sans tracking-widest text-center">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form action="register.php" method="POST" class="space-y-6">
            <div class="space-y-2">
                <label class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest ml-1 font-bold">Full Name</label>
                <input type="text" name="full_name" placeholder="ALEXA BLISS" required class="w-full bg-secondary border border-accent/10 px-6 py-4 rounded-2xl focus:outline-none focus:border-accent transition-all text-sm font-sans tracking-wider text-neutral-dark">
            </div>

            <div class="space-y-2">
                <label class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest ml-1 font-bold">Email Address</label>
                <input type="email" name="email" placeholder="ALEXA@EXAMPLE.COM" required class="w-full bg-secondary border border-accent/10 px-6 py-4 rounded-2xl focus:outline-none focus:border-accent transition-all text-sm font-sans tracking-wider text-neutral-dark">
            </div>

            <div class="space-y-2">
                <label class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest ml-1 font-bold">Password</label>
                <input type="password" name="password" placeholder="••••••••" required class="w-full bg-secondary border border-accent/10 px-6 py-4 rounded-2xl focus:outline-none focus:border-accent transition-all text-sm font-sans tracking-wider text-neutral-dark">
            </div>

            <div class="pt-6">
                <button type="submit" class="w-full bg-accent text-white py-5 rounded-full font-sans uppercase tracking-[0.4em] text-sm hover:bg-neutral-dark transition-all duration-500 shadow-xl shadow-accent/20">
                    Create Account
                </button>
            </div>
        </form>

        <div class="mt-12 text-center">
            <p class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest">
                Already a member? <a href="login.php" class="text-accent font-bold hover:text-neutral-dark transition-colors">Sign In</a>
            </p>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>
