@extends('layouts.front')

@section('title')
    <title>Tentang</title>
@endsection

@section('content')
<style>
 .description-container {
        margin: 0;
        padding: 0;
        max-width: 100%;
        text-align: left;
        margin-left: 50px;
        margin-right: 50px;
        text-align: justify;
        margin-bottom: 70px;
    }

    .description-title {
        font-size: 1.8em;
        font-weight: bold;
        color: #cf0000;
        margin: 10px 0 15px 0; /* Mengatur margin atas lebih kecil dan bawah lebih besar */
    }
    .description-member {
        font-size: 2em;
        font-weight: bold;
        text-align: center;
        color: #333;
        margin: 10px 0 30px 0; /* Mengatur margin atas lebih kecil dan bawah lebih besar */
    }

    .description-text {
        font-size: 1em;
        color: #555;
        margin-bottom: 30px; /* Memberikan jarak lebih lebar di bagian bawah teks */
        line-height: 1.6;
    }

    .card-wrapper {
        margin-left: 50px;
        margin-right: 50px;
        padding: 0 30px;
        padding-bottom: 20px;
        margin-bottom: 50px;
    }

    .card-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        justify-items: center;
    }

    @media (max-width: 768px) {
        .card-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .card-container {
            grid-template-columns: 1fr;
        }
    }

    .card {
        background-color: #f9f9f9;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        height: 350px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .card img {
        width: 50%;
        height: auto;
        display: block;
        margin: 20px auto;
        border-radius: 100px;
    }

    .card-body {
        padding: 15px;
    }

    .card-title {
        font-size: 1.2em;
        font-weight: bold;
        margin-bottom: 8px;
        color: #cf0000;
    }

    .card-description {
        font-size: 0.9em;
        color: #666;
    }
    
</style>

<div class="mx-auto px-5 py-8 sm:px-10">
    <h2 class="text-4xl font-bold tracking-tight text-center text-gray-900 border-b pb-4 border-gray-700 hover:text-[#ff0000]">Tentang Kami</h2>
</div>

<div class="description-container">
    <h3 class="description-title">Apa itu Portal Galeri</h3>
    <p class="description-text">Portal Galeri adalah sebuah platform yang dirancang untuk menampilkan koleksi karya dan proyek mahasiswa dan dosen dalam bentuk digital. Melalui galeri ini, pengunjung dapat mengakses berbagai karya yang telah dikurasi dan dipamerkan dengan tampilan yang menarik dan interaktif. Portal ini juga memungkinkan pencipta untuk berbagi inspirasi dan karya mereka secara online.</p>
    
    <h3 class="description-title">Tujuan Galeri Showcase</h3>
    <p class="description-text">Galeri Showcase bertujuan untuk menjadi wadah bagi para kreator dalam memamerkan karya-karya terbaik mereka. Ini merupakan platform yang mendukung kreativitas dan inovasi, serta mempermudah pengunjung untuk menjelajahi karya dengan lebih mudah. Dengan adanya galeri ini, diharapkan dapat para pencipta dan pengunjung dapat saling mendukung, mengapresiasi serta adanya peluang kolaborasi.</p>
</div>

<h3 class="description-member">Anggota Kelompok</h3>
<div class="card-wrapper mx-auto py-5">
    <div class="card-container">
        <!-- Card 1 -->
        <div class="card">
            <img src="{{ asset('img/dwi.jpg') }}" alt="Foto 1">
            <div class="card-body">
                <h3 class="card-title">Dwi Ananda</h3>
                <p class="card-description">Bertugas sebagai Project Manager dan Back End Developer. Mengatur logika sistem, database dan desain awal sistem</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <img src="{{ asset('img/hilya.jpg') }}" alt="Foto 2">
            <div class="card-body">
                <h3 class="card-title">Hilyatul Jannah</h3>
                <p class="card-description">Bertugas sebagai Front End Developer. Merancang tampilan sistem dan menerapkannya ke dalam sistem</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <img src="{{ asset('img/ersya.jpg') }}" alt="Foto 3">
            <div class="card-body">
                <h3 class="card-title">Nurul Ersya Citra</h3>
                <p class="card-description">Bertugas untuk mendokumentasikan proyek. Menyusun SKPL dan mengatur UML</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="card">
            <img src="{{ asset('img/hann.jpg') }}" alt="Foto 4">
            <div class="card-body">
                <h3 class="card-title">Raihan Hikmal</h3>
                <p class="card-description">Bertugas untuk membuat sequence diagram itupun dengan paksaan</p>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="card">
            <img src="{{ asset('img/albert.jpg') }}" alt="Foto 5">
            <div class="card-body">
                <h3 class="card-title">Albert Enstein</h3>
                <p class="card-description">Bertugas untuk membuat activity diagram itupun salah</p>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="card">
            <img src="{{ asset('img/well.jpg') }}" alt="Foto 6">
            <div class="card-body">
                <h3 class="card-title">Immanuel Barus</h3>
                <p class="card-description">Tidak ada kontribusi</p>
            </div>
        </div>
    </div>
</div>

@endsection
