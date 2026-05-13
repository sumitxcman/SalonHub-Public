<footer class="bg-secondary pt-24 pb-12 px-10 border-t border-accent/10">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 reveal">
        <!-- Brand Info -->
        <div class="space-y-8">
            <h2 class="text-3xl font-playfair tracking-tighter text-neutral-dark">Salon<span class="text-accent italic">Hub</span></h2>
            <p class="text-neutral-muted font-sans text-sm leading-relaxed uppercase tracking-widest">
                Redefining luxury beauty through cinematic artistry and imperial precision.
            </p>
            <div class="flex gap-6 text-accent">
                <a href="#" class="hover:text-neutral-dark transition-all duration-300">Instagram</a>
                <a href="#" class="hover:text-neutral-dark transition-all duration-300">Vogue</a>
                <a href="#" class="hover:text-neutral-dark transition-all duration-300">Twitter</a>
            </div>
        </div>

        <!-- Navigation -->
        <div class="space-y-8">
            <h4 class="text-accent font-playfair text-xl">Quick Links</h4>
            <ul class="space-y-4 text-neutral-muted font-sans text-xs uppercase tracking-[0.2em]">
                <li><a href="services.php" class="hover:text-accent transition-all">Services</a></li>
                <li><a href="gallery.php" class="hover:text-accent transition-all">Portfolio</a></li>
                <li><a href="booking.php" class="hover:text-accent transition-all">Reservations</a></li>
                <li><a href="shop.php" class="hover:text-accent transition-all">Boutique</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div class="space-y-8">
            <h4 class="text-accent font-playfair text-xl">Sanctuary</h4>
            <p class="text-neutral-muted font-sans text-xs uppercase tracking-widest leading-relaxed">
                12 Luxury Lane, Mayfair<br>
                London, W1J 7JZ<br>
                +44 20 7946 0000
            </p>
        </div>

        <!-- Newsletter -->
        <div class="space-y-8">
            <h4 class="text-accent font-playfair text-xl">Join the Elite</h4>
            <p class="text-neutral-muted font-sans text-xs uppercase tracking-widest leading-relaxed">Subscribe for private invitations and editorial drops.</p>
            <div class="flex border-b border-accent/30 pb-2">
                <input type="email" placeholder="YOUR EMAIL" class="bg-transparent w-full font-sans text-[10px] tracking-widest focus:outline-none text-neutral-dark placeholder:text-neutral-muted">
                <button class="text-accent hover:text-neutral-dark transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="max-w-7xl mx-auto mt-24 pt-8 border-t border-accent/5 flex flex-col md:flex-row justify-between items-center gap-6">
        <p class="text-neutral-muted font-sans text-[10px] uppercase tracking-widest">&copy; 2026 SalonHub Imperial. All Rights Reserved.</p>
        <div class="flex gap-10 text-neutral-muted font-sans text-[10px] uppercase tracking-widest">
            <a href="#" class="hover:text-accent transition-all">Privacy</a>
            <a href="#" class="hover:text-accent transition-all">Terms</a>
        </div>
    </div>
</footer>

<!-- Magnetic Cursor Glow -->
<div class="cursor-glow hidden lg:block"></div>

<script>
    // Intersection Observer for Reveal Animations
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    // Magnetic Cursor Effect
    const cursor = document.querySelector('.cursor-glow');
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });
</script>

</body>
</html>