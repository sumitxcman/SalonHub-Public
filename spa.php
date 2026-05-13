<?php include 'header.php'; ?>

<!-- Spa Hero -->
<section class="relative h-[40vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="assets/img/service3.png" alt="Spa Hero" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 bg-neutral-dark/40"></div>
    </div>
    <div class="relative z-10 text-center reveal">
        <h3 class="text-white font-sans uppercase tracking-[0.5em] mb-4 text-sm font-bold">Portfolio</h3>
        <h1 class="text-5xl md:text-7xl font-playfair text-white mb-6">Spa <span class="italic text-accent text-glow">Sanctuary</span></h1>
        <div class="w-24 h-[1px] bg-accent mx-auto"></div>
    </div>
</section>

<!-- Gallery Filter -->
<div class="py-10 bg-white text-center">
    <div class="flex flex-wrap justify-center gap-8 font-sans text-xs uppercase tracking-[0.3em] text-neutral-muted">
        <a href="gallery.php" class="hover:text-accent transition-colors">All</a>
        <a href="hair.php" class="hover:text-accent transition-colors">Hair</a>
        <a href="makeup.php" class="hover:text-accent transition-colors">Makeup</a>
        <a href="nails.php" class="hover:text-accent transition-colors">Nails</a>
        <a href="spa.php" class="hover:text-accent transition-colors text-accent border-b border-accent pb-1">Spa</a>
    </div>
</div>

<!-- Spa Gallery -->
<section class="py-20 px-10 bg-white">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        <!-- Item 1 -->
        <div class="group relative overflow-hidden rounded-2xl reveal shadow-xl">
            <img src="assets/img/service3.png" alt="Facial" class="w-full h-[400px] object-cover transition-transform duration-1000 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-neutral-dark/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
            <div class="absolute bottom-0 p-8 translate-y-10 group-hover:translate-y-0 transition-transform duration-700">
                <h4 class="text-white font-playfair text-2xl mb-2">Golden Glow Facial</h4>
                <p class="text-accent text-xs uppercase tracking-widest font-bold">Advanced Skincare</p>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="group relative overflow-hidden rounded-2xl reveal delay-100 shadow-xl">
            <img src="assets/img/gallery2.png" alt="Skin Care" class="w-full h-[400px] object-cover transition-transform duration-1000 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-neutral-dark/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
            <div class="absolute bottom-0 p-8 translate-y-10 group-hover:translate-y-0 transition-transform duration-700">
                <h4 class="text-white font-playfair text-2xl mb-2">Organic Botanical</h4>
                <p class="text-accent text-xs uppercase tracking-widest font-bold">Natural Therapy</p>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="group relative overflow-hidden rounded-2xl reveal delay-200 shadow-xl">
            <img src="assets/img/service7.png" alt="Wellness" class="w-full h-[400px] object-cover transition-transform duration-1000 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-neutral-dark/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
            <div class="absolute bottom-0 p-8 translate-y-10 group-hover:translate-y-0 transition-transform duration-700">
                <h4 class="text-white font-playfair text-2xl mb-2">Silk Path Ritual</h4>
                <p class="text-accent text-xs uppercase tracking-widest font-bold">Body Sanctuary</p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
