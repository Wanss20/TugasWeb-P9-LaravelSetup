<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Operasional - Core Inventory System | M Daffa Dzakwan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
    </style>
</head>

<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col justify-between selection:bg-blue-600 selection:text-white">
    <!-- Header Navigation -->
    <header class="border-b border-slate-800 bg-slate-900/60 backdrop-blur sticky top-0 z-50 px-6 py-4 flex flex-wrap justify-between items-center gap-4">
        <div class="flex items-center gap-3">
            <div class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
            </div>
            <div>
                <span class="font-mono text-sm tracking-wider text-slate-200 font-bold">DAFFA_OPS CONSOLE</span>
                <span class="text-[10px] ml-2 px-1.5 py-0.5 rounded bg-blue-500/20 text-blue-400 font-mono border border-blue-500/30">v1.0-P9</span>
            </div>
        </div>
        <nav class="flex items-center gap-2 sm:gap-4 text-sm font-medium">
            <a href="/" class="px-3 py-1.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 transition">Dashboard</a>
            <a href="/about" class="px-3 py-1.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 transition">Sistem Info</a>
            <a href="/contact" class="px-3 py-1.5 rounded-lg bg-blue-600 text-white font-medium shadow-sm transition">Kontak Ops</a>
            <a href="/hello/Operator" class="px-3 py-1.5 rounded-lg text-emerald-400 hover:bg-emerald-500/10 transition flex items-center gap-1.5 font-mono text-xs border border-emerald-500/20">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                <span>Sesi Operator</span>
            </a>
            <a href="/welcome" class="text-slate-500 hover:text-slate-300 transition text-xs font-mono ml-2">
                Laravel Welcome &rarr;
            </a>
        </nav>
    </header>

    <!-- Main Content Area -->
    <main class="max-w-4xl mx-auto w-full px-6 py-10 space-y-8 flex-1">
        <div class="bg-gradient-to-b from-slate-900 to-slate-900/80 border border-slate-800 rounded-2xl p-8 shadow-2xl space-y-6">
            <div class="border-b border-slate-800 pb-6">
                <span class="text-xs uppercase font-mono tracking-widest text-blue-400">Saluran Komunikasi &bull; Route /contact</span>
                <h1 class="text-2xl font-bold text-slate-100 tracking-tight mt-1">Dukungan & Operasional Teknis</h1>
                <p class="text-slate-400 text-sm mt-1">Informasi kontak dan jalur eskalasi operasional inventaris terpusat.</p>
            </div>

            <!-- Dynamic Contact Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-slate-950/70 border border-slate-800/80 p-5 rounded-xl space-y-1">
                    <span class="text-[11px] font-mono uppercase text-slate-500">Unit Operasional</span>
                    <p class="text-sm font-semibold text-slate-200">{{ $kontak['divisi'] }}</p>
                </div>
                <div class="bg-slate-950/70 border border-slate-800/80 p-5 rounded-xl space-y-1">
                    <span class="text-[11px] font-mono uppercase text-slate-500">Email Resmi</span>
                    <p class="text-sm font-mono text-blue-400 font-semibold">{{ $kontak['email'] }}</p>
                </div>
                <div class="bg-slate-950/70 border border-slate-800/80 p-5 rounded-xl space-y-1">
                    <span class="text-[11px] font-mono uppercase text-slate-500">Telepon / Hotline</span>
                    <p class="text-sm font-mono text-slate-200 font-semibold">{{ $kontak['telepon'] }}</p>
                </div>
                <div class="bg-slate-950/70 border border-slate-800/80 p-5 rounded-xl space-y-1">
                    <span class="text-[11px] font-mono uppercase text-slate-500">Lokasi Node</span>
                    <p class="text-sm font-semibold text-slate-200">{{ $kontak['lokasi'] }}</p>
                </div>
            </div>

            <!-- Form Mockup Interaktif -->
            <div class="p-6 bg-slate-950/60 border border-slate-800/80 rounded-xl space-y-4">
                <h3 class="text-xs uppercase font-mono tracking-wider text-slate-300 font-semibold">Formulir Pesan Cepat Operasional</h3>
                <form onsubmit="event.preventDefault(); alert('Pesan simulasi operasional berhasil dikirim!'); this.reset();" class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <input type="text" placeholder="Nama Lengkap" class="bg-slate-900 border border-slate-700 text-slate-100 text-sm rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 transition placeholder:text-slate-600" required>
                        <input type="email" placeholder="Alamat Email" class="bg-slate-900 border border-slate-700 text-slate-100 text-sm rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 transition placeholder:text-slate-600" required>
                    </div>
                    <textarea rows="3" placeholder="Pesan atau catatan teknis..." class="w-full bg-slate-900 border border-slate-700 text-slate-100 text-sm rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 transition placeholder:text-slate-600" required></textarea>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white text-xs font-mono font-semibold px-6 py-2.5 rounded-lg transition shadow-md">
                        Kirimkan Catatan &rarr;
                    </button>
                </form>
            </div>

            <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between text-xs font-mono text-slate-400">
                <span>Controller: <code class="text-blue-400">MainController@contact</code></span>
                <span>View: <code class="text-emerald-400">contact.blade.php</code></span>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800 text-center py-6 text-xs font-mono text-slate-500 bg-slate-950">
        <p class="text-slate-400 font-semibold mb-1">Tugas Rutin 9 &bull; Setup Framework Laravel (MVC Pattern)</p>
        <p>&copy; 2026 M Daffa Dzakwan (NIM: 4251250015) &bull; Dosen: Adidtya Perdana, ST., M.KOM</p>
    </footer>
</body>

</html>
