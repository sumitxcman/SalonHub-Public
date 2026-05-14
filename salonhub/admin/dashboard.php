<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalonHub | Admin Dashboard</title>
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
    <style>
        .sidebar-link.active {
            background: #FF8FA3;
            color: white;
            box-shadow: 0 10px 15px -3px rgba(255, 143, 163, 0.2);
        }
    </style>
</head>
<body class="bg-secondary font-sans text-neutral-dark">

    <div class="flex min-h-screen">
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <main class="flex-1 p-10 md:p-16 overflow-y-auto">
            <!-- Header -->
            <header class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-16">
                <div>
                    <h3 class="text-accent font-sans uppercase tracking-[0.4em] text-[10px] mb-2 font-bold">Imperial Overview</h3>
                    <h2 class="text-4xl font-playfair text-neutral-dark">Welcome, <span class="italic text-accent">Administrator</span></h2>
                </div>
                <div class="flex items-center gap-6">
                    <button class="bg-white p-4 rounded-2xl border border-accent/10 hover:border-accent transition-all shadow-sm">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                    </button>
                    <div class="w-12 h-12 bg-accent rounded-2xl flex items-center justify-center text-white font-bold shadow-lg shadow-accent/20">AD</div>
                </div>
            </header>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <div class="bg-white p-8 rounded-[2rem] border border-accent/5 shadow-xl">
                    <p class="text-neutral-muted text-[10px] uppercase tracking-widest font-bold mb-4">Total Bookings</p>
                    <div class="flex justify-between items-end">
                        <h4 class="text-4xl font-playfair text-neutral-dark">1,248</h4>
                        <span class="text-emerald-500 text-xs font-bold font-sans">+12%</span>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-[2rem] border border-accent/5 shadow-xl">
                    <p class="text-neutral-muted text-[10px] uppercase tracking-widest font-bold mb-4">Revenue</p>
                    <div class="flex justify-between items-end">
                        <h4 class="text-4xl font-playfair text-neutral-dark">₹4,25,000</h4>
                        <span class="text-emerald-500 text-xs font-bold font-sans">+8%</span>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-[2rem] border border-accent/5 shadow-xl">
                    <p class="text-neutral-muted text-[10px] uppercase tracking-widest font-bold mb-4">Active Clients</p>
                    <div class="flex justify-between items-end">
                        <h4 class="text-4xl font-playfair text-neutral-dark">856</h4>
                        <span class="text-accent text-xs font-bold font-sans">New</span>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-[2rem] border border-accent/5 shadow-xl">
                    <p class="text-neutral-muted text-[10px] uppercase tracking-widest font-bold mb-4">Shop Sales</p>
                    <div class="flex justify-between items-end">
                        <h4 class="text-4xl font-playfair text-neutral-dark">312</h4>
                        <span class="text-rose-500 text-xs font-bold font-sans">-2%</span>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white p-10 rounded-[2.5rem] border border-accent/5 shadow-xl">
                <div class="flex justify-between items-center mb-10">
                    <h3 class="text-2xl font-playfair text-neutral-dark">Recent <span class="italic text-accent">Appointments</span></h3>
                    <button class="text-accent text-[10px] uppercase tracking-widest font-bold hover:text-neutral-dark transition-colors border-b border-accent pb-1">View All</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-neutral-muted text-[10px] uppercase tracking-[0.2em] font-bold border-b border-accent/5">
                                <th class="pb-6 px-4">Client</th>
                                <th class="pb-6 px-4">Service</th>
                                <th class="pb-6 px-4">Time</th>
                                <th class="pb-6 px-4">Status</th>
                                <th class="pb-6 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr class="border-b border-accent/5 hover:bg-secondary/50 transition-all">
                                <td class="py-6 px-4 font-bold">Alexa Bliss</td>
                                <td class="py-6 px-4">Bridal Artistry</td>
                                <td class="py-6 px-4 text-neutral-muted">Today, 2:00 PM</td>
                                <td class="py-6 px-4"><span class="px-4 py-1 bg-emerald-100 text-emerald-600 rounded-full text-[10px] uppercase tracking-widest font-bold">Confirmed</span></td>
                                <td class="py-6 px-4">
                                    <button class="text-accent hover:text-neutral-dark transition-colors">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-accent/5 hover:bg-secondary/50 transition-all">
                                <td class="py-6 px-4 font-bold">Julianne Moore</td>
                                <td class="py-6 px-4">Zen Spa Ritual</td>
                                <td class="py-6 px-4 text-neutral-muted">Today, 4:30 PM</td>
                                <td class="py-6 px-4"><span class="px-4 py-1 bg-amber-100 text-amber-600 rounded-full text-[10px] uppercase tracking-widest font-bold">Pending</span></td>
                                <td class="py-6 px-4">
                                    <button class="text-accent hover:text-neutral-dark transition-colors">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </button>
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
