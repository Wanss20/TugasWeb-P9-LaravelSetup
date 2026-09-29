<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    /**
     * Halaman Dashboard Utama (Route '/')
     * Menampilkan data dinamis berupa array status sistem dan modul operasional
     */
    public function index()
    {
        $data = [
            'nama_sistem' => 'Core Inventory Management System',
            'kode_node' => 'NODE-DAFFA-MEDAN-01',
            'status' => 'Operational / All Systems Online',
            'modul' => [
                ['nama' => 'Pemasok & Supplier Global', 'stok' => '32 Rekanan Aktif'],
                ['nama' => 'Kategori Perangkat & Hardware', 'stok' => '240+ SKU Item'],
                ['nama' => 'Log Audit Transaksi Keluar/Masuk', 'stok' => 'Real-time Monitored']
            ]
        ];

        return view('home', compact('data'));
    }

    /**
     * Halaman Sistem Info (Route '/about')
     * Menampilkan data dinamis spesifikasi framework dan profil pengembang
     */
    public function about()
    {
        $info = [
            'arsitektur' => 'Laravel Framework Core Engine (Laravel 11)',
            'sistem_db' => 'MySQL Database Server via PDO Driver (daffa_inventory_db)',
            'pengembang' => 'M Daffa Dzakwan (NIM: 4251250015)',
            'visi' => 'Menyediakan platform tata kelola inventaris komputasi yang efisien, terstruktur, aman, dan presisi.'
        ];

        return view('about', compact('info'));
    }

    /**
     * Halaman Kontak Operasional (Route '/contact')
     * Menampilkan data dinamis kanal komunikasi dan support operasional
     */
    public function contact()
    {
        $kontak = [
            'divisi' => 'Technical Support & System Operation Center',
            'email' => 'daffa.dzakwan@gmail.com',
            'telepon' => '+62 812-3456-7890',
            'lokasi' => 'Medan, Sumatera Utara'
        ];

        return view('contact', compact('kontak'));
    }

    /**
     * Bonus: Route Parameter Dinamis (Route '/hello/{nama}')
     * Menangkap nama dari URL dan merendernya secara dinamis
     */
    public function hello($nama)
    {
        return view('hello', ['nama' => $nama]);
    }
}
