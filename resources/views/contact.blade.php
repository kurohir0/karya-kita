@extends('layouts.front')

@section('title')
    <title>Kontak</title>
@endsection

@section('style')
    <style>
        body {
            background-color: white;
            min-height: 100vh;
            min-width: auto;
        }
        .contact-container {
            display: flex;
            justify-content: space-between;
            max-width: 1000px;
            margin: auto;
            padding: 20px;
        }
        .contact-card {
            width: 45%;
            text-align: center;
            justify-items: center;
            margin-bottom: 20px;
            padding: 20px;
        }
        .contact-logo {
            height: 150px;
            width: auto;
            object-fit: contain;
            justify-content: center;
            margin-top: 25px;
            margin-bottom: 20px;
        }
        .contact-icons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        .contact-icons a {
            color: #333;
            font-size: 24px;
            text-decoration: none;
        }
        .contact-info {
            text-align: left;
            font-size: 14px;
        }
        .contact-info i {
            color: #e60000;
            margin-right: 10px;
        }
        .contact-form-container {
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
            overflow-y: auto;
            max-height: 80vh;
            padding: 20px;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        .contact-form-container .form-control {
            border-radius: 6px;
            border: 1px solid #ced4da;
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
        }
        .contact-form-container .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 5px rgba(128, 189, 255, 0.5);
            outline: none;
        }
        .form-label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
            color: #333;
            font-size: 15 px;
            font-weight: 500;
        }
        .animate-fade-in {
            opacity: 1; /* Awalnya tidak terlihat */
            transform: translateY(10px); /* Geser sedikit ke bawah */
            transition: opacity 0.5s ease, transform 0.5s ease; /* Transisi untuk efek muncul */
        }
        .animate-fade-in.visible {
            opacity: 1; /* Menjadi terlihat ketika kelas visible ditambahkan */
            transform: translateY(0); /* Kembali ke posisi semula */
        }
    </style>
@endsection

@section('content')


<div class="mx-auto px-20 py-10 sm:px-20">
<h2 class="text-4xl font-bold tracking-tight text-center text-gray-900 border-b pb-4 border-gray-700">Hubungi Kami</h2>
</div>
<!-- Form Kontak -->
<div class="contact-form-container mt-10">

    <form action="{{ route('kontak.kirim') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email" class="form-label animate-fade-in">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nama" class="form-label animate-fade-in">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pesan" class="form-label animate-fade-in">Pesan/Saran</label>
            <textarea name="pesan" id="pesan" class="form-control" rows="5" required></textarea>
        </div>

        <div class="flex justify-center mt-4">
            <button type="submit" class="px-9 py-2 font-semibold text-white bg-red-600 rounded-md hover:bg-red-700">Kirim</button>
        </div>
    </form>
</div>

<div class="contact-container">
    <!-- Bagian Jurusan Teknik Elektro -->
    <div class="contact-card">
        <img src="img/elektro.png" alt="Logo Elektro" class="contact-logo">
        <div class="contact-icons">
            <a href="https://www.instagram.com/elektro.polnep/"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com/@jurusanteknikelektropolnep308?si=lH-uxCCk9AcWD2YH"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="contact-info">
            <p class="hover:text-[#ff0000]"><i class="fas fa-map-marker-alt"></i> Jl. Jend. Ahmad Yani, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78124</p>
            <p class="hover:text-[#ff0000]"><i class="fas fa-phone"></i> +62 561 736180</p>
            <p class="hover:text-[#ff0000]"><i class="fas fa-fax"></i> +62 561 740143</p>
            <p class="hover:text-[#ff0000]"><i class="fas fa-envelope"></i> jur.elektro.polnep@gmail.com</p>
        </div>
    </div>

    <!-- Bagian POLNEP -->
    <div class="contact-card">
        <img src="img/logotop.png" alt="Logo POLNEP" class="contact-logo">
        <div class="contact-icons">
            <a href="https://www.facebook.com/mediapolnep/"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/mediapolnep/"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com/@mediapolnep?si=Y4213sdiKacec3dt"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="contact-info">
            <p class="hover:text-[#ff0000]"><i class="fas fa-map-marker-alt"></i> Jl. Jend. Ahmad Yani, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78124</p>
            <p class="hover:text-[#ff0000]"><i class="fas fa-phone"></i> +62 561 736180</p>
            <p class="hover:text-[#ff0000]"><i class="fas fa-fax"></i> +62 561 740143</p>
            <p class="hover:text-[#ff0000]"><i class="fas fa-envelope"></i> kampus@polnep.ac.id</p>
        </div>
    </div>
</div>
@endsection

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll('.animate-fade-in');
            elements.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.add('visible'); // Menambahkan kelas visible
                }, index * 200); // Delay bertahap untuk setiap elemen
            });
        });
    </script>

