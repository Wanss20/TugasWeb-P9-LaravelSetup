<?php

namespace Tests\Feature;

use Tests\TestCase;

class RequirementTest extends TestCase
{
    /**
     * Requirement 4: Rute utama / mengembalikan respon 200 OK dan merender view home
     */
    public function test_requirement_4_rute_utama_mengembalikan_respon_200(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('home');
        $response->assertViewHas('data');
    }

    /**
     * Requirement 4: Rute /about mengembalikan respon 200 OK dan merender view about
     */
    public function test_requirement_4_rute_about_mengembalikan_respon_200(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertViewIs('about');
        $response->assertViewHas('info');
    }

    /**
     * Requirement 4: Rute /contact mengembalikan respon 200 OK dan merender view contact
     */
    public function test_requirement_4_rute_contact_mengembalikan_respon_200(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertViewIs('contact');
        $response->assertViewHas('kontak');
    }

    /**
     * Requirement 4: Rute /welcome mengembalikan respon 200 OK dan merender view welcome
     */
    public function test_requirement_4_rute_welcome_mengembalikan_respon_200(): void
    {
        $response = $this->get('/welcome');

        $response->assertStatus(200);
        $response->assertViewIs('welcome');
    }

    /**
     * Requirement 5: Rute / merender data array dinamis
     */
    public function test_requirement_5_rute_home_menampilkan_data_dinamis(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Core Inventory Management System');
        $response->assertSee('Pemasok &amp; Supplier Global', false);
    }

    /**
     * Requirement 5: Rute /about merender data array dinamis
     */
    public function test_requirement_5_rute_about_menampilkan_data_dinamis(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertSee('M Daffa Dzakwan');
    }

    /**
     * Requirement 5: Rute /contact merender data array dinamis
     */
    public function test_requirement_5_rute_contact_menampilkan_data_dinamis(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('daffa.dzakwan@gmail.com');
    }

    /**
     * Bonus 2: Menguji route parameter /hello/{nama}
     */
    public function test_bonus_2_rute_parameter_hello_nama(): void
    {
        $namaList = ['Daffa', 'Adidtya', 'Operator'];

        foreach ($namaList as $nama) {
            $response = $this->get("/hello/{$nama}");

            $response->assertStatus(200);
            $response->assertViewIs('hello');
            $response->assertViewHas('nama', $nama);
            $response->assertSee("Selamat Datang, Operator");
            $response->assertSee($nama);
        }
    }
}
