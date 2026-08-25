<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Pro - Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        bengkel: {
                            bg: '#111111',
                            panel: '#151515',
                            border: '#2a201c',
                            accent: '#ff6b35', // Warna oranye khas dashboard
                            accentLight: '#ffaa8b',
                            text: '#c0c0c0',
                            inputBg: '#0a0a0a'
                        }
                    },
                    fontFamily: {
                        mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'monospace'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #111111;
            background-image: radial-gradient(#2a201c 1px, transparent 1px);
            background-size: 24px 24px;
        }
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: #111; }
        ::-webkit-scrollbar-thumb { background: #ff6b35; }
    </style>
</head>
<body class="text-bengkel-text min-h-screen flex font-mono selection:bg-bengkel-accent selection:text-black">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-bengkel-bg border-r border-bengkel-border flex flex-col justify-between hidden md:flex shrink-0">
        <div>
            <!-- Logo / Brand -->
            <div class="p-6 border-b border-bengkel-border flex items-center space-x-3">
                <div class="w-8 h-8 bg-bengkel-accent/20 border border-bengkel-accent flex items-center justify-center text-bengkel-accent font-bold">BP</div>
                <div>
                    <h1 class="text-white text-sm font-bold tracking-wider">BENGKEL PRO</h1>
                    <p class="text-[10px] text-gray-500 tracking-widest uppercase">Technical Authority</p>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="p-4 space-y-2 text-xs">
                <a href="#" class="flex items-center space-x-3 px-4 py-3 bg-bengkel-accent text-black font-bold tracking-wide">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    <span>DASHBOARD</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-white/5 transition-colors tracking-wide">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    <span>PESANAN</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-white/5 transition-colors tracking-wide">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    <span>INVENTARIS</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-white/5 transition-colors tracking-wide">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    <span>STAF</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-400 hover:text-white hover:bg-white/5 transition-colors tracking-wide">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2  2h-2a2 2 0 01-2-2z"/></svg>
                    <span>LAPORAN</span>
                </a>
            </nav>
        </div>
        <div class="p-4 border-t border-bengkel-border text-[10px] text-gray-600 text-center">
            SYSTEM v2.4.1-PRO
        </div>
    </aside>

    <!-- MAIN WRAPPER -->
    <div class="grow flex flex-col min-w-0">

        <!-- TOPBAR -->
        <header class="h-16 bg-bengkel-bg border-b border-bengkel-border px-6 flex items-center justify-between">
            <!-- Search Bar -->
            <div class="relative w-96">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </span>
                <input type="text" placeholder="Cari plat, pesanan..." class="w-full bg-bengkel-inputBg border border-bengkel-border text-xs text-white pl-10 pr-4 py-2 focus:outline-none focus:border-bengkel-accent">
            </div>

            <!-- Top Right Icons & User -->
            <div class="flex items-center space-x-6">
                <button class="text-gray-400 hover:text-white relative">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                    <span class="absolute top-0 right-0 w-2 h-2 bg-bengkel-accent rounded-full"></span>
                </button>
                <button class="text-gray-400 hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </button>
                <div class="flex items-center space-x-3 border-l border-bengkel-border pl-6">
                    <div class="text-right">
                        <div class="text-xs font-bold text-white">A. Mechanic</div>
                        <div class="text-[10px] text-gray-500">Chief Tech</div>
                    </div>
                    <div class="w-9 h-9 bg-gray-800 border border-bengkel-border flex items-center justify-center text-xs font-bold text-bengkel-accent">AM</div>
                </div>
            </div>
        </header>

        <!-- CONTENT AREA -->
        <main class="p-8 space-y-8 grow">

            <!-- Page Title & Status Live -->
            <div>
                <h1 class="text-2xl font-bold tracking-wider text-white">STATUS SISTEM</h1>
                <p class="text-xs text-gray-500 mt-1">LIVE // OCT 24, 2023 14:32</p>
            </div>

            <!-- CARDS STATISTIK -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-bengkel-panel border border-bengkel-border p-6 relative overflow-hidden">
                    <div class="text-[11px] text-gray-400 uppercase tracking-widest mb-3">Pendapatan Hari Ini</div>
                    <div class="text-2xl font-bold text-white tracking-wider">Rp 14.5M</div>
                </div>
                <!-- Card 2 -->
                <div class="bg-bengkel-panel border border-bengkel-border p-6 relative overflow-hidden">
                    <div class="text-[11px] text-gray-400 uppercase tracking-widest mb-3">Total Booking</div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-white tracking-wider">42</span>
                        <span class="text-[10px] bg-bengkel-accent/20 border border-bengkel-accent text-bengkel-accent px-2 py-0.5">+5 Today</span>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-bengkel-panel border border-bengkel-border p-6 relative overflow-hidden">
                    <div class="text-[11px] text-gray-400 uppercase tracking-widest mb-3">Mekanik Aktif</div>
                    <div class="text-2xl font-bold text-white tracking-wider">8 <span class="text-xs text-gray-500 font-normal">/ 12</span></div>
                </div>
                <!-- Card 4 -->
                <div class="bg-bengkel-panel border border-bengkel-border p-6 relative overflow-hidden">
                    <div class="text-[11px] text-gray-400 uppercase tracking-widest mb-3">Pertumbuhan Pelanggan</div>
                    <div class="text-2xl font-bold text-white tracking-wider">+12%</div>
                </div>
            </div>

            <!-- MAIN GRID SECTION (Tabel Antrean & Status Pit) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- KIRI: Antrean Servis Aktif (2 Kolom) -->
                <div class="lg:col-span-2 bg-bengkel-panel border border-bengkel-border p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-sm font-bold tracking-widest text-white">ANTREAN SERVIS AKTIF</h2>
                        <a href="#" class="text-xs text-bengkel-accent hover:underline flex items-center space-x-1">
                            <span>LIHAT SEMUA</span>
                            <span>→</span>
                        </a>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs">
                            <thead>
                                <tr class="border-b border-bengkel-border text-gray-500 uppercase">
                                    <th class="py-3 px-2 tracking-widest">Plat / ID</th>
                                    <th class="py-3 px-2 tracking-widest">Jenis Layanan</th>
                                    <th class="py-3 px-2 tracking-widest">Mekanik</th>
                                    <th class="py-3 px-2 tracking-widest">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-bengkel-border/50">
                                <!-- Row 1 -->
                                <tr class="hover:bg-white/[0.02]">
                                    <td class="py-4 px-2">
                                        <div class="font-bold text-white">B 1234 XYZ</div>
                                        <div class="text-[10px] text-gray-500">#WO-2041</div>
                                    </td>
                                    <td class="py-4 px-2 text-gray-300">Full Maintenance</td>
                                    <td class="py-4 px-2 text-gray-300">J. Doe</td>
                                    <td class="py-4 px-2">
                                        <span class="inline-block border border-bengkel-accent text-bengkel-accent text-[10px] px-2.5 py-1 tracking-wider">PROSES</span>
                                    </td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="hover:bg-white/[0.02]">
                                    <td class="py-4 px-2">
                                        <div class="font-bold text-white">D 9876 AB</div>
                                        <div class="text-[10px] text-gray-500">#WO-2042</div>
                                    </td>
                                    <td class="py-4 px-2 text-gray-300">Brake Pad Replacement</td>
                                    <td class="py-4 px-2 text-gray-300">M. Smith</td>
                                    <td class="py-4 px-2">
                                        <span class="inline-block border border-cyan-500 text-cyan-400 text-[10px] px-2.5 py-1 tracking-wider">MENUNGGU SUKU CADANG</span>
                                    </td>
                                </tr>
                                <!-- Row 3 -->
                                <tr class="hover:bg-white/[0.02]">
                                    <td class="py-4 px-2">
                                        <div class="font-bold text-white">F 5555 ZZ</div>
                                        <div class="text-[10px] text-gray-500">#WO-2039</div>
                                    </td>
                                    <td class="py-4 px-2 text-gray-300">Oil Change</td>
                                    <td class="py-4 px-2 text-gray-300">K. Lee</td>
                                    <td class="py-4 px-2">
                                        <span class="inline-block border border-gray-600 text-gray-400 text-[10px] px-2.5 py-1 tracking-wider">SELESAI</span>
                                    </td>
                                </tr>
                                <!-- Row 4 -->
                                <tr class="hover:bg-white/[0.02]">
                                    <td class="py-4 px-2">
                                        <div class="font-bold text-white">B 7777 XX</div>
                                        <div class="text-[10px] text-gray-500">#WO-2043</div>
                                    </td>
                                    <td class="py-4 px-2 text-gray-300">Diagnostic</td>
                                    <td class="py-4 px-2 text-gray-300">A. Tech</td>
                                    <td class="py-4 px-2">
                                        <span class="inline-block border border-bengkel-accent text-bengkel-accent text-[10px] px-2.5 py-1 tracking-wider">PROSES</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- KANAN: Status Pit (1 Kolom) -->
                <div class="bg-bengkel-panel border border-bengkel-border p-6 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-sm font-bold tracking-widest text-white">STATUS PIT</h2>
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                        </div>

                        <!-- Grid Pit 2x2 -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <!-- Pit 01 -->
                            <div class="border border-bengkel-accent bg-bengkel-accent/5 p-4 relative">
                                <span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-bengkel-accent"></span>
                                <div class="text-[10px] text-gray-500 uppercase tracking-widest">PIT 01</div>
                                <div class="text-sm font-bold text-white mt-1">Terisi</div>
                                <div class="text-[10px] text-gray-400 mt-2">B 1234 XYZ</div>
                            </div>
                            <!-- Pit 02 -->
                            <div class="border border-bengkel-border bg-bengkel-inputBg p-4 relative">
                                <span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-gray-600"></span>
                                <div class="text-[10px] text-gray-500 uppercase tracking-widest">PIT 02</div>
                                <div class="text-sm font-bold text-gray-400 mt-1">Tersedia</div>
                            </div>
                            <!-- Pit 03 -->
                            <div class="border border-bengkel-accent bg-bengkel-accent/5 p-4 relative">
                                <span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-bengkel-accent"></span>
                                <div class="text-[10px] text-gray-500 uppercase tracking-widest">PIT 03</div>
                                <div class="text-sm font-bold text-white mt-1">Terisi</div>
                                <div class="text-[10px] text-gray-400 mt-2">B 7777 XX</div>
                            </div>
                            <!-- Pit 04 -->
                            <div class="border border-cyan-500/50 bg-cyan-500/5 p-4 relative">
                                <span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-cyan-400"></span>
                                <div class="text-[10px] text-gray-500 uppercase tracking-widest">PIT 04</div>
                                <div class="text-sm font-bold text-cyan-300 mt-1">Pembersihan</div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Kelola Pit -->
                    <button class="w-full bg-transparent border border-bengkel-accent text-bengkel-accent font-bold py-3 text-xs uppercase tracking-widest hover:bg-bengkel-accent hover:text-black transition-colors">
                        KELOLA PIT
                    </button>
                </div>

            </div>

        </main>
    </div>

</body>
</html>
