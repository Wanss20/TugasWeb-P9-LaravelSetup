<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi Operator: {{ $nama }} | M Daffa Dzakwan</title>
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
            <a href="/contact" class="px-3 py-1.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 transition">Kontak Ops</a>
            <a href="/hello/{{ $nama }}" class="px-3 py-1.5 rounded-lg bg-emerald-600/20 text-emerald-400 border border-emerald-500/30 transition flex items-center gap-1.5 font-mono text-xs">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                <span>Sesi: {{ $nama }}</span>
            </a>
            <a href="/welcome" class="text-slate-500 hover:text-slate-300 transition text-xs font-mono ml-2">
                Laravel Welcome &rarr;
            </a>
        </nav>
    </header>

    <!-- Main Content Area -->
    <main class="max-w-3xl mx-auto w-full px-6 py-12 space-y-8 flex-1 flex flex-col justify-center">
        <div class="bg-gradient-to-b from-slate-900 to-slate-900/90 border border-slate-800 rounded-3xl p-8 md:p-10 shadow-2xl relative overflow-hidden text-center space-y-6">
            <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-72 h-72 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-mono">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>Route Parameter Transmitted Successfully</span>
            </div>

            <div class="space-y-2">
                <h1 class="text-3xl md:text-4xl font-extrabold text-slate-100 tracking-tight">
                    Selamat Datang, Operator <span class="text-emerald-400 underline decoration-emerald-500/40">{{ $nama }}</span>!
                </h1>
                <p class="text-slate-400 text-sm max-w-lg mx-auto">
                    Parameter nama <code class="text-emerald-300 font-mono bg-emerald-950/60 px-2 py-0.5 rounded border border-emerald-900">{nama}</code> berhasil ditangkap oleh Route Laravel dan diteruskan ke Controller untuk dirender pada Blade view ini.
                </p>
            </div>

            <!-- Detail Payload Box -->
            <div class="bg-slate-950/80 border border-slate-800 rounded-2xl p-5 text-left font-mono text-xs space-y-2 max-w-md mx-auto">
                <div class="flex justify-between border-b border-slate-800/80 pb-2">
                    <span class="text-slate-500">Route URL:</span>
                    <span class="text-blue-400">/hello/{{ $nama }}</span>
                </div>
                <div class="flex justify-between border-b border-slate-800/80 pb-2">
                    <span class="text-slate-500">Nilai Parameter:</span>
                    <span class="text-emerald-400 font-semibold">{{ $nama }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Status Sesi:</span>
                    <span class="text-slate-300">Active & Authorized</span>
                </div>
            </div>

            <!-- Interaksi Ganti Parameter -->
            <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="/" class="w-full sm:w-auto px-6 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-mono font-medium transition">
                    &larr; Kembali ke Dashboard
                </a>
                <a href="/hello/Daffa" class="w-full sm:w-auto px-6 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-mono font-semibold transition shadow-lg shadow-blue-600/30">
                    Uji Sesi Daffa &rarr;
                </a>
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
