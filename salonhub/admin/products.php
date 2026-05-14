<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalonHub | Inventory Management</title>
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
                    <h3 class="text-accent font-sans uppercase tracking-[0.4em] text-[10px] mb-2 font-bold">Boutique Inventory</h3>
                    <h2 class="text-4xl font-playfair text-neutral-dark">Product <span class="italic text-accent">Catalog</span></h2>
                </div>
                <button class="bg-accent text-white px-8 py-4 rounded-full text-[10px] uppercase tracking-widest font-bold hover:bg-neutral-dark transition-all shadow-lg shadow-accent/20 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    Add Product
                </button>
            </header>

            <!-- Products Table -->
            <div class="bg-white p-10 rounded-[2.5rem] border border-accent/5 shadow-xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-neutral-muted text-[10px] uppercase tracking-[0.2em] font-bold border-b border-accent/5">
                                <th class="pb-6 px-4">Image</th>
                                <th class="pb-6 px-4">Product Name</th>
                                <th class="pb-6 px-4">Category</th>
                                <th class="pb-6 px-4">Price</th>
                                <th class="pb-6 px-4">Stock</th>
                                <th class="pb-6 px-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr class="border-b border-accent/5 hover:bg-secondary/50 transition-all">
                                <td class="py-6 px-4">
                                    <div class="w-12 h-12 bg-secondary rounded-xl overflow-hidden border border-accent/5">
                                        <img src="../assets/img/service8.png" alt="Product" class="w-full h-full object-cover">
                                    </div>
                                </td>
                                <td class="py-6 px-4 font-bold">Imperial Makeup Kit</td>
                                <td class="py-6 px-4 text-neutral-muted uppercase text-[10px] tracking-widest">Cosmetics</td>
                                <td class="py-6 px-4 font-bold text-accent">₹8,500.00</td>
                                <td class="py-6 px-4">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                                        <span class="text-[10px] uppercase tracking-widest font-bold">24 in stock</span>
                                    </div>
                                </td>
                                <td class="py-6 px-4">
                                    <button class="text-neutral-dark hover:text-accent transition-colors">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-accent/5 hover:bg-secondary/50 transition-all">
                                <td class="py-6 px-4">
                                    <div class="w-12 h-12 bg-secondary rounded-xl overflow-hidden border border-accent/5">
                                        <img src="../assets/img/service7.png" alt="Product" class="w-full h-full object-cover">
                                    </div>
                                </td>
                                <td class="py-6 px-4 font-bold">Velvet Skin Oil</td>
                                <td class="py-6 px-4 text-neutral-muted uppercase text-[10px] tracking-widest">Skincare</td>
                                <td class="py-6 px-4 font-bold text-accent">₹4,200.00</td>
                                <td class="py-6 px-4">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-rose-500 rounded-full"></div>
                                        <span class="text-[10px] uppercase tracking-widest font-bold text-rose-500">Out of stock</span>
                                    </div>
                                </td>
                                <td class="py-6 px-4">
                                    <button class="text-neutral-dark hover:text-accent transition-colors">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
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
