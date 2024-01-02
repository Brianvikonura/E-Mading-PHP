<body class="bg-[#F1F4F5] font-poppins">

    <?php
        include 'header.php';
    ?>

    <!-- Description Section -->
    <section class="showcases mx-auto py-12 max-w-7xl">
        <div class="flex flex-col gap-y-8">
            <div class="flex gap-y-2 flex-col text-center">
                <h1 class="text-indigo-950 font-bold text-4xl lg:text-5xl mb-4">
                   Informasi Terkini
                </h1>
                <p class="text-base leading-loose text-gray-500 px-5">
                    Informasi yang terdapat di website E-Mading JeWePe adalah kumpulan informasi dari kampus seperti pendaftaran mahasiswa baru, administrasi, sertifikasi profesi, dan sebagainya.
                </p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content max-w-7xl mx-auto pb-12 px-5">
        <div class="grid lg:grid-cols-2 gap-x-4 gap-y-4 px-5 lg:px-0 lg:grid-cols-2 pb-7">
            <div class="my-card bg-white rounded-2xl overflow-hidden lg:w-[550px] lg:h-[320px] relative">
                <img src="./assets/images/informasi1.png" alt="" class="w-full h-full object-cover">
            </div>
            <div class="lg:ml-[-50px]">
                <h3 class="text-indigo-950 font-bold text-lg">
                    Pelaksanaan Pembekalan Sertifikasi Profesi
                </h3>
                <p class="text-indigo-950">Senin, 25 Desember 2023</p>
                <p class="flex mx-auto text-gray-500 mb-7">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 gap-x-4 gap-y-4 px-5 lg:px-0 lg:grid-cols-2 pb-7">
            <div class="my-card bg-white rounded-2xl overflow-hidden lg:w-[550px] lg:h-[320px] relative">
                <img src="./assets/images/informasi2.png" alt="" class="w-full h-full object-cover">
            </div>
            <div class="lg:ml-[-50px]">
                <h3 class="text-indigo-950 font-bold text-lg">
                    Jadwal Pembekalan Sertifikasi Profesi
                </h3>
                <p class="text-indigo-950">Senin, 18 Desember 2023</p>
                <p class="flex mx-auto text-gray-500 mb-7">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 gap-x-4 gap-y-4 px-5 lg:px-0 lg:grid-cols-2">
            <div class="my-card bg-white rounded-2xl overflow-hidden lg:w-[550px] lg:h-[320px] relative">
                <img src="./assets/images/informasi3.png" alt="" class="w-full h-full object-cover">
            </div>
            <div class="lg:ml-[-50px]">
                <h3 class="text-indigo-950 font-bold text-lg">
                    Pemilihan Skema Pembekalan Sertifikasi Profesi
                </h3>
                <p class="text-indigo-950">Senin, 11 Desember 2023</p>
                <p class="flex mx-auto text-gray-500 mb-7">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
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