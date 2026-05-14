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

        <!-- Hamburger Icon (Mobile Only) -->
        <button id="mobile-menu-open" class="lg:hidden text-neutral-dark hover:text-accent p-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x1="20" y1="12" y2="12"/><line x1="4" x1="20" y1="6" y2="6"/><line x1="4" x1="20" y1="18" y2="18"/></svg>
        </button>

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
                    </div>
                </div>
            </div>

            <!-- Gallery Dropdown -->
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

            <a href="<?php echo $base_path; ?>membership.php" class="hover:text-accent transition-colors duration-300 relative group">
                Membership
                <span class="absolute -bottom-1 left-0 w-0 h-[1px] bg-accent transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="<?php echo $base_path; ?>contact.php" class="hover:text-accent transition-colors duration-300 relative group">
                Contact
                <span class="absolute -bottom-1 left-0 w-0 h-[1px] bg-accent transition-all duration-300 group-hover:w-full"></span>
            </a>

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
                            <a href="<?php echo $partial_path; ?>spa.php" class="flex items-center justify-between p-3 hover:bg-secondary rounded-xl transition-all group/shop">
                                <span class="text-[10px]">Skincare Luxe</span>
                                <span class="text-[8px] bg-accent/10 text-accent px-2 py-0.5 rounded-full uppercase">New</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side: Search, Account, CTA -->
        <div class="flex items-center gap-6 relative">
            <!-- Header Search Bar (Expanding to the left) -->
            <div id="header-search-container" class="absolute right-[100%] top-1/2 -translate-y-1/2 w-0 overflow-hidden transition-all duration-500 bg-white z-10 flex items-center mr-4">
                <input type="text" id="header-search-input" placeholder="SEARCH SERVICES..." class="w-[200px] bg-secondary px-6 py-2 rounded-full text-[10px] font-sans uppercase tracking-widest border border-accent/10 focus:outline-none focus:border-accent">
                <button id="header-search-close" class="ml-2 text-neutral-muted hover:text-accent p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>

            <!-- Search Icon -->
            <button id="search-open" class="text-neutral-dark hover:text-accent transition-all duration-300 transform hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
            <button id="cart-toggle" class="relative text-neutral-dark hover:text-accent transition-all transform hover:scale-110 duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                <span id="cart-count" class="absolute -top-2 -right-2 bg-accent text-white text-[8px] font-bold w-4 h-4 rounded-full flex items-center justify-center">0</span>
            </button>
            
            <div class="relative group">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <button class="text-accent flex items-center gap-2 py-2">
                        <div class="w-8 h-8 bg-accent/10 rounded-full flex items-center justify-center border border-accent/20">
                            <span class="text-[10px] font-bold"><?php echo strtoupper(substr($_SESSION['user_name'], 0, 1)); ?></span>
                        </div>
                    </button>
                <?php else: ?>
                    <a href="<?php echo $base_path; ?>login.php" class="text-neutral-dark hover:text-accent transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </a>
                <?php endif; ?>
            </div>

            <a href="<?php echo $base_path; ?>booking.php" class="hidden md:block bg-accent text-white px-8 py-3 rounded-full hover:bg-neutral-dark transition-all duration-500 shadow-xl shadow-accent/20 text-[10px] uppercase tracking-widest font-bold">Book Appointment</a>
        </div>
    </nav>

    <!-- Search Overlay -->
    <div id="search-overlay" class="fixed inset-0 bg-white/95 backdrop-blur-2xl z-[100] flex items-center justify-center opacity-0 pointer-events-none transition-all duration-500">
        <button id="search-close" class="absolute top-10 right-10 text-neutral-dark hover:text-accent">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        <div class="w-full max-w-4xl px-10 text-center">
            <input type="text" placeholder="SEARCH SERVICES..." class="w-full bg-transparent border-b-2 border-accent/20 py-6 text-5xl font-playfair text-neutral-dark focus:outline-none focus:border-accent transition-all">
        </div>
    </div>

    <!-- Cart Drawer -->
    <div id="cart-drawer" class="fixed inset-0 z-[100] pointer-events-none overflow-hidden">
        <div id="cart-overlay" class="absolute inset-0 bg-neutral-dark/40 backdrop-blur-sm opacity-0 transition-opacity duration-500"></div>
        <div id="cart-panel" class="absolute top-0 right-0 w-full max-w-md h-full bg-white shadow-2xl translate-x-full transition-transform duration-700 flex flex-col">
            <div class="p-8 border-b border-accent/10 flex justify-between items-center bg-secondary/30">
                <h3 class="text-xl font-playfair text-neutral-dark italic">Your Sanctuary <span class="text-accent not-italic">Bag</span></h3>
                <button id="cart-close" class="text-neutral-muted hover:text-accent transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <div id="cart-items" class="flex-1 overflow-y-auto p-8 space-y-8">
                <div class="text-center py-20 opacity-40 italic font-sans text-sm">Your sanctuary bag is empty.</div>
            </div>
            <div class="p-8 border-t border-accent/10 bg-secondary/20">
                <div class="flex justify-between items-center mb-8">
                    <span class="text-neutral-muted font-sans uppercase tracking-widest text-[10px] font-bold">Total Investment</span>
                    <span id="cart-total" class="text-2xl font-playfair text-neutral-dark font-bold">₹0.00</span>
                </div>
                <a href="<?php echo $base_path; ?>checkout.php" class="block text-center w-full bg-accent text-white py-5 rounded-full font-sans uppercase tracking-[0.3em] text-[10px] font-bold hover:bg-neutral-dark transition-all duration-500 shadow-2xl shadow-accent/20">
                    Proceed to Checkout
                </a>
            </div>
        </div>
    </div>
    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu-drawer" class="fixed inset-0 z-[110] pointer-events-none">
        <div id="mobile-menu-overlay" class="absolute inset-0 bg-neutral-dark/40 backdrop-blur-sm opacity-0 transition-opacity duration-500"></div>
        <div id="mobile-menu-panel" class="absolute top-0 left-0 w-[80%] max-w-sm h-full bg-white shadow-2xl -translate-x-full transition-transform duration-700 flex flex-col p-10">
            <div class="flex justify-between items-center mb-16">
                <h3 class="text-2xl font-playfair text-neutral-dark">Salon<span class="text-accent italic">Hub</span></h3>
                <button id="mobile-menu-close" class="text-neutral-muted hover:text-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <nav class="space-y-8 font-sans text-xs uppercase tracking-[0.3em] font-bold">
                <a href="<?php echo $base_path; ?>index.php" class="block hover:text-accent">Home</a>
                <a href="<?php echo $base_path; ?>services.php" class="block hover:text-accent">Services</a>
                <a href="<?php echo $base_path; ?>gallery.php" class="block hover:text-accent">Gallery</a>
                <a href="<?php echo $base_path; ?>membership.php" class="block hover:text-accent">Membership</a>
                <a href="<?php echo $base_path; ?>shop.php" class="block hover:text-accent">Boutique</a>
                <a href="<?php echo $base_path; ?>contact.php" class="block hover:text-accent">Contact</a>
            </nav>
            <div class="mt-auto pt-10 border-t border-accent/10">
                <a href="<?php echo $base_path; ?>booking.php" class="block w-full bg-accent text-white py-4 rounded-full text-center text-[10px] uppercase tracking-widest font-bold">Book Now</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mobile Menu Logic
            const mobileMenuOpen = document.getElementById('mobile-menu-open');
            const mobileMenuClose = document.getElementById('mobile-menu-close');
            const mobileMenuDrawer = document.getElementById('mobile-menu-drawer');
            const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
            const mobileMenuPanel = document.getElementById('mobile-menu-panel');

            const openMobileMenu = () => {
                mobileMenuDrawer.classList.remove('pointer-events-none');
                mobileMenuOverlay.classList.replace('opacity-0', 'opacity-100');
                mobileMenuPanel.classList.replace('-translate-x-full', 'translate-x-0');
            };

            const closeMobileMenu = () => {
                mobileMenuOverlay.classList.replace('opacity-100', 'opacity-0');
                mobileMenuPanel.classList.replace('translate-x-0', '-translate-x-full');
                setTimeout(() => mobileMenuDrawer.classList.add('pointer-events-none'), 500);
            };

            if (mobileMenuOpen) mobileMenuOpen.onclick = openMobileMenu;
            if (mobileMenuClose) mobileMenuClose.onclick = closeMobileMenu;
            if (mobileMenuOverlay) mobileMenuOverlay.onclick = closeMobileMenu;

            // Header Search Logic
            const searchOpen = document.getElementById('search-open');
            const searchClose = document.getElementById('header-search-close');
            const searchContainer = document.getElementById('header-search-container');
            const searchInput = document.getElementById('header-search-input');

            if (searchOpen) searchOpen.onclick = () => {
                searchContainer.style.width = '280px';
                searchContainer.style.paddingLeft = '10px';
                setTimeout(() => searchInput.focus(), 300);
            };
            if (searchClose) searchClose.onclick = () => {
                searchContainer.style.width = '0';
                searchContainer.style.paddingLeft = '0';
            };

            const cartToggle = document.getElementById('cart-toggle');
            const cartClose = document.getElementById('cart-close');
            const cartDrawer = document.getElementById('cart-drawer');
            const cartOverlay = document.getElementById('cart-overlay');
            const cartPanel = document.getElementById('cart-panel');
            const cartItemsContainer = document.getElementById('cart-items');
            const cartCount = document.getElementById('cart-count');
            const cartTotal = document.getElementById('cart-total');

            let cart = JSON.parse(localStorage.getItem('salonhub_cart')) || [];

            window.showToast = (message) => {
                const toast = document.createElement('div');
                toast.className = 'fixed bottom-10 left-1/2 -translate-x-1/2 z-[110] bg-neutral-dark text-white px-8 py-4 rounded-full font-sans text-[10px] uppercase tracking-widest shadow-2xl transition-all duration-500 border border-accent/20';
                toast.style.opacity = '0';
                toast.innerHTML = `<span class="text-accent mr-2">✦</span> ${message}`;
                document.body.appendChild(toast);
                setTimeout(() => toast.style.opacity = '1', 10);
                setTimeout(() => { toast.style.opacity = '0'; setTimeout(() => toast.remove(), 500); }, 3000);
            }

            const openCart = () => { cartDrawer.classList.remove('pointer-events-none'); cartOverlay.classList.replace('opacity-0', 'opacity-100'); cartPanel.classList.replace('translate-x-full', 'translate-x-0'); };
            const closeCart = () => { cartOverlay.classList.replace('opacity-100', 'opacity-0'); cartPanel.classList.replace('translate-x-0', 'translate-x-full'); setTimeout(() => cartDrawer.classList.add('pointer-events-none'), 500); };

            function updateCartUI() {
                if (cartCount) cartCount.innerText = cart.length;
                if (cart.length === 0) {
                    cartItemsContainer.innerHTML = '<div class="text-center py-20 opacity-40 italic font-sans text-sm">Your sanctuary bag is empty.</div>';
                    cartTotal.innerText = '₹0.00';
                    return;
                }
                let total = 0;
                cartItemsContainer.innerHTML = cart.map((item, index) => {
                    total += parseInt(item.price);
                    return `<div class="flex gap-4 items-center animate-fade-in"><img src="${item.img}" class="w-16 h-16 object-cover rounded-xl border border-accent/10"><div class="flex-1"><h4 class="text-neutral-dark font-playfair text-sm">${item.name}</h4><p class="text-accent font-sans text-xs">₹${item.price}</p></div><button onclick="removeFromCart(${index})" class="text-neutral-muted hover:text-accent transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/></svg></button></div>`;
                }).join('');
                cartTotal.innerText = `₹${total.toLocaleString()}`;
            }

            window.removeFromCart = (index) => { cart.splice(index, 1); localStorage.setItem('salonhub_cart', JSON.stringify(cart)); updateCartUI(); showToast('Item removed'); };

            document.addEventListener('click', (e) => {
                const btn = e.target.closest('.add-to-cart');
                if (btn) {
                    e.preventDefault();
                    const product = { name: btn.getAttribute('data-name'), price: btn.getAttribute('data-price'), img: btn.getAttribute('data-img') };
                    cart.push(product);
                    localStorage.setItem('salonhub_cart', JSON.stringify(cart));
                    updateCartUI(); openCart(); showToast(`${product.name} added to bag`);
                }
            });

            if (cartToggle) cartToggle.onclick = openCart;
            if (cartClose) cartClose.onclick = closeCart;
            if (cartOverlay) cartOverlay.onclick = closeCart;

            updateCartUI();
        });
    </script>
</body>
</html>