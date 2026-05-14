<?php include 'header.php'; ?>

<!-- Masterpieces Hero Section -->
<section class="relative min-h-[80vh] flex items-center justify-center pt-20 overflow-hidden bg-secondary">
    <!-- Abstract Flourish -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-10 text-center relative z-10 reveal">
        <h3 class="text-accent font-sans uppercase tracking-[0.6em] text-xs mb-8 font-bold">Artistry Unleashed</h3>
        <h1 class="text-6xl md:text-8xl font-playfair text-neutral-dark mb-10 leading-tight">Our <span class="italic text-accent">Masterpieces</span></h1>
        <p class="max-w-2xl mx-auto text-neutral-muted font-sans text-sm md:text-base leading-relaxed tracking-wider">
            Where technical precision meets artistic soul. Discover the signature transformations that define the Imperial standard of excellence.
        </p>
        <div class="mt-16 animate-bounce">
            <svg class="mx-auto text-accent" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
        </div>
    </div>
</section>

<!-- Masterpiece 1: Platinum Balayage -->
<section class="py-32 px-10 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
        <div class="reveal relative">
            <div class="absolute -top-10 -left-10 w-40 h-40 border-l border-t border-accent/20"></div>
            <div class="rounded-[3rem] overflow-hidden shadow-2xl relative z-10">
                <img src="assets/img/hero.png" alt="Platinum Balayage" class="w-full h-full object-cover aspect-[4/5] hover:scale-110 transition-transform duration-1000">
            </div>
            <div class="absolute -bottom-10 -right-10 w-40 h-40 border-r border-b border-accent/20"></div>
        </div>
        <div class="reveal">
            <h4 class="text-accent font-sans uppercase tracking-[0.4em] text-[10px] mb-6 font-bold font-bold">Hair Transformation</h4>
            <h2 class="text-5xl font-playfair text-neutral-dark mb-8 leading-tight">Platinum <span class="italic text-accent">Balayage</span></h2>
            <p class="text-neutral-muted font-sans text-base leading-relaxed mb-10 tracking-wide">
                Our signature hand-painted technique creates a seamless, sun-kissed transition from deep mahogany to ethereal platinum. Each stroke is a calculated move to enhance your natural facial structure and bring a luminous glow to your overall presence.
            </p>
            <div class="flex gap-10 border-t border-accent/10 pt-10">
                <div>
                    <p class="text-accent font-bold text-xl mb-1">3.5h</p>
                    <p class="text-[10px] uppercase tracking-widest text-neutral-muted">Session Time</p>
                </div>
                <div>
                    <p class="text-accent font-bold text-xl mb-1">Premium</p>
                    <p class="text-[10px] uppercase tracking-widest text-neutral-muted">Color Grade</p>
                </div>
            </div>
            <div class="mt-12 flex items-center gap-8">
                <a href="booking.php" class="inline-block bg-accent text-white px-12 py-5 rounded-full font-sans uppercase tracking-[0.4em] text-xs hover:bg-neutral-dark transition-all duration-500 shadow-xl shadow-accent/20">Reserve Session</a>
                <p class="text-accent font-playfair text-3xl">₹12,000</p>
            </div>
        </div>
    </div>
</section>

<!-- Masterpiece 2: Organic Glow Facial -->
<section class="py-32 px-10 bg-secondary overflow-hidden">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
        <div class="order-2 lg:order-1 reveal">
            <h4 class="text-accent font-sans uppercase tracking-[0.4em] text-[10px] mb-6 font-bold font-bold">Skin Sanctuary</h4>
            <h2 class="text-5xl font-playfair text-neutral-dark mb-8 leading-tight">Organic <span class="italic text-accent">Glow Facial</span></h2>
            <p class="text-neutral-muted font-sans text-base leading-relaxed mb-10 tracking-wide">
                A ritualistic approach to skincare. Using cold-pressed botanical elixirs and lymphatic drainage massage, we restore your skin's innate radiance. This isn't just a treatment; it's a rebirth for your cells, leaving you with a complexion that breathes with life.
            </p>
            <ul class="space-y-4 mb-12">
                <li class="flex items-center gap-4 text-sm font-sans tracking-wide text-neutral-dark">
                    <div class="w-1.5 h-1.5 bg-accent rounded-full"></div>
                    Deep Molecular Hydration
                </li>
                <li class="flex items-center gap-4 text-sm font-sans tracking-wide text-neutral-dark">
                    <div class="w-1.5 h-1.5 bg-accent rounded-full"></div>
                    Crystal Gua Sha Sculpting
                </li>
            </ul>
            <a href="booking.php" class="inline-block border-2 border-accent text-accent px-12 py-5 rounded-full font-sans uppercase tracking-[0.4em] text-xs hover:bg-accent hover:text-white transition-all duration-500 shadow-xl shadow-accent/10">Inquire More</a>
        </div>
        <div class="order-1 lg:order-2 reveal">
            <div class="rounded-[3rem] overflow-hidden shadow-2xl relative z-10 aspect-video">
                <img src="assets/img/service1.png" alt="Skin Sanctuary" class="w-full h-full object-cover hover:scale-105 transition-transform duration-1000">
            </div>
        </div>
    </div>
</section>

<!-- Masterpiece 3: Bridal Perfection -->
<section class="py-32 px-10 bg-white overflow-hidden relative">
    <div class="max-w-7xl mx-auto text-center mb-24 reveal">
        <h4 class="text-accent font-sans uppercase tracking-[0.4em] text-[10px] mb-6 font-bold font-bold">Master Artistry</h4>
        <h2 class="text-5xl md:text-6xl font-playfair text-neutral-dark mb-10 leading-tight">Bridal <span class="italic text-accent">Perfection</span></h2>
        <p class="max-w-3xl mx-auto text-neutral-muted font-sans text-base leading-relaxed tracking-wide">
            Capturing the essence of your most sacred day. Our bridal artistry is bespoke, timeless, and ethereal, ensuring you walk down the aisle as the most radiant version of yourself.
        </p>
    </div>
    
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 reveal">
        <div class="rounded-3xl overflow-hidden shadow-xl aspect-[3/4]">
            <img src="assets/img/service2.png" alt="Bridal Detail 1" class="w-full h-full object-cover">
        </div>
        <div class="rounded-3xl overflow-hidden shadow-xl aspect-[3/4] md:-translate-y-12">
            <img src="assets/img/service5.png" alt="Bridal Detail 2" class="w-full h-full object-cover">
        </div>
        <div class="rounded-3xl overflow-hidden shadow-xl aspect-[3/4]">
            <img src="assets/img/service6.png" alt="Bridal Detail 3" class="w-full h-full object-cover">
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 px-10 bg-accent text-white text-center">
    <div class="max-w-4xl mx-auto reveal">
        <h2 class="text-4xl md:text-5xl font-playfair mb-8">Ready to become a <span class="italic opacity-80">Masterpiece?</span></h2>
        <a href="booking.php" class="inline-block bg-white text-accent px-12 py-5 rounded-full font-sans uppercase tracking-[0.4em] text-xs hover:bg-neutral-dark hover:text-white transition-all duration-500 shadow-2xl">Book Your Transformation</a>
    </div>
</section>

<?php include 'footer.php'; ?>
