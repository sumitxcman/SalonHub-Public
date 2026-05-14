<!-- Admin Sidebar -->
<aside class="w-80 bg-white border-r border-accent/10 p-10 flex flex-col hidden lg:flex">
    <div class="mb-16">
        <a href="../index.php" class="flex items-center gap-2">
            <div class="w-8 h-8 border border-accent rounded-full flex items-center justify-center text-accent font-playfair font-bold text-xs">S</div>
            <h1 class="text-xl font-playfair tracking-widest uppercase text-neutral-dark">Salon<span class="text-accent italic">Hub</span></h1>
        </a>
    </div>

    <nav class="flex-1 space-y-4">
        <a href="dashboard.php" class="sidebar-link px-6 py-4 rounded-2xl text-[10px] uppercase tracking-[0.3em] font-bold block transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'bg-accent text-white shadow-lg shadow-accent/20' : 'text-neutral-muted hover:bg-accent/5'; ?>">Dashboard</a>
        
        <a href="bookings.php" class="sidebar-link px-6 py-4 rounded-2xl text-[10px] uppercase tracking-[0.3em] font-bold block transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'bookings.php' ? 'bg-accent text-white shadow-lg shadow-accent/20' : 'text-neutral-muted hover:bg-accent/5'; ?>">Bookings</a>
        
        <a href="products.php" class="sidebar-link px-6 py-4 rounded-2xl text-[10px] uppercase tracking-[0.3em] font-bold block transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'bg-accent text-white shadow-lg shadow-accent/20' : 'text-neutral-muted hover:bg-accent/5'; ?>">Products</a>
        
        <a href="clients.php" class="sidebar-link px-6 py-4 rounded-2xl text-[10px] uppercase tracking-[0.3em] font-bold block transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'clients.php' ? 'bg-accent text-white shadow-lg shadow-accent/20' : 'text-neutral-muted hover:bg-accent/5'; ?>">Clients</a>
        
        <a href="settings.php" class="sidebar-link px-6 py-4 rounded-2xl text-[10px] uppercase tracking-[0.3em] font-bold block transition-all <?php echo basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'bg-accent text-white shadow-lg shadow-accent/20' : 'text-neutral-muted hover:bg-accent/5'; ?>">Settings</a>
    </nav>

    <div class="mt-auto">
        <a href="../index.php" class="text-neutral-muted text-[10px] uppercase tracking-widest hover:text-accent transition-all font-bold flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
            Logout
        </a>
    </div>
</aside>
