<?php include 'partials/header.php'; ?>

<!-- Gallery Hero -->
<section class="relative h-[40vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="assets/img/service2.png" alt="Gallery Hero" class="w-full h-full object-cover opacity-40">
        <div class="absolute inset-0 bg-gradient-to-b from-white/20 to-white"></div>
    </div>
    <div class="relative z-10 text-center reveal">
        <h3 class="text-accent font-sans uppercase tracking-[0.5em] mb-4 text-sm font-bold">Artistry</h3>
        <h1 class="text-5xl md:text-7xl font-playfair text-neutral-dark mb-6">Our <span class="italic text-accent">Masterpieces</span></h1>
        <div class="w-24 h-[1px] bg-accent mx-auto"></div>
    </div>
</section>

<!-- Gallery Filter -->
<div class="py-10 bg-white text-center">
    <div class="flex flex-wrap justify-center gap-8 font-sans text-xs uppercase tracking-[0.3em] text-neutral-muted">
        <a href="gallery.php" class="hover:text-accent transition-colors text-accent border-b border-accent pb-1">All</a>
        <a href="partials/hair.php" class="hover:text-accent transition-colors">Hair</a>
        <a href="partials/makeup.php" class="hover:text-accent transition-colors">Makeup</a>
        <a href="partials/nails.php" class="hover:text-accent transition-colors">Nails</a>
        <a href="partials/spa.php" class="hover:text-accent transition-colors">Spa</a>
    </div>
</div>

<!-- Masonry Gallery -->
<section class="py-10 px-10 bg-white">
    <div class="max-w-7xl mx-auto columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">
        
        <!-- Item 1 -->
        <div class="break-inside-avoid relative group overflow-hidden rounded-3xl reveal shadow-lg">
            <img src="assets/img/gallery1.png" alt="Hair Design" class="w-full h-auto object-cover transition-transform duration-1000 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-accent/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
            <div class="absolute bottom-0 p-8 translate-y-10 group-hover:translate-y-0 transition-transform duration-700">
                <h4 class="text-white font-playfair text-xl mb-2">Platinum Balayage</h4>
                <p class="text-white/80 text-[10px] uppercase tracking-widest">Hair Transformation</p>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="break-inside-avoid relative group overflow-hidden rounded-3xl reveal delay-100 shadow-lg">
            <img src="assets/img/service3.png" alt="Facial" class="w-full h-auto object-cover transition-transform duration-1000 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-accent/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
            <div class="absolute bottom-0 p-8 translate-y-10 group-hover:translate-y-0 transition-transform duration-700">
                <h4 class="text-white font-playfair text-xl mb-2">Organic Glow</h4>
                <p class="text-white/80 text-[10px] uppercase tracking-widest">Skin Sanctuary</p>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="break-inside-avoid relative group overflow-hidden rounded-3xl reveal delay-200 shadow-lg">
            <img src="assets/img/service2.png" alt="Makeup" class="w-full h-auto object-cover transition-transform duration-1000 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-accent/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
            <div class="absolute bottom-0 p-8 translate-y-10 group-hover:translate-y-0 transition-transform duration-700">
                <h4 class="text-white font-playfair text-xl mb-2">Bridal Perfection</h4>
                <p class="text-white/80 text-[10px] uppercase tracking-widest">Master Artistry</p>
            </div>
        </div>

    </div>

    <!-- CTA -->
    <div class="text-center py-32 reveal">
        <h3 class="text-accent font-sans uppercase tracking-[0.4em] text-xs mb-8">Ready for your transformation?</h3>
        <a href="booking.php" class="inline-block bg-accent text-white px-12 py-4 rounded-full font-sans uppercase tracking-[0.3em] text-sm hover:bg-neutral-dark hover:text-white transition-all duration-500 shadow-xl shadow-accent/20">Book Now</a>
    </div>
</section>

<?php include 'partials/footer.php'; ?>
