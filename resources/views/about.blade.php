@extends('layouts.front')

@section('title')
    <title>Tentang</title>
@endsection

@section('content')
<style>
    .card-wrapper {
        margin-left: 150px;
        margin-right: 150px;
        padding: 0 50px; /* Menambah padding di kanan dan kiri untuk margin yang lebih tebal */
        padding-bottom: 20px;
    }

    .card-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* Menampilkan 3 card per baris */
        gap: 30px; /* Jarak antar card */
        justify-items: center;
    }

    /* Responsif: Saat layar lebih kecil, atur grid menjadi 2 kolom */
    @media (max-width: 768px) {
        .card-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    /* Responsif: Saat layar sangat kecil, atur grid menjadi 1 kolom */
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
        width: 100%;
        max-width: 300px;
        height: 300px;
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
        margin: 0 auto;
    }

    .card-body {
        padding: 15px;
    }

    .card-title {
        font-size: 1.2em;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .card-description {
        font-size: 0.9em;
        color: #666;
    }
</style>
    

<div class="mx-auto px-5 py-10 sm:px-10">
    <h2 class="text-4xl font-bold tracking-tight text-center text-gray-900 border-b pb-4 border-gray-700 hover:text-[#ff0000]">Tentang Kami</h2>
</div>

<div class="card-wrapper mx-auto py-5">
    <div class="card-container">
        <!-- Card 1 -->
        <div class="card">
            <img src="{{ asset('img/logo.png') }}" alt="Foto 1">
            <div class="card-body">
                <h3 class="card-title">Dwi Ananda</h3>
                <p class="card-description">Bertugas sebagai Project Manager dan Back End Developer. Mengatur logika sistem, database dan desain awal sistem</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <img src="{{ asset('img/logo.png') }}" alt="Foto 2">
            <div class="card-body">
                <h3 class="card-title">Hilyatul Jannah</h3>
                <p class="card-description">Bertugas sebagai Front End Developer. Merancang tampilan sistem dan menerapkannya ke dalam sistem</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <img src="{{ asset('img/logo.png') }}" alt="Foto 3">
            <div class="card-body">
                <h3 class="card-title">Nurul Ersya Citra</h3>
                <p class="card-description">Bertugas untuk mendokumentasikan proyek. Menyusun SKPL dan mengatur UML</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="card">
            <img src="{{ asset('img/logo.png') }}" alt="Foto 4">
            <div class="card-body">
                <h3 class="card-title">Raihan Hikmal</h3>
                <p class="card-description">Bertugas untuk membuat sequence diagram itupun dengan paksaan</p>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="card">
            <img src="{{ asset('img/logo.png') }}" alt="Foto 5">
            <div class="card-body">
                <h3 class="card-title">Albert Enstein</h3>
                <p class="card-description">Bertugas untuk membuat activity diagram itupun salah</p>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="card">
            <img src="{{ asset('img/logo.png') }}" alt="Foto 6">
            <div class="card-body">
                <h3 class="card-title">Immanuel Barus</h3>
                <p class="card-description">Cuman numpang dan tidak ada kontribusi</p>
            </div>
        </div>
    </div>
</div>

@endsection
