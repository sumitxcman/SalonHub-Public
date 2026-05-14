<?php 
include 'partials/header.php'; 

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_name = $_SESSION['user_name'];
?>

<!-- User Dashboard Hero -->
<section class="pt-32 pb-12 px-10 bg-secondary relative overflow-hidden">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-end gap-10 reveal">
        <div>
            <h3 class="text-accent font-sans uppercase tracking-[0.4em] text-[10px] mb-4 font-bold">Member Sanctuary</h3>
            <h2 class="text-5xl md:text-6xl font-playfair text-neutral-dark leading-tight">Bonjour, <span class="italic text-accent"><?php echo htmlspecialchars($user_name); ?></span></h2>
            <div class="flex gap-4 items-center mt-4">
                <p class="text-neutral-muted font-sans text-sm uppercase tracking-widest">Imperial Elite Member</p>
                <span class="text-accent/30">|</span>
                <a href="logout.php" class="text-rose-400 font-sans text-[10px] uppercase tracking-widest font-bold hover:text-rose-600 transition-colors">Sign Out</a>
            </div>
        </div>
        <div class="flex gap-4">
            <div class="text-right">
                <p class="text-neutral-muted text-[10px] uppercase tracking-widest font-bold mb-1">Upcoming Visit</p>
                <p class="text-neutral-dark font-playfair text-xl">May 15 - 2:00 PM</p>
            </div>
            <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            </div>
        </div>
    </div>
</section>

<!-- Dashboard Search Bar Section -->
<section class="py-12 px-10 bg-white border-y border-accent/5">
    <div class="max-w-7xl mx-auto">
        <div class="relative max-w-4xl mx-auto reveal">
            <div class="absolute left-8 top-1/2 -translate-y-1/2 text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </div>
            <input type="text" placeholder="Search for your next transformation..." class="w-full bg-secondary border border-accent/10 pl-20 pr-10 py-8 rounded-[2rem] text-xl font-playfair text-neutral-dark focus:outline-none focus:border-accent transition-all shadow-xl shadow-accent/5 placeholder:text-neutral-muted/40">
            <button class="absolute right-6 top-1/2 -translate-y-1/2 bg-accent text-white px-8 py-3 rounded-2xl text-[10px] uppercase tracking-widest font-bold hover:bg-neutral-dark transition-all">Search</button>
        </div>
    </div>
</section>

<!-- Dashboard Main Content -->
<section class="py-20 px-10 bg-white">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-16">
        
        <!-- Left: Appointments & History -->
        <div class="lg:col-span-2 space-y-12">
            <div class="reveal">
                <h3 class="text-2xl font-playfair text-neutral-dark mb-8">My <span class="italic text-accent">Sanctuary visits</span></h3>
                <div class="space-y-6">
                    <!-- Card 1 -->
                    <div class="bg-secondary p-8 rounded-3xl border border-accent/5 flex justify-between items-center group hover:bg-white hover:shadow-2xl hover:border-accent/10 transition-all duration-500">
                        <div class="flex gap-6 items-center">
                            <div class="w-14 h-14 bg-white rounded-2xl overflow-hidden shadow-sm">
                                <img src="assets/img/service2.png" alt="Makeup" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="text-lg font-bold">Bridal Artistry</h4>
                                <p class="text-neutral-muted text-[10px] uppercase tracking-widest">Master: Isabella Rossi</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-neutral-dark font-bold">May 15, 2026</p>
                            <span class="text-emerald-500 text-[9px] uppercase tracking-widest font-bold">Confirmed</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reveal">
                <h3 class="text-2xl font-playfair text-neutral-dark mb-8">Loyalty <span class="italic text-accent">Imperial Points</span></h3>
                <div class="bg-accent p-10 rounded-[2.5rem] text-white shadow-2xl shadow-accent/20 flex flex-col md:flex-row justify-between items-center gap-10">
                    <div>
                        <p class="text-[10px] uppercase tracking-widest font-bold mb-2">Available Credits</p>
                        <h4 class="text-5xl font-playfair">12,450</h4>
                    </div>
                    <a href="shop.php" class="bg-white text-accent px-10 py-4 rounded-full text-[10px] uppercase tracking-widest font-bold hover:bg-neutral-dark hover:text-white transition-all">Redeem Rewards</a>
                </div>
            </div>
        </div>

        <!-- Right: Recommendations -->
        <div class="space-y-12">
            <div class="reveal">
                <h3 class="text-2xl font-playfair text-neutral-dark mb-8">Masterpiece <span class="italic text-accent">of the Day</span></h3>
                <div class="relative group overflow-hidden rounded-[2rem] shadow-2xl aspect-[4/5]">
                    <img src="assets/img/service1.png" alt="Curated" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-neutral-dark/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 p-8">
                        <p class="text-accent text-[10px] uppercase tracking-widest font-bold mb-2">Trending Now</p>
                        <h4 class="text-white font-playfair text-2xl mb-4">Platinum Sculpting</h4>
                        <a href="booking.php" class="text-white text-[10px] uppercase tracking-widest font-bold border-b border-white pb-1">Book Session</a>
                    </div>
                </div>
            </div>

            <div class="reveal">
                <h3 class="text-2xl font-playfair text-neutral-dark mb-8">Quick <span class="italic text-accent">Actions</span></h3>
                <div class="grid grid-cols-2 gap-4">
                    <a href="gallery.php" class="bg-secondary p-6 rounded-2xl text-center hover:bg-accent hover:text-white transition-all group">
                        <p class="text-[10px] uppercase tracking-widest font-bold">Portfolio</p>
                    </a>
                    <a href="shop.php" class="bg-secondary p-6 rounded-2xl text-center hover:bg-accent hover:text-white transition-all group">
                        <p class="text-[10px] uppercase tracking-widest font-bold">Boutique</p>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'partials/footer.php'; ?>
