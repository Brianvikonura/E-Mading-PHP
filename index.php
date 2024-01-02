<body class="bg-[#F1F4F5] font-poppins">

    <?php
        include 'header.php';
    ?>

    <!-- Hero Section -->
    <section class="hero max-w-7xl mx-auto py-12 px-5">
        <div class="flex flex-col gap-y-10 md:flex-row items-center justify-between">
            <div class="flex flex-col gap-y-10">
                <div class="flex gap-y-2 flex-col">
                    <h1 class="text-indigo-950 text-4xl lg:text-[70px] leading-none font-bold">
                        E-Mading <br class="md:block hidden">
                        Sekolah Tinggi <br class="md:block hidden">
                        JeWePe
                    </h1>
                    <p class="text-base leading-loose text-gray-500">
                        Mading Digital atau biasa disebut dengan E-Mading merupakan sebuah inovasi <br class="md:block hidden">
                        dari majalah dinding (Mading) berbasis platform digital yang bertujuan Sebagai <br class="md:block hidden">
                        sarana informasi, media hiburan, serta meningkatkan kreativitas penulis dan <br class="md:block hidden">
                        pembaca terutama di era digital.
                    </p>
                </div>
            </div>
            <div class="flex flex-row items-center">
                <img src="./assets/images/hero.png" class="h-[390px] lg:h-[550px]" alt="">
            </div>
        </div>
    </section>

    <!-- New Information Section -->
    <section class="features max-w-7xl mx-auto py-12">
        <h3 class="text-indigo-950 font-bold text-4xl lg:text-5xl text-center mb-7">
            Informasi Terbaru
        </h3>
        <p class="flex mx-auto text-gray-500 mb-7 px-20">
            Pantau terus website E-Mading Sekolah Tinggi JeWePe untuk mendapatkan informasi terbaru.
        </p>
        <div class="grid grid-cols-2 gap-x-4 gap-y-4 px-5 lg:px-0 lg:grid-cols-2 lg:px-20">
            <div class="my-card bg-white rounded-2xl overflow-hidden lg:w-[550px] lg:h-[320px] relative">
                <img src="./assets/images/informasi1.png" alt="" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex flex-col justify-end p-4">
                    <p class="text-white">Senin, 25 Desember 2023</p>
                    <p class="text-xl font-semibold text-white mb-2">Pelaksanaan Pembekalan Sertifikasi Profesi</p>
                </div>
            </div>
            <div class="my-card bg-white rounded-2xl overflow-hidden lg:w-[550px] lg:h-[320px] relative">
                <img src="./assets/images/informasi2.png" alt="" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex flex-col justify-end p-4">
                    <p class="text-white">Senin, 18 Desember 2023</p>
                    <p class="text-xl font-semibold text-white mb-2">Jadwal Pembekalan Sertifikasi Profesi</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row justify-center gap-x-3 gap-y-3 lg:gap-y-0 mt-7 px-5" id="navLinks">
            <a href="informasi.php" class="text-base bg-[#17344E] text-white py-3 rounded-full font-semibold px-8">Lihat Informasi Lebih Lanjut</a>
        </div>
    </section>

    <?php
        include 'footer.php';
    ?>
    
    <!-- Responsive Navigation Script -->
    <script>
        const menuButton = document.getElementById('menuButton');
        const navLinks = document.getElementById('navLinks');
    
        menuButton.addEventListener('click', () => {
            navLinks.classList.toggle('hidden');
        });
    </script>