<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Console - Core Inventory System | M Daffa Dzakwan</title>
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
            <a href="/" class="px-3 py-1.5 rounded-lg bg-blue-600 text-white font-medium shadow-sm transition">Dashboard</a>
            <a href="/about" class="px-3 py-1.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 transition">Sistem Info</a>
            <a href="/contact" class="px-3 py-1.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 transition">Kontak Ops</a>
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
    <main class="max-w-5xl mx-auto w-full px-6 py-10 space-y-8 flex-1">
        <!-- Status Banner -->
        <div class="bg-gradient-to-b from-slate-900 to-slate-900/80 border border-slate-800 rounded-2xl p-8 shadow-2xl relative overflow-hidden">
            <div class="absolute -right-16 -top-16 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="flex flex-col md:flex-row justify-between items-start md:items-center border-b border-slate-800 pb-6 mb-6 gap-4">
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span class="text-xs uppercase font-mono tracking-widest text-blue-400">Tugas Rutin 9 &bull; Framework Laravel</span>
                    </div>
                    <h1 class="text-3xl font-extrabold text-slate-100 tracking-tight">{{ $data['nama_sistem'] }}</h1>
                    <p class="text-slate-400 text-sm font-mono mt-1 flex items-center gap-2">
                        <span>Node Identitas:</span>
                        <code class="text-blue-300 bg-blue-950/60 px-2 py-0.5 rounded border border-blue-900">{{ $data['kode_node'] }}</code>
                    </p>
                </div>
                <div class="flex flex-col items-end gap-1">
                    <span class="px-3 py-1.5 bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 text-xs font-mono rounded-full font-semibold flex items-center gap-2 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        STATUS: {{ $data['status'] }}
                    </span>
                    <span class="text-[11px] text-slate-500 font-mono">PHP 8.2 &bull; MySQL via PDO</span>
                </div>
            </div>

            <!-- Interaksi Dinamis: Form Uji Route Parameter -->
            <div class="mb-8 p-6 bg-slate-950/80 border border-slate-800/90 rounded-xl relative shadow-inner">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-xs uppercase font-mono tracking-wider text-blue-400 font-semibold flex items-center gap-2">
                        <span>⚡ Uji Fitur Bonus: Route Parameter Dinamis</span>
                        <code class="text-slate-400 text-[11px] lowercase bg-slate-900 px-2 py-0.5 rounded">/hello/{nama}</code>
                    </h3>
                    <span class="text-[10px] text-emerald-400 font-mono bg-emerald-950/40 px-2 py-0.5 rounded border border-emerald-800/40">Bonus 2</span>
                </div>
                <p class="text-xs text-slate-400 mb-4 leading-relaxed">
                    Ketik nama Anda, nama teman, atau nama dosen penguji untuk menguji transmisi parameter URL secara real-time ke view Blade:
                </p>
                <form onsubmit="event.preventDefault(); const val = document.getElementById('operatorName').value.trim(); if(val) window.location.href='/hello/'+encodeURIComponent(val);" class="flex flex-wrap sm:flex-nowrap gap-3">
                    <input type="text" id="operatorName" placeholder="Masukkan nama (misal: Daffa, Pak Adidtya, Operator)..."
                        class="bg-slate-900 border border-slate-700 text-slate-100 text-sm rounded-lg px-4 py-2.5 w-full focus:outline-none focus:border-blue-500 font-mono transition placeholder:text-slate-600"
                        required />
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-500 text-white text-xs font-mono font-semibold px-6 py-2.5 rounded-lg transition whitespace-nowrap shadow-lg shadow-blue-600/30 flex items-center gap-2">
                        <span>Buka Sesi</span>
                        <span>&rarr;</span>
                    </button>
                </form>
            </div>

            <!-- Data Array Dinamis dari Controller -->
            <div>
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xs uppercase tracking-wider text-slate-400 font-mono font-semibold">
                        Modul Operasional Terdeteksi (Data Array dari Controller)
                    </h2>
                    <span class="text-[10px] text-slate-500 font-mono">Passing via compact('data')</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach($data['modul'] as $m)
                        <div class="bg-slate-950/70 border border-slate-800/80 hover:border-blue-500/50 p-5 rounded-xl transition duration-200 group">
                            <div class="flex items-center justify-between mb-2">
                                <span class="w-2 h-2 rounded-full bg-blue-500 group-hover:scale-125 transition"></span>
                                <span class="text-[10px] font-mono text-slate-500">MOD_{{ $loop->iteration }}</span>
                            </div>
                            <p class="text-sm font-semibold text-slate-200 group-hover:text-blue-300 transition">{{ $m['nama'] }}</p>
                            <p class="text-xs font-mono text-blue-400 mt-3 bg-slate-900/90 px-3 py-1.5 rounded-lg inline-block border border-slate-800">
                                {{ $m['stok'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
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
