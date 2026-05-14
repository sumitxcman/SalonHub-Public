<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalonHub | Manage Bookings</title>
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
                    <h3 class="text-accent font-sans uppercase tracking-[0.4em] text-[10px] mb-2 font-bold">Reservations</h3>
                    <h2 class="text-4xl font-playfair text-neutral-dark">Manage <span class="italic text-accent">Bookings</span></h2>
                </div>
                <div class="flex items-center gap-4">
                    <button class="bg-white px-6 py-3 rounded-xl border border-accent/10 text-[10px] uppercase tracking-widest font-bold hover:border-accent transition-all">Filter</button>
                    <button class="bg-accent text-white px-6 py-3 rounded-xl text-[10px] uppercase tracking-widest font-bold hover:bg-neutral-dark transition-all shadow-lg shadow-accent/20">Download PDF</button>
                </div>
            </header>

            <!-- Bookings Table -->
            <div class="bg-white p-10 rounded-[2.5rem] border border-accent/5 shadow-xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-neutral-muted text-[10px] uppercase tracking-[0.2em] font-bold border-b border-accent/5">
                                <th class="pb-6 px-4">Booking ID</th>
                                <th class="pb-6 px-4">Client</th>
                                <th class="pb-6 px-4">Service</th>
                                <th class="pb-6 px-4">Date & Time</th>
                                <th class="pb-6 px-4">Status</th>
                                <th class="pb-6 px-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <!-- Booking 1 -->
                            <tr class="border-b border-accent/5 hover:bg-secondary/50 transition-all">
                                <td class="py-6 px-4 font-mono text-[10px]">#SH-8821</td>
                                <td class="py-6 px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-accent/10 rounded-full flex items-center justify-center text-accent font-bold text-[10px]">AB</div>
                                        <span class="font-bold">Alexa Bliss</span>
                                    </div>
                                </td>
                                <td class="py-6 px-4 text-neutral-muted">Bridal Artistry</td>
                                <td class="py-6 px-4">May 15, 2026 - 2:00 PM</td>
                                <td class="py-6 px-4">
                                    <span class="px-4 py-1 bg-emerald-100 text-emerald-600 rounded-full text-[10px] uppercase tracking-widest font-bold">Confirmed</span>
                                </td>
                                <td class="py-6 px-4">
                                    <div class="flex gap-4">
                                        <button class="text-accent hover:text-neutral-dark transition-colors">Edit</button>
                                        <button class="text-rose-400 hover:text-rose-600 transition-colors">Cancel</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Booking 2 -->
                            <tr class="border-b border-accent/5 hover:bg-secondary/50 transition-all">
                                <td class="py-6 px-4 font-mono text-[10px]">#SH-8822</td>
                                <td class="py-6 px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-accent/10 rounded-full flex items-center justify-center text-accent font-bold text-[10px]">JM</div>
                                        <span class="font-bold">Julianne Moore</span>
                                    </div>
                                </td>
                                <td class="py-6 px-4 text-neutral-muted">Zen Spa Ritual</td>
                                <td class="py-6 px-4">May 15, 2026 - 4:30 PM</td>
                                <td class="py-6 px-4">
                                    <span class="px-4 py-1 bg-amber-100 text-amber-600 rounded-full text-[10px] uppercase tracking-widest font-bold">Pending</span>
                                </td>
                                <td class="py-6 px-4">
                                    <div class="flex gap-4">
                                        <button class="text-accent hover:text-neutral-dark transition-colors">Edit</button>
                                        <button class="text-rose-400 hover:text-rose-600 transition-colors">Cancel</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
