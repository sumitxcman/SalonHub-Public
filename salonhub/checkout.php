<?php include 'partials/header.php'; ?>

<!-- Checkout Hero -->
<section class="relative h-[40vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="assets/img/service8.png" alt="Checkout Hero" class="w-full h-full object-cover scale-110 opacity-20">
        <div class="absolute inset-0 bg-gradient-to-b from-white/30 via-white/50 to-white"></div>
    </div>
    <div class="relative z-10 text-center reveal">
        <h3 class="text-accent font-sans uppercase tracking-[0.5em] mb-4 text-sm font-bold">Final Step</h3>
        <h1 class="text-5xl md:text-7xl font-playfair text-neutral-dark mb-6">Complete <span class="italic text-accent">Investment</span></h1>
        <div class="w-24 h-[1px] bg-accent mx-auto"></div>
    </div>
</section>

<!-- Checkout Content -->
<section class="py-24 px-10 bg-white min-h-screen">
    <div id="checkout-container" class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-20">
        
        <!-- Order Summary -->
        <div class="w-full lg:w-2/3 space-y-10 reveal">
            <div class="bg-secondary/30 p-10 rounded-[3rem] border border-accent/10">
                <h3 class="text-2xl font-playfair text-neutral-dark mb-10 italic">Your <span class="text-accent not-italic">Selection</span></h3>
                <div id="checkout-items" class="space-y-8">
                    <!-- Items will be injected here -->
                </div>
            </div>

            <!-- Payment Form -->
            <div class="bg-white p-10 rounded-[3rem] border border-accent/10 shadow-2xl shadow-accent/5">
                <h3 class="text-2xl font-playfair text-neutral-dark mb-10 italic">Payment <span class="text-accent not-italic">Method</span></h3>
                <div class="space-y-6">
                    <div class="flex items-center gap-6 p-6 border-2 border-accent rounded-2xl bg-secondary/20">
                        <div class="w-6 h-6 rounded-full border-4 border-accent"></div>
                        <div>
                            <p class="font-sans font-bold text-xs uppercase tracking-widest text-neutral-dark">Imperial Gateway</p>
                            <p class="text-[10px] text-neutral-muted mt-1 italic">Secure Credit/Debit & UPI Payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Checkout Sidebar -->
        <div class="w-full lg:w-1/3 reveal delay-100">
            <div class="sticky top-32 bg-neutral-dark text-white p-10 rounded-[3rem] shadow-2xl">
                <h3 class="text-2xl font-playfair mb-10 italic text-accent">Total <span class="text-white not-italic">Investment</span></h3>
                <div class="space-y-6 font-sans text-xs uppercase tracking-widest mb-10">
                    <div class="flex justify-between text-white/60">
                        <span>Subtotal</span>
                        <span id="checkout-subtotal">₹0.00</span>
                    </div>
                    <div class="flex justify-between text-white/60">
                        <span>Concierge Fee</span>
                        <span class="text-accent italic font-bold">Complimentary</span>
                    </div>
                    <div class="flex justify-between">
                        <span>GST (5%)</span>
                        <span id="checkout-gst">₹0.00</span>
                    </div>
                </div>
                <div class="pt-8 border-t border-white/10 flex justify-between items-center mb-10">
                    <span class="text-xl font-playfair italic">Total</span>
                    <span id="checkout-total" class="text-3xl font-playfair font-bold text-accent">₹0.00</span>
                </div>
                
                <button id="complete-order" class="w-full bg-accent text-white py-6 rounded-full font-sans uppercase tracking-[0.3em] text-[10px] font-bold hover:bg-white hover:text-accent transition-all duration-500 shadow-2xl shadow-accent/20">
                    Place Order Now
                </button>
            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const checkoutItemsContainer = document.getElementById('checkout-items');
        const subtotalEl = document.getElementById('checkout-subtotal');
        const gstEl = document.getElementById('checkout-gst');
        const totalEl = document.getElementById('checkout-total');
        const completeOrderBtn = document.getElementById('complete-order');
        const container = document.getElementById('checkout-container');

        let cart = JSON.parse(localStorage.getItem('salonhub_cart')) || [];

        function updateCheckout() {
            if (cart.length === 0) {
                container.innerHTML = `
                    <div class="w-full text-center py-40">
                        <h2 class="text-4xl font-playfair text-neutral-dark mb-6">Your bag is empty</h2>
                        <a href="shop.php" class="text-accent border-b border-accent pb-2 uppercase tracking-widest text-xs font-bold">Return to Boutique</a>
                    </div>
                `;
                return;
            }

            let subtotal = 0;
            checkoutItemsContainer.innerHTML = cart.map(item => {
                subtotal += parseInt(item.price);
                return `
                    <div class="flex gap-8 items-center border-b border-accent/5 pb-8 last:border-0">
                        <img src="${item.img}" class="w-24 h-24 object-cover rounded-2xl shadow-lg">
                        <div class="flex-1">
                            <h4 class="text-xl font-playfair text-neutral-dark mb-2">${item.name}</h4>
                            <p class="text-neutral-muted font-sans text-xs italic">Couture Selection</p>
                        </div>
                        <p class="text-accent font-sans text-lg font-bold">₹${parseInt(item.price).toLocaleString()}</p>
                    </div>
                `;
            }).join('');

            const gst = subtotal * 0.05;
            const total = subtotal + gst;

            subtotalEl.innerText = `₹${subtotal.toLocaleString()}`;
            gstEl.innerText = `₹${gst.toLocaleString()}`;
            totalEl.innerText = `₹${total.toLocaleString()}`;
        }

        completeOrderBtn.onclick = () => {
            const total = totalEl.innerText;
            container.innerHTML = `
                <div class="w-full text-center py-40 animate-fade-in">
                    <div class="reveal active">
                        <div class="w-24 h-24 bg-accent/10 text-accent rounded-full flex items-center justify-center mx-auto mb-10 text-4xl animate-bounce">✦</div>
                        <h1 class="text-6xl font-playfair text-neutral-dark mb-6 italic">Order <span class="text-accent not-italic">Received</span></h1>
                        <p class="text-neutral-muted font-sans text-xl mb-12 max-w-xl mx-auto italic">Thank you for your investment in beauty. Your sanctuary treasures are being prepared. Total Paid: ${total}</p>
                        <a href="index.php" class="inline-block bg-accent text-white px-12 py-5 rounded-full font-sans uppercase tracking-widest text-[10px] font-bold hover:bg-neutral-dark transition-all">Return to Sanctuary</a>
                    </div>
                </div>
            `;
            localStorage.removeItem('salonhub_cart');
        };

        updateCheckout();
    });
</script>

<?php include 'partials/footer.php'; ?>