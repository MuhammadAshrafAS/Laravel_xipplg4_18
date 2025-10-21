<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Modern</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Memuat Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Menggunakan font Inter sebagai default */
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Styling untuk scrollbar (opsional, tapi mempercantik) */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: #94a3b8;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }
    </style>
</head>
<body class="bg-slate-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 flex-shrink-0 bg-slate-800 text-slate-300 flex flex-col">
            <!-- Logo/Header Sidebar -->
            <div class="h-16 flex items-center justify-center border-b border-slate-700">
                <h1 class="text-xl font-bold text-white tracking-wider">PANEL ADMIN</h1>
            </div>
            
            <!-- Menu Navigasi -->
            <nav class="flex-grow px-4 py-6">
                <ul class="space-y-2">
                    <!-- Item Menu Aktif -->
                    <li>
                        <a href="#" class="flex items-center px-4 py-2.5 bg-blue-600 text-white rounded-lg shadow-md font-semibold">
                            <!-- Ikon SVG untuk Dashboard -->
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <!-- Item Menu Lainnya -->
                    <li>
                        <a href="#" class="flex items-center px-4 py-2.5 rounded-lg hover:bg-slate-700 transition-colors duration-200">
                             <!-- Ikon SVG untuk Manajemen Pengguna -->
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21a6 6 0 00-9-5.197m0 0A5.975 5.975 0 0112 13a5.975 5.975 0 013 5.197M15 21a6 6 0 00-9-5.197"></path></svg>
                            <span>Manajemen Pengguna</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-2.5 rounded-lg hover:bg-slate-700 transition-colors duration-200">
                            <!-- Ikon SVG untuk Kursus -->
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v11.494m-9-5.747h18"></path><path d="M12 6.253v11.494m-9-5.747h18" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M9.75 21.75l-6-6 6-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M14.25 2.25l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            <span>Kursus</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-2.5 rounded-lg hover:bg-slate-700 transition-colors duration-200">
                            <!-- Ikon SVG untuk Pengaturan -->
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Pengaturan</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <!-- Profil User di Sidebar -->
            <div class="p-4 border-t border-slate-700">
                <a href="#" class="flex items-center group">
                    <img src="https://placehold.co/40x40/64748b/ffffff?text=A" alt="Avatar" class="w-10 h-10 rounded-full">
                    <div class="ml-3">
                        <p class="text-sm font-semibold text-white">User Admin</p>
                        <p class="text-xs text-slate-400 group-hover:text-slate-200">Lihat Profil</p>
                    </div>
                </a>
            </div>
        </aside>

        <!-- Konten Utama -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header Konten -->
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6">
                 <!-- Search Bar -->
                 <div class="relative">
                     <svg class="w-5 h-5 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                     <input type="text" placeholder="Cari sesuatu..." class="pl-10 pr-4 py-2 w-72 border border-slate-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                 </div>
                 
                 <!-- Ikon Header Kanan -->
                 <div class="flex items-center space-x-4">
                     <button class="p-2 rounded-full hover:bg-slate-100">
                         <svg class="w-6 h-6 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                     </button>
                      <button class="p-2 rounded-full hover:bg-slate-100">
                         <svg class="w-6 h-6 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                     </button>
                 </div>
            </header>
            
            <!-- Area Konten Scrollable -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto p-8">
                <h2 class="text-3xl font-bold text-slate-800 mb-6">Dashboard Admin</h2>
                <p class="text-slate-600 mb-8">Selamat datang di panel admin. Berikut ringkasan aktivitas terkini.</p>

                <!-- Grid Kartu Statistik -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Kartu 1 -->
                    <div class="bg-white p-6 rounded-xl shadow-md flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Total Pengguna</p>
                            <p class="text-3xl font-bold text-slate-800">1,250</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                    </div>
                    <!-- Kartu 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-md flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Kursus Aktif</p>
                            <p class="text-3xl font-bold text-slate-800">32</p>
                        </div>
                        <div class="bg-green-100 p-3 rounded-full">
                           <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                    </div>
                     <!-- Kartu 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-md flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Pendaftar Baru</p>
                            <p class="text-3xl font-bold text-slate-800">78</p>
                        </div>
                         <div class="bg-yellow-100 p-3 rounded-full">
                           <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                        </div>
                    </div>
                    <!-- Kartu 4 -->
                    <div class="bg-white p-6 rounded-xl shadow-md flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Laporan</p>
                            <p class="text-3xl font-bold text-slate-800">12</p>
                        </div>
                        <div class="bg-red-100 p-3 rounded-full">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                    </div>
                </div>

                <!-- Tabel Data Pengguna -->
                <div class="mt-10 bg-white rounded-xl shadow-md">
                    <div class="p-6 border-b border-slate-200">
                        <h3 class="text-lg font-semibold text-slate-700">Pengguna Terbaru</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-sm font-semibold text-slate-600">Nama</th>
                                    <th class="px-6 py-3 text-sm font-semibold text-slate-600">Email</th>
                                    <th class="px-6 py-3 text-sm font-semibold text-slate-600">Role</th>
                                    <th class="px-6 py-3 text-sm font-semibold text-slate-600">Tanggal Bergabung</th>
                                    <th class="px-6 py-3 text-sm font-semibold text-slate-600">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">Budi Santoso</td>
                                    <td class="px-6 py-4 whitespace-nowrap">budi.s@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Admin</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap">20 Okt 2025</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><a href="#" class="text-blue-600 hover:underline font-semibold">Edit</a></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">Citra Lestari</td>
                                    <td class="px-6 py-4 whitespace-nowrap">citra.l@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 py-1 text-xs font-semibold text-slate-800 bg-slate-100 rounded-full">Member</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap">19 Okt 2025</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><a href="#" class="text-blue-600 hover:underline font-semibold">Edit</a></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">Agus Wijaya</td>
                                    <td class="px-6 py-4 whitespace-nowrap">agus.w@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 py-1 text-xs font-semibold text-slate-800 bg-slate-100 rounded-full">Member</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap">19 Okt 2025</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><a href="#" class="text-blue-600 hover:underline font-semibold">Edit</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>
</body>
</html>
