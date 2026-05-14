<?php 
if (session_status() === PHP_SESSION_NONE) session_start(); 

// Dynamic path logic
$is_in_partials = strpos($_SERVER['SCRIPT_NAME'], '/partials/') !== false;
$base_path = $is_in_partials ? '../' : '';
$partial_path = $is_in_partials ? '' : 'partials/';

// Auto-include database connection
require_once $base_path . 'partials/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalonHub | Aesthetic Luxury Salon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Outfit:wght@300;400;600&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#FFFFFF',
                        'secondary': '#FDF5F7',
                        'accent': '#FF8FA3',
                        'accent-soft': '#FFD1DC',
                        'accent-dark': '#E07A5F',
                        'neutral-dark': '#1A1A1A',
                        'neutral-muted': '#666666',
                    },
                    fontFamily: {
                        'serif': ['"Cormorant Garamond"', 'serif'],
                        'playfair': ['"Playfair Display"', 'serif'],
                        'sans': ['Outfit', 'sans-serif'],
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 1.5s ease-out forwards',
                        'slide-up': 'slideUp 1s ease-out forwards',
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(30px)', opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #FFFFFF;
            color: #1A1A1A;
            scroll-behavior: smooth;
        }
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(255, 143, 163, 0.1);
        }
        .luxury-gradient {
            background: linear-gradient(135deg, #FFFFFF 0%, #FDF5F7 100%);
        }
        .text-glow {
            text-shadow: 0 0 15px rgba(255, 143, 163, 0.15);
        }
        .cursor-glow {
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255, 143, 163, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
        }
        /* Reveal Animation Classes */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #FFFFFF; }
        ::-webkit-scrollbar-thumb { background: #FF8FA3; border-radius: 10px; }
    </style>
</head>
<body class="bg-primary selection:bg-accent selection:text-white">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-nav py-4 px-6 md:px-12 flex justify-between items-center transition-all duration-500">
        <!-- Logo -->
        <a href="<?php echo $base_path; ?>index.php" class="flex items-center gap-3 group">
            <div class="relative">
                <div class="w-10 h-10 border-2 border-accent rounded-full flex items-center justify-center text-accent font-playfair font-bold text-sm group-hover:bg-accent group-hover:text-white transition-all duration-500">S</div>
                <div class="absolute -inset-1 bg-accent/20 rounded-full blur-sm opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <h1 class="text-2xl font-playfair tracking-[0.2em] uppercase text-neutral-dark">Salon<span class="text-accent italic lowercase">Hub</span></h1>
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center gap-8 font-sans text-[11px] uppercase tracking-[0.2em] font-bold text-neutral-dark/80">
            <!-- Home -->
            <a href="<?php echo $base_path; ?>index.php" class="hover:text-accent transition-colors duration-300 relative group">
                Home
                <span class="absolute -bottom-1 left-0 w-0 h-[1px] bg-accent transition-all duration-300 group-hover:w-full"></span>
            </a>

            <!-- Services Dropdown -->
            <div class="relative group">
                <a href="<?php echo $base_path; ?>services.php" class="flex items-center gap-1 hover:text-accent transition-colors duration-300">
                    Services
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:rotate-180 transition-transform duration-500"><path d="m6 9 6 6 6-6"/></svg>
                </a>
                <!-- Dropdown Menu -->
                <div class="absolute top-full -left-4 w-64 pt-4 opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-500 z-50 before:absolute before:-top-4 before:left-0 before:w-full before:h-4 before:content-['']">
                    <div class="bg-white/95 backdrop-blur-xl border border-accent/5 rounded-2xl shadow-2xl overflow-hidden">
                        <div class="p-4 space-y-1">
                        <a href="<?php echo $partial_path; ?>hair.php" class="flex items-center gap-4 p-3 hover:bg-secondary rounded-xl transition-all group/item">
                            <div class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center text-accent group-hover/item:bg-accent group-hover/item:text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 0 1 10 10c0 5.523-4.477 10-10 10S2 17.523 2 12A10 10 0 0 1 12 2Z"/></svg>
                            </div>
                            <div>
                                <p class="text-neutral-dark text-[10px] tracking-widest uppercase">Hair Artistry</p>
                                <p class="text-neutral-muted text-[8px] tracking-normal lowercase italic mt-0.5">Balayage & Couture Cuts</p>
                            </div>
                        </a>
                        <a href="<?php echo $partial_path; ?>spa.php" class="flex items-center gap-4 p-3 hover:bg-secondary rounded-xl transition-all group/item">
                            <div class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center text-accent group-hover/item:bg-accent group-hover/item:text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                            </div>
                            <div>
                                <p class="text-neutral-dark text-[10px] tracking-widest uppercase">Zen Spa</p>
                                <p class="text-neutral-muted text-[8px] tracking-normal lowercase italic mt-0.5">Rituals & Therapy</p>
                            </div>
                        </a>
                        <a href="<?php echo $partial_path; ?>makeup.php" class="flex items-center gap-4 p-3 hover:bg-secondary rounded-xl transition-all group/item">
                            <div class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center text-accent group-hover/item:bg-accent group-hover/item:text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 3a2 2 0 1 1-4 0"/><path d="M19 3v12"/><path d="M15 3v12"/><path d="M15 15a2 2 0 1 0 4 0"/></svg>
                            </div>
                            <div>
                                <p class="text-neutral-dark text-[10px] tracking-widest uppercase">Makeup</p>
                                <p class="text-neutral-muted text-[8px] tracking-normal lowercase italic mt-0.5">Bridal & Editorial</p>
                            </div>
                        </a>
                        <a href="<?php echo $partial_path; ?>nails.php" class="flex items-center gap-4 p-3 hover:bg-secondary rounded-xl transition-all group/item">
                            <div class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center text-accent group-hover/item:bg-accent group-hover/item:text-white transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M2 12h20"/></svg>
                            </div>
                            <div>
                                <p class="text-neutral-dark text-[10px] tracking-widest uppercase">Nails</p>
                                <p class="text-neutral-muted text-[8px] tracking-normal lowercase italic mt-0.5">Couture & Extensions</p>
                            </div>
                        </a>
                    </div>
                    <div class="bg-accent/5 p-4 text-center">
                        <a href="<?php echo $base_path; ?>services.php" class="text-accent text-[9px] hover:underline">View All Services</a>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Portfolio Dropdown -->
            <div class="relative group">
                <a href="<?php echo $base_path; ?>gallery.php" class="flex items-center gap-1 hover:text-accent transition-colors duration-300">
                    Gallery
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:rotate-180 transition-transform duration-500"><path d="m6 9 6 6 6-6"/></svg>
                </a>
                <div class="absolute top-full -left-4 w-56 pt-4 opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-500 z-50 before:absolute before:-top-4 before:left-0 before:w-full before:h-4 before:content-['']">
                    <div class="bg-white/95 backdrop-blur-xl border border-accent/5 rounded-2xl shadow-2xl overflow-hidden">
                        <div class="p-4 space-y-1">
                        <a href="<?php echo $base_path; ?>gallery.php" class="block p-3 hover:bg-secondary rounded-xl text-[10px] tracking-widest transition-all">All Masterpieces</a>
                        <a href="<?php echo $partial_path; ?>hair.php" class="block p-3 hover:bg-secondary rounded-xl text-[10px] tracking-widest transition-all">Hair Collection</a>
                        <a href="<?php echo $partial_path; ?>makeup.php" class="block p-3 hover:bg-secondary rounded-xl text-[10px] tracking-widest transition-all">Bridal Artistry</a>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Boutique Dropdown -->
            <div class="relative group">
                <a href="<?php echo $base_path; ?>shop.php" class="flex items-center gap-1 hover:text-accent transition-colors duration-300">
                    Boutique
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:rotate-180 transition-transform duration-500"><path d="m6 9 6 6 6-6"/></svg>
                </a>
                <div class="absolute top-full -left-4 w-64 pt-4 opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-500 z-50 before:absolute before:-top-4 before:left-0 before:w-full before:h-4 before:content-['']">
                    <div class="bg-white/95 backdrop-blur-xl border border-accent/5 rounded-2xl shadow-2xl overflow-hidden">
                        <div class="grid grid-cols-1 p-4 gap-2">
                        <a href="<?php echo $base_path; ?>shop.php" class="flex items-center justify-between p-3 hover:bg-secondary rounded-xl transition-all group/shop">
                            <span class="text-[10px]">Shop Home</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent opacity-0 group-hover/shop:opacity-100 -translate-x-2 group-hover/shop:translate-x-0 transition-all"><path d="m9 18 6-6-6-6"/></svg>
                        </a>
                        <a href="<?php echo $partial_path; ?>spa.php" class="flex items-center justify-between p-3 hover:bg-secondary rounded-xl transition-all group/shop cursor-pointer">
                            <span class="text-[10px] pointer-events-none">Skincare Luxe</span>
                            <span class="text-[8px] bg-accent/10 text-accent px-2 py-0.5 rounded-full uppercase pointer-events-none">New</span>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side: Search, Account, CTA -->
        <div class="flex items-center gap-6">
            <!-- Search -->
            <button id="search-open" class="hidden md:block text-neutral-dark hover:text-accent transition-all duration-300 transform hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>

            <!-- Dashboard Options / Account -->
            <div class="relative group">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <button class="text-accent flex items-center gap-2 py-2 group-hover:text-neutral-dark transition-all duration-300">
                        <div class="w-8 h-8 bg-accent/10 rounded-full flex items-center justify-center border border-accent/20">
                            <span class="text-[10px] font-bold"><?php echo strtoupper(substr($_SESSION['user_name'], 0, 1)); ?></span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:rotate-180 transition-transform duration-500"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <!-- Dashboard Dropdown -->
                    <div class="absolute top-full right-0 mt-4 w-56 bg-white/95 backdrop-blur-xl border border-accent/5 rounded-2xl shadow-2xl opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-500">
                        <div class="p-4 space-y-1">
                            <p class="px-3 py-1 text-[8px] uppercase tracking-widest text-neutral-muted border-b border-accent/5 mb-2">Welcome, <?php echo explode(' ', $_SESSION['user_name'])[0]; ?></p>
                            <a href="<?php echo $base_path; ?>user_dashboard.php" class="flex items-center gap-3 p-3 hover:bg-secondary rounded-xl text-[10px] tracking-widest transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
                                Dashboard
                            </a>
                            <a href="<?php echo $base_path; ?>logout.php" class="flex items-center gap-3 p-3 hover:bg-rose-50 text-rose-500 rounded-xl text-[10px] tracking-widest transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                                Sign Out
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="<?php echo $base_path; ?>login.php" class="text-neutral-dark hover:text-accent transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </a>
                <?php endif; ?>
            </div>

            <!-- CTA -->
            <a href="<?php echo $base_path; ?>booking.php" class="hidden md:block bg-accent text-white px-8 py-3 rounded-full hover:bg-neutral-dark transition-all duration-500 shadow-xl shadow-accent/20 text-[10px] uppercase tracking-widest font-bold">Book Appointment</a>

            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-open" class="lg:hidden text-neutral-dark p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </button>
        </div>
    </nav>

    <!-- Full Screen Search Overlay -->
    <div id="search-overlay" class="fixed inset-0 bg-white/95 backdrop-blur-2xl z-[100] flex items-center justify-center opacity-0 pointer-events-none transition-all duration-500">
        <button id="search-close" class="absolute top-10 right-10 text-neutral-dark hover:text-accent transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        <div class="w-full max-w-4xl px-10 text-center">
            <h3 class="text-accent font-sans uppercase tracking-[0.6em] text-xs mb-10 font-bold">What are you looking for?</h3>
            <input type="text" placeholder="SEARCH SERVICES, ARTISTS, PRODUCTS..." class="w-full bg-transparent border-b-2 border-accent/20 py-6 text-3xl md:text-5xl font-playfair text-neutral-dark focus:outline-none focus:border-accent transition-all placeholder:text-neutral-muted/30">
            <div class="mt-12 flex flex-wrap justify-center gap-6 text-neutral-muted font-sans text-[10px] uppercase tracking-widest font-bold">
                <span>Trending:</span>
                <a href="<?php echo $partial_path; ?>hair.php" class="hover:text-accent transition-colors">Balayage</a>
                <a href="<?php echo $partial_path; ?>makeup.php" class="hover:text-accent transition-colors">Bridal</a>
                <a href="<?php echo $partial_path; ?>nails.php" class="hover:text-accent transition-colors">Nail Couture</a>
            </div>
        </div>
    </div>

    <script>
        const searchOpen = document.getElementById('search-open');
        const searchOpenMobile = document.getElementById('search-open-mobile');
        const searchClose = document.getElementById('search-close');
        const searchOverlay = document.getElementById('search-overlay');

        const openSearch = () => {
            searchOverlay.classList.remove('opacity-0', 'pointer-events-none');
            searchOverlay.classList.add('opacity-100');
            setTimeout(() => searchOverlay.querySelector('input').focus(), 500);
        };

        const closeSearch = () => {
            searchOverlay.classList.add('opacity-0', 'pointer-events-none');
            searchOverlay.classList.remove('opacity-100');
        };

        searchOpen.onclick = openSearch;
        searchOpenMobile.onclick = openSearch;
        searchClose.onclick = closeSearch;

        // Escape key to close
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeSearch();
        });
    </script>
