<?php include 'header.php'; ?>

<!-- Booking Hero -->
<section class="relative h-[40vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="assets/img/hero.png" alt="Booking Hero" class="w-full h-full object-cover scale-110 opacity-30">
        <div class="absolute inset-0 bg-white/60"></div>
    </div>
    <div class="relative z-10 text-center reveal">
        <h3 class="text-accent font-sans uppercase tracking-[0.5em] mb-4 text-sm font-bold">Reservations</h3>
        <h1 class="text-5xl font-playfair text-neutral-dark mb-6">Book Your <span class="italic text-accent">Experience</span></h1>
        <div class="w-24 h-[1px] bg-accent mx-auto"></div>
    </div>
</section>

<!-- Booking Form Section -->
<section class="py-20 px-10 bg-white relative">
    <div class="max-w-4xl mx-auto bg-secondary p-10 md:p-20 rounded-3xl border border-accent/10 reveal shadow-2xl">
        <form action="#" method="POST" class="space-y-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <label class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest ml-1 font-bold">Your Name</label>
                    <input type="text" placeholder="ALEXA BLISS" class="w-full bg-white border border-accent/10 px-6 py-4 rounded-xl focus:outline-none focus:border-accent transition-all text-sm font-sans tracking-wider text-neutral-dark">
                </div>
                <div class="space-y-2">
                    <label class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest ml-1 font-bold">Email Address</label>
                    <input type="email" placeholder="ALEXA@EXAMPLE.COM" class="w-full bg-white border border-accent/10 px-6 py-4 rounded-xl focus:outline-none focus:border-accent transition-all text-sm font-sans tracking-wider text-neutral-dark">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <label class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest ml-1 font-bold">Phone Number</label>
                    <input type="tel" placeholder="+1 234 567 890" class="w-full bg-white border border-accent/10 px-6 py-4 rounded-xl focus:outline-none focus:border-accent transition-all text-sm font-sans tracking-wider text-neutral-dark">
                </div>
                <div class="space-y-2">
                    <label class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest ml-1 font-bold">Select Service</label>
                    <select class="w-full bg-white border border-accent/10 px-6 py-4 rounded-xl focus:outline-none focus:border-accent transition-all text-sm font-sans tracking-wider text-neutral-dark appearance-none">
                        <option value="">CHOOSE A SERVICE</option>
                        <option value="hair">HAIR STYLING & CUT</option>
                        <option value="makeup">BRIDAL ARTISTRY</option>
                        <option value="skin">CELLULAR SKIN THERAPY</option>
                        <option value="nails">COUTURE NAIL ART</option>
                        <option value="spa">ZEN SPA RITUAL</option>
                    </select>
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest ml-1 font-bold">Additional Notes</label>
                <textarea rows="4" placeholder="ANY SPECIAL REQUESTS OR PREFERENCES?" class="w-full bg-white border border-accent/10 px-6 py-4 rounded-xl focus:outline-none focus:border-accent transition-all text-sm font-sans tracking-wider resize-none text-neutral-dark"></textarea>
            </div>

            <div class="pt-6">
                <button type="submit" class="w-full bg-accent text-white py-5 rounded-full font-sans uppercase tracking-[0.4em] text-sm hover:bg-neutral-dark transition-all duration-500 shadow-xl shadow-accent/20">
                    Confirm Reservation
                </button>
            </div>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>
