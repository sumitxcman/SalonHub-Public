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
    <nav class="fixed w-full z-50 glass-nav py-5 px-10 flex justify-between items-center">
        <a href="index.php" class="flex items-center gap-2">
            <div class="w-8 h-8 border border-accent rounded-full flex items-center justify-center text-accent font-playfair font-bold text-xs">S</div>
            <h1 class="text-xl font-playfair tracking-widest uppercase text-neutral-dark">Salon<span class="text-accent italic">Hub</span></h1>
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center gap-12 text-neutral-dark font-sans text-xs uppercase tracking-widest font-bold">
            <a href="index.php" class="hover:text-accent transition-colors duration-300">Home</a>
            <a href="services.php" class="hover:text-accent transition-colors duration-300">Services</a>
            <a href="gallery.php" class="hover:text-accent transition-colors duration-300">Portfolio</a>
            <a href="shop.php" class="hover:text-accent transition-colors duration-300">Shop</a>
            <a href="booking.php" class="bg-accent text-white px-6 py-2 rounded-full hover:bg-neutral-dark transition-all duration-300 shadow-lg shadow-accent/20">Book Now</a>
        </div>

        <div class="lg:hidden text-2xl text-neutral-dark cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </div>
    </nav>
