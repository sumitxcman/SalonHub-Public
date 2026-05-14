<?php include 'partials/header.php'; ?>

<!-- Shop Hero -->
<section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="assets/img/service8.png" alt="Shop Hero" class="w-full h-full object-cover scale-110 opacity-30">
        <div class="absolute inset-0 bg-gradient-to-b from-white/30 via-white/50 to-white"></div>
    </div>
    <div class="relative z-10 text-center reveal">
        <h3 class="text-accent font-sans uppercase tracking-[0.5em] mb-4 text-sm font-bold">Boutique</h3>
        <h1 class="text-5xl md:text-7xl font-playfair text-neutral-dark mb-6">Exquisite <span class="italic text-accent">Curations</span></h1>
        <div class="w-24 h-[1px] bg-accent mx-auto"></div>
    </div>
</section>

<!-- Shop Section -->
<section class="py-20 px-10 bg-white">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-16">
        
        <!-- Sidebar -->
        <div class="w-full lg:w-1/4">
            <div class="sticky top-32 space-y-10 reveal">
                <div>
                    <h3 class="text-accent font-playfair text-xl mb-6">Categories</h3>
                    <ul class="space-y-4 text-neutral-muted font-sans text-xs uppercase tracking-widest">
                        <li><a href="<?php echo $base_path; ?>partials/spa.php" class="hover:text-accent transition-colors flex justify-between">Skin Care <span>(12)</span></a></li>
                        <li><a href="<?php echo $base_path; ?>partials/hair.php" class="hover:text-accent transition-colors flex justify-between">Hair Care <span>(08)</span></a></li>
                        <li><a href="<?php echo $base_path; ?>partials/spa.php" class="hover:text-accent transition-colors flex justify-between">Fragrances <span>(05)</span></a></li>
                        <li><a href="<?php echo $base_path; ?>partials/makeup.php" class="hover:text-accent transition-colors flex justify-between">Makeup Kits <span>(10)</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="w-full lg:w-3/4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                
                <!-- Product 1 -->
                <div class="group reveal">
                    <div class="relative overflow-hidden rounded-2xl mb-6 bg-secondary">
                        <img src="assets/img/service8.png" alt="Product" class="w-full h-[350px] object-cover transition-transform duration-1000 group-hover:scale-110">
                        <button class="add-to-cart absolute bottom-0 w-full bg-accent text-white py-4 font-sans uppercase tracking-[0.2em] text-[10px] translate-y-full group-hover:translate-y-0 transition-transform duration-500" data-name="Imperial Makeup Kit" data-price="8500" data-img="assets/img/service8.png">Add to Bag</button>
                    </div>
                    <h4 class="text-xl font-playfair text-neutral-dark mb-2">Imperial Makeup Kit</h4>
                    <p class="text-accent font-sans text-lg">₹8,500</p>
                </div>

                <!-- Product 2 -->
                <div class="group reveal delay-100">
                    <div class="relative overflow-hidden rounded-2xl mb-6 bg-secondary">
                        <img src="assets/img/service7.png" alt="Product" class="w-full h-[350px] object-cover transition-transform duration-1000 group-hover:scale-110">
                        <button class="add-to-cart absolute bottom-0 w-full bg-accent text-white py-4 font-sans uppercase tracking-[0.2em] text-[10px] translate-y-full group-hover:translate-y-0 transition-transform duration-500" data-name="Velvet Skin Oil" data-price="4200" data-img="assets/img/service7.png">Add to Bag</button>
                    </div>
                    <h4 class="text-xl font-playfair text-neutral-dark mb-2">Velvet Skin Oil</h4>
                    <p class="text-accent font-sans text-lg">₹4,200</p>
                </div>

                <!-- Product 3 -->
                <div class="group reveal delay-200">
                    <div class="relative overflow-hidden rounded-2xl mb-6 bg-secondary">
                        <img src="assets/img/service3.png" alt="Product" class="w-full h-[350px] object-cover transition-transform duration-1000 group-hover:scale-110">
                        <button class="add-to-cart absolute bottom-0 w-full bg-accent text-white py-4 font-sans uppercase tracking-[0.2em] text-[10px] translate-y-full group-hover:translate-y-0 transition-transform duration-500" data-name="24K Gold Facial Mask" data-price="12000" data-img="assets/img/service3.png">Add to Bag</button>
                    </div>
                    <h4 class="text-xl font-playfair text-neutral-dark mb-2">24K Gold Facial Mask</h4>
                    <p class="text-accent font-sans text-lg">₹12,000</p>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>
