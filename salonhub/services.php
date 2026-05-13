<?php include 'header.php'; ?>

<!-- Services Hero -->
<section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="assets/img/service8.png" alt="Services Hero" class="w-full h-full object-cover scale-110 opacity-40">
        <div class="absolute inset-0 bg-gradient-to-b from-white/30 via-white/50 to-white"></div>
    </div>
    <div class="relative z-10 text-center reveal">
        <h3 class="text-accent font-sans uppercase tracking-[0.5em] mb-4 text-sm font-bold">Our Offerings</h3>
        <h1 class="text-6xl md:text-8xl font-playfair text-neutral-dark mb-6">Bespoke <span class="italic text-accent">Services</span></h1>
        <div class="w-24 h-[1px] bg-accent mx-auto"></div>
    </div>
</section>

<!-- Service List (Aesthetic Grid) -->
<section class="py-24 px-10 bg-white">
    <div class="max-w-7xl mx-auto space-y-32">
        
        <!-- Category 1: Hair -->
        <div class="flex flex-col lg:flex-row items-center gap-20 reveal">
            <div class="w-full lg:w-1/2 overflow-hidden rounded-3xl shadow-2xl">
                <img src="assets/img/service1.png" alt="Hair Services" class="w-full h-[600px] object-cover hover:scale-105 transition-transform duration-1000">
            </div>
            <div class="w-full lg:w-1/2 space-y-8">
                <h2 class="text-4xl md:text-5xl font-playfair text-neutral-dark">Imperial <span class="italic text-accent">Hair Art</span></h2>
                <p class="text-neutral-muted font-sans text-lg">Experience transformation through our master stylists. Every cut is a masterpiece designed to frame your unique essence.</p>
                
                <div class="space-y-6">
                    <div class="flex justify-between items-end border-b border-accent/10 pb-4">
                        <div>
                            <h4 class="text-xl font-playfair text-neutral-dark">Master Cut & Style</h4>
                            <p class="text-neutral-muted text-xs uppercase tracking-widest mt-1">60 Minutes of artistry</p>
                        </div>
                        <span class="text-accent font-sans font-bold text-xl">$120+</span>
                    </div>
                    <div class="flex justify-between items-end border-b border-accent/10 pb-4">
                        <div>
                            <h4 class="text-xl font-playfair text-neutral-dark">Platinum Balayage</h4>
                            <p class="text-neutral-muted text-xs uppercase tracking-widest mt-1">Full transformation</p>
                        </div>
                        <span class="text-accent font-sans font-bold text-xl">$350+</span>
                    </div>
                </div>
                <a href="booking.php" class="inline-block bg-accent text-white px-8 py-3 rounded-full text-xs uppercase tracking-widest hover:bg-neutral-dark hover:text-white transition-all duration-300">Book Session</a>
            </div>
        </div>

        <!-- Category 2: Skin -->
        <div class="flex flex-col lg:flex-row-reverse items-center gap-20 reveal">
            <div class="w-full lg:w-1/2 overflow-hidden rounded-3xl shadow-2xl">
                <img src="assets/img/service3.png" alt="Skin Care" class="w-full h-[600px] object-cover hover:scale-105 transition-transform duration-1000">
            </div>
            <div class="w-full lg:w-1/2 space-y-8">
                <h2 class="text-4xl md:text-5xl font-playfair text-neutral-dark">Celestial <span class="italic text-accent">Skin Care</span></h2>
                <p class="text-neutral-muted font-sans text-lg">Indulge in clinical precision combined with spa serenity. Our facials use 24K gold and organic botanical extracts.</p>
                
                <div class="space-y-6">
                    <div class="flex justify-between items-end border-b border-accent/10 pb-4">
                        <div>
                            <h4 class="text-xl font-playfair text-neutral-dark">24K Gold Facial</h4>
                            <p class="text-neutral-muted text-xs uppercase tracking-widest mt-1">Lifting & Radiance</p>
                        </div>
                        <span class="text-accent font-sans font-bold text-xl">$250</span>
                    </div>
                    <div class="flex justify-between items-end border-b border-accent/10 pb-4">
                        <div>
                            <h4 class="text-xl font-playfair text-neutral-dark">Cellular Repair Therapy</h4>
                            <p class="text-neutral-muted text-xs uppercase tracking-widest mt-1">Anti-aging mastery</p>
                        </div>
                        <span class="text-accent font-sans font-bold text-xl">$180</span>
                    </div>
                </div>
                <a href="booking.php" class="inline-block bg-accent text-white px-8 py-3 rounded-full text-xs uppercase tracking-widest hover:bg-neutral-dark hover:text-white transition-all duration-300">Book Session</a>
            </div>
        </div>

    </div>
</section>

<!-- Wellness Section -->
<section class="py-32 px-10 bg-secondary">
    <div class="max-w-5xl mx-auto text-center reveal">
        <h3 class="text-accent font-sans uppercase tracking-[0.4em] text-xs mb-6">The Wellness Sanctuary</h3>
        <h2 class="text-5xl font-playfair text-neutral-dark mb-10 leading-tight">A Journey into <br> <span class="italic">Imperial Relaxation</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-20">
            <div class="p-8 bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all group">
                <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform">✦</div>
                <h4 class="text-xl font-playfair text-neutral-dark mb-4">Aromatic Spa</h4>
                <p class="text-neutral-muted text-xs uppercase tracking-widest leading-relaxed">Essential oils curated from the hills of Provence.</p>
                <div class="mt-8 text-accent font-bold">$150</div>
                <a href="booking.php" class="text-accent uppercase tracking-widest text-[10px] font-bold border-b border-accent pb-1 hover:text-neutral-dark hover:border-neutral-dark transition-all">Select Service</a>
            </div>
            <div class="p-8 bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all group">
                <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform">✦</div>
                <h4 class="text-xl font-playfair text-neutral-dark mb-4">Deep Tissue</h4>
                <p class="text-neutral-muted text-xs uppercase tracking-widest leading-relaxed">Releasing tension with imperial pressure points.</p>
                <div class="mt-8 text-accent font-bold">$180</div>
                <a href="booking.php" class="text-accent uppercase tracking-widest text-[10px] font-bold border-b border-accent pb-1 hover:text-neutral-dark hover:border-neutral-dark transition-all">Select Service</a>
            </div>
            <div class="p-8 bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all group">
                <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform">✦</div>
                <h4 class="text-xl font-playfair text-neutral-dark mb-4">Zen Ritual</h4>
                <p class="text-neutral-muted text-xs uppercase tracking-widest leading-relaxed">A holistic 120-min journey of mind and body.</p>
                <div class="mt-8 text-accent font-bold">$300</div>
                <a href="booking.php" class="text-accent uppercase tracking-widest text-[10px] font-bold border-b border-accent pb-1 hover:text-neutral-dark hover:border-neutral-dark transition-all">Select Service</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
