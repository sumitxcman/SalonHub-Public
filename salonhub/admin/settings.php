<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalonHub | System Settings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#FFFFFF',
                        'secondary': '#FDF5F7',
                        'accent': '#FF8FA3',
                        'neutral-dark': '#1A1A1A',
                        'neutral-muted': '#666666',
                    },
                    fontFamily: {
                        'playfair': ['"Playfair Display"', 'serif'],
                        'sans': ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-secondary font-sans text-neutral-dark">

    <div class="flex min-h-screen">
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <main class="flex-1 p-10 md:p-16 overflow-y-auto">
            <!-- Header -->
            <header class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-16">
                <div>
                    <h3 class="text-accent font-sans uppercase tracking-[0.4em] text-[10px] mb-2 font-bold">Configuration</h3>
                    <h2 class="text-4xl font-playfair text-neutral-dark">System <span class="italic text-accent">Settings</span></h2>
                </div>
                <button class="bg-accent text-white px-10 py-4 rounded-full text-[10px] uppercase tracking-widest font-bold hover:bg-neutral-dark transition-all shadow-lg shadow-accent/20">Save Changes</button>
            </header>

            <!-- Settings Sections -->
            <div class="space-y-10">
                <!-- Salon Profile -->
                <div class="bg-white p-10 rounded-[2.5rem] border border-accent/5 shadow-xl">
                    <h3 class="text-xl font-playfair text-neutral-dark mb-8">Salon <span class="italic text-accent">Profile</span></h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="text-neutral-muted text-[10px] uppercase tracking-widest font-bold ml-1">Salon Name</label>
                            <input type="text" value="SalonHub Imperial" class="w-full bg-secondary border border-accent/10 px-6 py-4 rounded-2xl focus:outline-none focus:border-accent text-sm font-sans tracking-wider">
                        </div>
                        <div class="space-y-2">
                            <label class="text-neutral-muted text-[10px] uppercase tracking-widest font-bold ml-1">Business Email</label>
                            <input type="email" value="contact@salonhub.luxury" class="w-full bg-secondary border border-accent/10 px-6 py-4 rounded-2xl focus:outline-none focus:border-accent text-sm font-sans tracking-wider">
                        </div>
                        <div class="space-y-2 md:col-span-2">
                            <label class="text-neutral-muted text-[10px] uppercase tracking-widest font-bold ml-1">Address</label>
                            <textarea class="w-full bg-secondary border border-accent/10 px-6 py-4 rounded-2xl focus:outline-none focus:border-accent text-sm font-sans tracking-wider resize-none" rows="2">Plot No. 123, Swaroop Nagar, Delhi - 110042</textarea>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="bg-white p-10 rounded-[2.5rem] border border-accent/5 shadow-xl">
                    <h3 class="text-xl font-playfair text-neutral-dark mb-8">Business <span class="italic text-accent">Hours</span></h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="flex justify-between items-center border-b border-accent/5 pb-4">
                            <span class="text-[10px] uppercase tracking-widest font-bold">Mon - Fri</span>
                            <span class="text-sm font-sans">09:00 AM - 08:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-accent/5 pb-4">
                            <span class="text-[10px] uppercase tracking-widest font-bold">Saturday</span>
                            <span class="text-sm font-sans">10:00 AM - 06:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center border-b border-accent/5 pb-4">
                            <span class="text-[10px] uppercase tracking-widest font-bold">Sunday</span>
                            <span class="text-sm text-rose-400 font-bold uppercase tracking-widest text-[10px]">Closed</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>