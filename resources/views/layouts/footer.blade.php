<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<footer class="bg-gradient-to-r from-red-700 to-red-900" id="footer">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="flex flex-col items-center md:flex-row md:justify-between md:items-start">
            <!-- Logo and Social Media Section -->
            <div class="mb-6 md:mb-0 flex flex-col items-center md:mr-10 animate-logo">
                <a href="/" class="flex flex-col items-center">
                    <img src="img/logo.png" class="h-24 mr-4" alt="FlowBite Logo" />
                    <span class="self-center text-2xl text-white font-semibold whitespace-nowrap text-center">
                        Student and Faculty <br> Showcase Portal
                    </span>
                </a>
                <!-- Social Media Icons -->
                <div class="flex mt-4 space-x-4 justify-center">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/mediapolnep/" target="_blank" class="text-white">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/mediapolnep/" target="_blank" class="text-white">
                        <i class="fab fa-facebook text-lg"></i>
                    </a>
                    <!-- YouTube -->
                    <a href="https://youtube.com/@mediapolnep?si=Y4213sdiKacec3dt" target="_blank" class="text-white">
                        <i class="fab fa-youtube text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Content Section -->
            <div class="grid grid-cols-1 gap-8 sm:gap-10 mt-10 md:grid-cols-2 w-full">
                <!-- Section Tentang Kami -->
                <div class="flex flex-col items-center text-center md:ml-10 md:mt-1">
                    <h2 class="mb-4 text-lg font-semibold text-white uppercase animate-text">Tentang Kami</h2>
                    <p class="text-white font-medium text-sm animate-text">
                        Karya kita adalah portal showcase untuk mahasiswa dan dosen Teknik Informatika, 
                        yang bertujuan untuk memamerkan karya-karya inovatif dan kreatif
                    </p>
                </div>
        
                <!-- Section Alamat Kami -->
                <div class="flex flex-col items-center text-center md:mt-1">
                    <h2 class="mb-4 text-lg font-semibold text-white uppercase animate-text">Alamat Kami</h2>
                    <p class="text-white font-medium text-sm animate-text">
                        Politeknik Negeri Pontianak,<br>
                        Jl. Jenderal Ahmad Yani, Kec. Pontianak Tenggara<br>
                        Kota Pontianak, Kalimantan Barat 78124
                    </p>
                </div>
            </div>
        </div>

        <!-- Divider and Copyright -->
        <hr class="my-6 border-gray-200 mx-auto lg:my-8 w-full" />

        <div class="flex justify-center items-center">
            <span class="text-sm text-white text-center animate-text">© 2024 <a href="/" class="hover:underline">Karya Kita</a>. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>

<style>
    /* Keyframes for logo animation */
    @keyframes logo-fade-in {
        from {
            opacity: 0;
            transform: translateY(-20px); /* Move up */
        }
        to {
            opacity: 1;
            transform: translateY(0); /* Return to original position */
        }
    }

    /* Keyframes for text animation */
    @keyframes text-fade-in {
        from {
            opacity: 0;
            transform: translateY(20px); /* Move down */
        }
        to {
            opacity: 1;
            transform: translateY(0); /* Return to original position */
        }
    }

    /* Initially hidden */
    .animate-logo, .animate-text {
        opacity: 0; /* Start invisible */
        transition: opacity 0.5s ease; /* Smooth transition */
    }

    /* Delay for each text element */
    .animate-text:nth-child(1) { animation-delay: 0.2s; }
    .animate-text:nth-child(2) { animation-delay: 0.4s; }
    .animate-text:nth-child(3) { animation-delay: 0.6s; }
    .animate-text:nth-child(4) { animation-delay: 0.8s; }
    .animate-text:nth-child(5) { animation-delay: 1s; }
    .animate-text:nth-child(6) { animation-delay: 1.2s; }
</style>

<script>
    // Function to add animation classes when the footer is in view
    const footer = document.getElementById('footer');
    const animateTextElements = footer.querySelectorAll('.animate-text');
    const animateLogo = footer.querySelector('.animate-logo');

    const observerOptions = {
        root: null, // Use the viewport
        threshold: 0.1 // Trigger when at least 10% of the footer is visible
    };

    const observerCallback = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add animation classes when the footer is visible
                animateTextElements.forEach(el => {
                    el.style.animation = `text-fade-in 0.6s ease forwards`;
                    el.style.opacity = '1';
                });

                animateLogo.style.animation = `logo-fade-in 0.8s ease forwards`;
                animateLogo.style.opacity = '1';

                // Stop observing after the animation is triggered
                observer.unobserve(footer);
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);
    observer.observe(footer);
</script>
