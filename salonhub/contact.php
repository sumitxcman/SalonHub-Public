<?php include 'partials/header.php'; ?>

<!-- Contact Hero -->
<section class="relative h-[40vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="assets/img/service4.png" alt="Contact Hero" class="w-full h-full object-cover scale-110 opacity-20">
        <div class="absolute inset-0 bg-gradient-to-b from-white/30 via-white/50 to-white"></div>
    </div>
    <div class="relative z-10 text-center reveal">
        <h3 class="text-accent font-sans uppercase tracking-[0.5em] mb-4 text-sm font-bold">Connect with Us</h3>
        <h1 class="text-5xl md:text-7xl font-playfair text-neutral-dark mb-6">Contact <span class="italic text-accent">Sanctuary</span></h1>
        <div class="w-24 h-[1px] bg-accent mx-auto"></div>
    </div>
</section>

<!-- Contact Content -->
<section class="py-24 px-10 bg-white">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-20">
        
        <!-- Contact Info & Map -->
        <div class="w-full lg:w-1/2 space-y-12 reveal">
            <div>
                <h3 class="text-accent font-sans uppercase tracking-widest text-xs mb-6 font-bold">Our Location</h3>
                <h2 class="text-4xl font-playfair text-neutral-dark mb-8 leading-tight">Visit our <span class="italic">Sanctuary</span> in the heart of the city.</h2>
                <div class="space-y-6 text-neutral-muted font-sans italic">
                    <p class="flex items-center gap-4">
                        <span class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        </span>
                        123 Luxury Avenue, Elegance District, Mumbai - 400001
                    </p>
                    <p class="flex items-center gap-4">
                        <span class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </span>
                        +91 98765 43210
                    </p>
                    <p class="flex items-center gap-4">
                        <span class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </span>
                        concierge@salonhub.luxury
                    </p>
                </div>
            </div>

            <!-- Map Placeholder -->
            <div class="w-full h-[400px] rounded-[2.5rem] overflow-hidden grayscale opacity-70 border border-accent/10 hover:grayscale-0 transition-all duration-1000 shadow-2xl">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.803851509176!2d72.82565631484931!3d18.9401499871617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1e855555555%3A0x2f5e7a9e1e1e1e1e!2sMarine%20Drive%2C%20Mumbai!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="w-full lg:w-1/2 bg-secondary/30 p-12 md:p-20 rounded-[3rem] reveal delay-100">
            <h3 class="text-accent font-sans uppercase tracking-widest text-xs mb-10 font-bold italic">Send a Message</h3>
            <form action="#" method="POST" class="space-y-8">
                <div class="space-y-2">
                    <label class="text-[10px] uppercase tracking-widest text-neutral-muted font-bold ml-1">Full Name</label>
                    <input type="text" name="name" placeholder="E.g. Alexa Bliss" class="w-full bg-white border-b border-accent/20 py-4 px-6 rounded-2xl focus:outline-none focus:border-accent transition-all font-sans text-sm">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] uppercase tracking-widest text-neutral-muted font-bold ml-1">Email Address</label>
                    <input type="email" name="email" placeholder="alexa@luxury.com" class="w-full bg-white border-b border-accent/20 py-4 px-6 rounded-2xl focus:outline-none focus:border-accent transition-all font-sans text-sm">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] uppercase tracking-widest text-neutral-muted font-bold ml-1">Your Inquiry</label>
                    <select name="subject" class="w-full bg-white border-b border-accent/20 py-4 px-6 rounded-2xl focus:outline-none focus:border-accent transition-all font-sans text-sm appearance-none">
                        <option>General Inquiry</option>
                        <option>Bridal Consultation</option>
                        <option>Boutique Support</option>
                        <option>Imperial Club Membership</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] uppercase tracking-widest text-neutral-muted font-bold ml-1">Message</label>
                    <textarea name="message" rows="5" placeholder="How can we elevate your journey?" class="w-full bg-white border-b border-accent/20 py-6 px-6 rounded-2xl focus:outline-none focus:border-accent transition-all font-sans text-sm resize-none"></textarea>
                </div>
                
                <button type="submit" class="w-full bg-accent text-white py-5 rounded-full font-sans uppercase tracking-[0.3em] text-xs font-bold hover:bg-neutral-dark transition-all duration-500 shadow-2xl shadow-accent/30 translate-y-4">
                    Send Inquiry
                </button>
            </form>
        </div>

    </div>
</section>

<!-- Boutique Trust Badges -->
<section class="py-20 px-10 border-t border-accent/10">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 text-center reveal">
        <div class="space-y-4">
            <h4 class="font-playfair text-xl text-neutral-dark italic">Bespoke Support</h4>
            <p class="text-neutral-muted text-xs font-sans tracking-widest uppercase">Available 24/7 for Members</p>
        </div>
        <div class="space-y-4">
            <h4 class="font-playfair text-xl text-neutral-dark italic">Global Concierge</h4>
            <p class="text-neutral-muted text-xs font-sans tracking-widest uppercase">Imperial Assistance Worldwide</p>
        </div>
        <div class="space-y-4">
            <h4 class="font-playfair text-xl text-neutral-dark italic">Secure Channels</h4>
            <p class="text-neutral-muted text-xs font-sans tracking-widest uppercase">Encrypted Communication</p>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>
