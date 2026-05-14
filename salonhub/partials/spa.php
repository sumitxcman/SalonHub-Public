<?php include 'header.php'; ?>

<!-- Skincare Luxe Hero -->
<section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $base_path; ?>assets/img/spa_ritual.png" alt="Skincare Hero" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 bg-neutral-dark/40"></div>
    </div>
    <div class="relative z-10 text-center reveal">
        <h3 class="text-white font-sans uppercase tracking-[0.5em] mb-4 text-sm font-bold">The Boutique Bag</h3>
        <h1 class="text-5xl md:text-7xl font-playfair text-white mb-6">Skincare <span class="italic text-accent text-glow">Luxe</span></h1>
        <div class="w-24 h-[1px] bg-accent mx-auto"></div>
    </div>
</section>

<!-- Product Grid Section -->
<section class="py-24 px-10 bg-secondary">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
            <div>
                <h3 class="text-accent font-sans uppercase tracking-[0.4em] text-[10px] mb-4 font-bold">Curated for your skin</h3>
                <h2 class="text-4xl md:text-5xl font-playfair text-neutral-dark">Botanical <span class="italic text-accent">Masterpieces</span></h2>
            </div>
            <div class="text-right mt-6 md:mt-0">
                <p class="text-neutral-muted font-sans text-sm max-w-xs leading-relaxed italic">Hand-selected luxury elixirs designed to rejuvenate and restore your natural glow.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            
            <!-- Product 1 -->
            <div class="group reveal shadow-sm hover:shadow-2xl transition-all duration-700 rounded-[2.5rem] bg-white overflow-hidden border border-accent/5">
                <div class="relative aspect-square overflow-hidden bg-secondary">
                    <img src="<?php echo $base_path; ?>assets/img/skincare_serum.png" alt="Imperial Rose Glow Serum" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute top-6 right-6">
                        <span class="bg-white/90 backdrop-blur-md text-accent text-[9px] font-bold px-4 py-1.5 rounded-full uppercase tracking-widest shadow-lg italic">Bestseller</span>
                    </div>
                </div>
                <div class="p-10">
                    <p class="text-accent text-[10px] uppercase tracking-[0.3em] font-bold mb-3">Face Elixir</p>
                    <h4 class="text-2xl font-playfair text-neutral-dark mb-4">Imperial Rose Glow Serum</h4>
                    <div class="flex justify-between items-center pt-6 border-t border-accent/10">
                        <span class="text-xl font-playfair text-neutral-dark">$124.00</span>
                        <button class="add-to-cart bg-accent text-white px-8 py-3 rounded-full text-[10px] uppercase tracking-widest font-bold hover:bg-neutral-dark transition-all duration-500 shadow-lg shadow-accent/20" data-name="Imperial Rose Glow Serum" data-price="124" data-img="<?php echo $base_path; ?>assets/img/skincare_serum.png">Add to Bag</button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="group reveal delay-100 shadow-sm hover:shadow-2xl transition-all duration-700 rounded-[2.5rem] bg-white overflow-hidden border border-accent/5">
                <div class="relative aspect-square overflow-hidden bg-secondary">
                    <img src="<?php echo $base_path; ?>assets/img/skincare_mist.png" alt="Botanical Zen Mist" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute top-6 right-6">
                        <span class="bg-white/90 backdrop-blur-md text-neutral-dark text-[9px] font-bold px-4 py-1.5 rounded-full uppercase tracking-widest shadow-lg">New Arrival</span>
                    </div>
                </div>
                <div class="p-10">
                    <p class="text-accent text-[10px] uppercase tracking-[0.3em] font-bold mb-3">Refreshment</p>
                    <h4 class="text-2xl font-playfair text-neutral-dark mb-4">Botanical Zen Mist</h4>
                    <div class="flex justify-between items-center pt-6 border-t border-accent/10">
                        <span class="text-xl font-playfair text-neutral-dark">$68.00</span>
                        <button class="add-to-cart bg-accent text-white px-8 py-3 rounded-full text-[10px] uppercase tracking-widest font-bold hover:bg-neutral-dark transition-all duration-500 shadow-lg shadow-accent/20" data-name="Botanical Zen Mist" data-price="68" data-img="<?php echo $base_path; ?>assets/img/skincare_mist.png">Add to Bag</button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="group reveal delay-200 shadow-sm hover:shadow-2xl transition-all duration-700 rounded-[2.5rem] bg-white overflow-hidden border border-accent/5">
                <div class="relative aspect-square overflow-hidden bg-secondary">
                    <img src="<?php echo $base_path; ?>assets/img/skincare_mask.png" alt="Gold-Infused Rejuvenating Mask" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute top-6 right-6">
                        <span class="bg-accent text-white text-[9px] font-bold px-4 py-1.5 rounded-full uppercase tracking-widest shadow-lg">Limited Edition</span>
                    </div>
                </div>
                <div class="p-10">
                    <p class="text-accent text-[10px] uppercase tracking-[0.3em] font-bold mb-3">Ritual Care</p>
                    <h4 class="text-2xl font-playfair text-neutral-dark mb-4">Gold Rejuvenating Mask</h4>
                    <div class="flex justify-between items-center pt-6 border-t border-accent/10">
                        <span class="text-xl font-playfair text-neutral-dark">$185.00</span>
                        <button class="add-to-cart bg-accent text-white px-8 py-3 rounded-full text-[10px] uppercase tracking-widest font-bold hover:bg-neutral-dark transition-all duration-500 shadow-lg shadow-accent/20" data-name="Gold Rejuvenating Mask" data-price="185" data-img="<?php echo $base_path; ?>assets/img/skincare_mask.png">Add to Bag</button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="group reveal shadow-sm hover:shadow-2xl transition-all duration-700 rounded-[2.5rem] bg-white overflow-hidden border border-accent/5">
                <div class="relative aspect-square overflow-hidden bg-secondary">
                    <img src="<?php echo $base_path; ?>assets/img/skincare_cream.png" alt="Silk Path Night Cream" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                </div>
                <div class="p-10">
                    <p class="text-accent text-[10px] uppercase tracking-[0.3em] font-bold mb-3">Nocturnal Care</p>
                    <h4 class="text-2xl font-playfair text-neutral-dark mb-4">Silk Path Night Cream</h4>
                    <div class="flex justify-between items-center pt-6 border-t border-accent/10">
                        <span class="text-xl font-playfair text-neutral-dark">$92.00</span>
                        <button class="add-to-cart bg-accent text-white px-8 py-3 rounded-full text-[10px] uppercase tracking-widest font-bold hover:bg-neutral-dark transition-all duration-500 shadow-lg shadow-accent/20" data-name="Silk Path Night Cream" data-price="92" data-img="<?php echo $base_path; ?>assets/img/skincare_cream.png">Add to Bag</button>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="group reveal delay-100 shadow-sm hover:shadow-2xl transition-all duration-700 rounded-[2.5rem] bg-white overflow-hidden border border-accent/5">
                <div class="relative aspect-square overflow-hidden bg-secondary">
                    <img src="<?php echo $base_path; ?>assets/img/skincare_exfoliator.png" alt="Pure Oxygen Exfoliator" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                </div>
                <div class="p-10">
                    <p class="text-accent text-[10px] uppercase tracking-[0.3em] font-bold mb-3">Skin Prep</p>
                    <h4 class="text-2xl font-playfair text-neutral-dark mb-4">Pure Oxygen Exfoliator</h4>
                    <div class="flex justify-between items-center pt-6 border-t border-accent/10">
                        <span class="text-xl font-playfair text-neutral-dark">$55.00</span>
                        <button class="add-to-cart bg-accent text-white px-8 py-3 rounded-full text-[10px] uppercase tracking-widest font-bold hover:bg-neutral-dark transition-all duration-500 shadow-lg shadow-accent/20" data-name="Pure Oxygen Exfoliator" data-price="55" data-img="<?php echo $base_path; ?>assets/img/skincare_exfoliator.png">Add to Bag</button>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="group reveal delay-200 shadow-sm hover:shadow-2xl transition-all duration-700 rounded-[2.5rem] bg-white overflow-hidden border border-accent/5">
                <div class="relative aspect-square overflow-hidden bg-secondary">
                    <img src="<?php echo $base_path; ?>assets/img/skincare_eye_elixir.png" alt="Celestial Eye Elixir" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                </div>
                <div class="p-10">
                    <p class="text-accent text-[10px] uppercase tracking-[0.3em] font-bold mb-3">Targeted Treatment</p>
                    <h4 class="text-2xl font-playfair text-neutral-dark mb-4">Celestial Eye Elixir</h4>
                    <div class="flex justify-between items-center pt-6 border-t border-accent/10">
                        <span class="text-xl font-playfair text-neutral-dark">$110.00</span>
                        <button class="add-to-cart bg-accent text-white px-8 py-3 rounded-full text-[10px] uppercase tracking-widest font-bold hover:bg-neutral-dark transition-all duration-500 shadow-lg shadow-accent/20" data-name="Celestial Eye Elixir" data-price="110" data-img="<?php echo $base_path; ?>assets/img/skincare_eye_elixir.png">Add to Bag</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Newsletter / CTA -->
<section class="py-24 px-10 bg-white">
    <div class="max-w-5xl mx-auto bg-neutral-dark p-16 rounded-[3rem] text-center relative overflow-hidden reveal">
        <div class="absolute inset-0 opacity-10 bg-[url('<?php echo $base_path; ?>assets/img/spa_ritual.png')] bg-cover bg-center"></div>
        <div class="relative z-10">
            <h3 class="text-accent font-sans uppercase tracking-[0.6em] text-xs mb-6 font-bold">Exclusive Access</h3>
            <h2 class="text-4xl md:text-6xl font-playfair text-white mb-10 leading-tight">Join the <span class="italic text-accent">Boutique Club</span></h2>
            <p class="text-neutral-muted/80 font-sans text-sm max-w-lg mx-auto mb-12">Subscribe to receive early access to new collections, exclusive rituals, and skincare wisdom.</p>
            <div class="flex flex-col md:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Your Sanctuary Email" class="flex-1 bg-white/5 border border-white/10 px-8 py-4 rounded-full text-white focus:outline-none focus:border-accent transition-all font-sans text-xs uppercase tracking-widest">
                <button class="bg-accent text-white px-10 py-4 rounded-full text-[10px] uppercase tracking-widest font-bold hover:bg-white hover:text-neutral-dark transition-all duration-500">Subscribe</button>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
