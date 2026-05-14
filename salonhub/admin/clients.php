<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalonHub | Client Management</title>
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
                    <h3 class="text-accent font-sans uppercase tracking-[0.4em] text-[10px] mb-2 font-bold">Imperial Community</h3>
                    <h2 class="text-4xl font-playfair text-neutral-dark">Client <span class="italic text-accent">Relations</span></h2>
                </div>
                <div class="flex items-center gap-4">
                     <div class="relative">
                        <input type="text" placeholder="Search Clients..." class="bg-white border border-accent/10 px-6 py-3 rounded-xl text-xs font-sans tracking-wider focus:outline-none focus:border-accent w-64">
                        <svg class="absolute right-4 top-1/2 -translate-y-1/2 text-neutral-muted" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                     </div>
                </div>
            </header>

            <!-- Clients List -->
            <div class="bg-white p-10 rounded-[2.5rem] border border-accent/5 shadow-xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-neutral-muted text-[10px] uppercase tracking-[0.2em] font-bold border-b border-accent/5">
                                <th class="pb-6 px-4">Name</th>
                                <th class="pb-6 px-4">Contact</th>
                                <th class="pb-6 px-4">Total Spent</th>
                                <th class="pb-6 px-4">Level</th>
                                <th class="pb-6 px-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr class="border-b border-accent/5 hover:bg-secondary/50 transition-all">
                                <td class="py-6 px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-accent text-white rounded-full flex items-center justify-center font-bold text-xs">AB</div>
                                        <div>
                                            <p class="font-bold">Alexa Bliss</p>
                                            <p class="text-[10px] text-neutral-muted uppercase tracking-widest">Joined Jan 2026</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-6 px-4">
                                    <p class="text-neutral-dark">alexa@example.com</p>
                                    <p class="text-xs text-neutral-muted">+44 20 7946 0000</p>
                                </td>
                                <td class="py-6 px-4 font-bold text-accent">$4,250.00</td>
                                <td class="py-6 px-4">
                                    <span class="px-4 py-1 bg-accent/10 text-accent rounded-full text-[10px] uppercase tracking-widest font-bold">Imperial Elite</span>
                                </td>
                                <td class="py-6 px-4">
                                    <button class="text-neutral-dark hover:text-accent transition-colors">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-accent/5 hover:bg-secondary/50 transition-all">
                                <td class="py-6 px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-neutral-dark text-white rounded-full flex items-center justify-center font-bold text-xs">JM</div>
                                        <div>
                                            <p class="font-bold">Julianne Moore</p>
                                            <p class="text-[10px] text-neutral-muted uppercase tracking-widest">Joined Feb 2026</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-6 px-4">
                                    <p class="text-neutral-dark">julianne@example.com</p>
                                    <p class="text-xs text-neutral-muted">+44 20 7946 0011</p>
                                </td>
                                <td class="py-6 px-4 font-bold text-accent">$1,850.00</td>
                                <td class="py-6 px-4">
                                    <span class="px-4 py-1 bg-neutral-dark/5 text-neutral-dark rounded-full text-[10px] uppercase tracking-widest font-bold">Member</span>
                                </td>
                                <td class="py-6 px-4">
                                    <button class="text-neutral-dark hover:text-accent transition-colors">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
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
