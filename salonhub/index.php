<?php include 'header.php'; ?>

<!-- Hero Section (Cinematic Pink & White) -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image with Parallax -->
    <div class="absolute inset-0 z-0">
        <img src="assets/img/hero.png" alt="Luxury Salon Hero" class="w-full h-full object-cover scale-110 animate-fade-in opacity-90">
        <div class="absolute inset-0 bg-gradient-to-b from-white/20 via-white/40 to-white"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 text-center max-w-5xl px-6 reveal">
        <h3 class="text-accent font-sans uppercase tracking-[0.6em] mb-6 text-sm md:text-base animate-slide-up font-bold">Experience the Extraordinary</h3>
        <h1 class="text-6xl md:text-8xl lg:text-9xl font-playfair text-neutral-dark mb-10 leading-none">
            Perfect <span class="italic text-accent text-glow">Look</span> <br>
            <span class="text-4xl md:text-6xl font-serif">With Mastery</span>
        </h1>
        
        <p class="text-neutral-muted font-sans max-w-2xl mx-auto mb-12 text-lg md:text-xl leading-relaxed">
            Where luxury meets artistry. We craft bespoke beauty experiences that transcend the ordinary, in a sanctuary of pink elegance.
        </p>

        <div class="flex flex-col md:flex-row items-center justify-center gap-6">
            <a href="booking.php" class="bg-accent text-white px-10 py-4 rounded-full font-sans uppercase tracking-widest text-sm hover:bg-neutral-dark hover:text-white transition-all duration-500 shadow-lg shadow-accent/20">
                Book Appointment
            </a>
            <a href="services.php" class="border border-accent/30 text-neutral-dark px-10 py-4 rounded-full font-sans uppercase tracking-widest text-sm hover:bg-accent hover:text-white transition-all duration-500 backdrop-blur-md">
                View Services
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-float">
        <div class="w-[1px] h-20 bg-gradient-to-b from-accent to-transparent"></div>
    </div>
</section>

<!-- About Section (Aesthetic Luxury) -->
<section class="py-32 px-10 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-20">
        <div class="w-full md:w-1/2 relative reveal">
            <div class="absolute -top-10 -left-10 w-40 h-40 border-l border-t border-accent/30"></div>
            <img src="assets/img/service1.png" alt="Salon Interior" class="rounded-2xl transition-all duration-1000 shadow-2xl">
            <div class="absolute -bottom-5 -right-5 bg-accent p-8 rounded-2xl shadow-xl">
                <p class="text-white font-playfair text-3xl">15+</p>
                <p class="text-white/80 text-xs uppercase tracking-widest">Years of Artistry</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 reveal">
            <h3 class="text-accent font-sans uppercase tracking-widest text-sm mb-4">Our Philosophy</h3>
            <h2 class="text-4xl md:text-5xl font-playfair text-neutral-dark mb-8 leading-tight">Elevating Beauty into <br> <span class="italic text-accent">Fine Art</span></h2>
            <p class="text-neutral-muted font-sans mb-8 leading-relaxed">
                At SalonHub, we believe that beauty is an expression of the soul. Our sanctuary is designed to provide not just a service, but a cinematic journey of transformation. Every stroke of the brush and every cut of the shear is executed with imperial precision.
            </p>
            <ul class="space-y-4 mb-10">
                <li class="flex items-center gap-4 text-neutral-dark font-sans">
                    <span class="text-accent text-xl">✦</span> Certified Master Stylists
                </li>
                <li class="flex items-center gap-4 text-neutral-dark font-sans">
                    <span class="text-accent text-xl">✦</span> Premium Organic Products
                </li>
                <li class="flex items-center gap-4 text-neutral-dark font-sans">
                    <span class="text-accent text-xl">✦</span> Bespoke VIP Experiences
                </li>
            </ul>
            <a href="gallery.php" class="text-accent font-sans uppercase tracking-widest text-sm border-b border-accent pb-2 hover:text-neutral-dark hover:border-neutral-dark transition-all duration-300">Explore Our Portfolio</a>
        </div>
    </div>
</section>

<!-- Luxury Service Showcase -->
<section class="py-32 px-10 bg-secondary">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20 reveal">
            <h3 class="text-accent font-sans uppercase tracking-[0.4em] text-xs mb-4">Exquisite Care</h3>
            <h2 class="text-5xl font-playfair text-neutral-dark">The <span class="italic">Art</span> of Self Care</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service Card 1 -->
            <div class="group relative overflow-hidden rounded-3xl aspect-[3/4] reveal">
                <img src="assets/img/service1.png" alt="Hair Design" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-accent/90 via-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                <div class="absolute inset-0 p-10 flex flex-col justify-end translate-y-10 group-hover:translate-y-0 transition-transform duration-700">
                    <h4 class="text-white font-playfair text-2xl mb-4">Hair Design</h4>
                    <a href="booking.php" class="inline-block bg-white text-accent px-6 py-2 rounded-full text-xs uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity duration-500 hover:bg-neutral-dark hover:text-white">Reserve</a>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="group relative overflow-hidden rounded-3xl aspect-[3/4] reveal delay-100">
                <img src="assets/img/service2.png" alt="Makeup Artistry" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-accent/90 via-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                <div class="absolute inset-0 p-10 flex flex-col justify-end translate-y-10 group-hover:translate-y-0 transition-transform duration-700">
                    <h4 class="text-white font-playfair text-2xl mb-4">Makeup Artistry</h4>
                    <a href="booking.php" class="inline-block bg-white text-accent px-6 py-2 rounded-full text-xs uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity duration-500 hover:bg-neutral-dark hover:text-white">Reserve</a>
                </div>
            </div>

            <!-- Service Card 3 -->
            <div class="group relative overflow-hidden rounded-3xl aspect-[3/4] reveal delay-200">
                <img src="assets/img/service3.png" alt="Skin Rejuvenation" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-accent/90 via-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                <div class="absolute inset-0 p-10 flex flex-col justify-end translate-y-10 group-hover:translate-y-0 transition-transform duration-700">
                    <h4 class="text-white font-playfair text-2xl mb-4">Skin Rejuvenation</h4>
                    <a href="booking.php" class="inline-block bg-white text-accent px-6 py-2 rounded-full text-xs uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity duration-500 hover:bg-neutral-dark hover:text-white">Reserve</a>
                </div>
            </div>

            <!-- Service Card 4 -->
            <div class="group relative overflow-hidden rounded-3xl aspect-[3/4] reveal delay-300">
                <img src="assets/img/service4.png" alt="Nail Couture" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-accent/90 via-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                <div class="absolute inset-0 p-10 flex flex-col justify-end translate-y-10 group-hover:translate-y-0 transition-transform duration-700">
                    <h4 class="text-white font-playfair text-2xl mb-4">Nail Couture</h4>
                    <a href="booking.php" class="inline-block bg-white text-accent px-6 py-2 rounded-full text-xs uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity duration-500 hover:bg-neutral-dark hover:text-white">Reserve</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
