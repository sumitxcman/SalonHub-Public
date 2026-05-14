<?php include 'partials/header.php'; ?>

<!-- Membership Hero -->
<section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="assets/img/service1.png" alt="Membership Hero" class="w-full h-full object-cover scale-110 opacity-30">
        <div class="absolute inset-0 bg-gradient-to-b from-white/30 via-white/50 to-white"></div>
    </div>
    <div class="relative z-10 text-center reveal">
        <h3 class="text-accent font-sans uppercase tracking-[0.6em] mb-4 text-sm font-bold">The Imperial Club</h3>
        <h1 class="text-5xl md:text-8xl font-playfair text-neutral-dark mb-6 italic">Membership <span class="text-accent not-italic">Elite</span></h1>
        <p class="text-neutral-muted font-sans text-sm tracking-[0.3em] uppercase">Bespoke Beauty. Exclusive Benefits.</p>
    </div>
</section>

<!-- Membership Tiers -->
<section class="py-32 px-10 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            
            <!-- Tier 1: Silver -->
            <div class="border border-accent/10 rounded-[3rem] p-12 text-center hover:shadow-2xl transition-all duration-700 reveal bg-secondary/30">
                <h3 class="text-accent font-sans uppercase tracking-widest text-xs mb-6 font-bold">The Artisan</h3>
                <h2 class="text-4xl font-playfair text-neutral-dark mb-6">Silver</h2>
                <p class="text-3xl font-serif text-accent mb-10">₹4,999<span class="text-sm text-neutral-muted">/yr</span></p>
                <div class="w-12 h-[1px] bg-accent/30 mx-auto mb-10"></div>
                <ul class="space-y-6 text-neutral-dark font-sans text-sm mb-12">
                    <li class="opacity-80 italic">10% Off on All Services</li>
                    <li class="opacity-80 italic">Exclusive Monthly Rituals</li>
                    <li class="opacity-80 italic">Early Boutique Access</li>
                    <li class="opacity-40 line-through italic">Priority VIP Booking</li>
                </ul>
                <button class="w-full border border-accent text-accent py-4 rounded-full font-sans uppercase tracking-widest text-[10px] hover:bg-accent hover:text-white transition-all duration-500">Become an Artisan</button>
            </div>

            <!-- Tier 2: Gold (Popular) -->
            <div class="border-2 border-accent rounded-[3rem] p-12 text-center shadow-2xl relative reveal delay-100 bg-white scale-105 z-10">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 bg-accent text-white px-8 py-2 rounded-full text-[10px] uppercase tracking-widest font-bold italic">Most Imperial</div>
                <h3 class="text-accent font-sans uppercase tracking-widest text-xs mb-6 font-bold">The Imperial</h3>
                <h2 class="text-4xl font-playfair text-neutral-dark mb-6">Gold</h2>
                <p class="text-3xl font-serif text-accent mb-10">₹14,999<span class="text-sm text-neutral-muted">/yr</span></p>
                <div class="w-12 h-[1px] bg-accent mx-auto mb-10"></div>
                <ul class="space-y-6 text-neutral-dark font-sans text-sm mb-12 font-medium">
                    <li>20% Off on All Services</li>
                    <li>Priority VIP Booking</li>
                    <li>Complimentary Hair Spa (Qtly)</li>
                    <li>Personal Beauty Concierge</li>
                </ul>
                <button class="w-full bg-accent text-white py-4 rounded-full font-sans uppercase tracking-widest text-[10px] hover:bg-neutral-dark transition-all duration-500 shadow-xl shadow-accent/30">Claim Your Throne</button>
            </div>

            <!-- Tier 3: Platinum -->
            <div class="border border-accent/10 rounded-[3rem] p-12 text-center hover:shadow-2xl transition-all duration-700 reveal delay-200 bg-neutral-dark text-white">
                <h3 class="text-accent font-sans uppercase tracking-widest text-xs mb-6 font-bold">The Celestial</h3>
                <h2 class="text-4xl font-playfair text-white mb-6">Platinum</h2>
                <p class="text-3xl font-serif text-accent mb-10">₹49,999<span class="text-sm text-accent/50">/yr</span></p>
                <div class="w-12 h-[1px] bg-accent/30 mx-auto mb-10"></div>
                <ul class="space-y-6 text-white/80 font-sans text-sm mb-12">
                    <li class="italic">Unlimited Priority Access</li>
                    <li class="italic">Private Home Rituals</li>
                    <li class="italic">All-Access Boutique Pass</li>
                    <li class="italic">Dedicated Master Stylist</li>
                </ul>
                <button class="w-full bg-white text-neutral-dark py-4 rounded-full font-sans uppercase tracking-widest text-[10px] hover:bg-accent hover:text-white transition-all duration-500">Reach the Stars</button>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-24 px-10 bg-secondary">
    <div class="max-w-4xl mx-auto text-center reveal">
        <h2 class="text-4xl font-playfair text-neutral-dark mb-8">Not sure which sanctuary <br> is right for you?</h2>
        <p class="text-neutral-muted font-sans mb-12 max-w-xl mx-auto italic">Our beauty concierge is here to help you select the perfect tier for your aesthetic journey.</p>
        <a href="contact.php" class="inline-block border-b border-accent text-accent pb-2 font-sans uppercase tracking-widest text-sm hover:text-neutral-dark hover:border-neutral-dark transition-all duration-300">Talk to an Expert</a>
    </div>
</section>

<?php include 'partials/footer.php'; ?>
