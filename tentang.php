    <!-- Website Logo -->
    <link rel="shortcut icon" href="./assets/images/logo.png">

<body class="bg-[#F1F4F5] font-poppins">

    <?php
        include 'header.php';
    ?>

    <!-- Hero Section -->
    <section class="hero max-w-7xl mx-auto py-12 px-5">
        <div class="flex flex-col gap-y-10 md:flex-row items-center justify-between">
            <div class="flex flex-row items-center">
                <img src="./assets/images/Sambutan.png" class="h-[390px] lg:h-[550px]" alt="">
            </div>
            <div class="flex flex-col gap-y-10">
                <div class="flex gap-y-2 flex-col">
                    <h1 class="text-indigo-950 text-4xl lg:text-[65px] leading-none font-bold">
                        SAMBUTAN REKTOR
                    </h1>
                    <p class="text-base leading-loose text-gray-500">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br class="md:block hidden">
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <br class="md:block hidden">
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis <br class="md:block hidden">
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla <br class="md:block hidden">
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br class="md:block hidden">
                        deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="showcases mx-auto py-12 max-w-7xl mb-12">
        <div class="flex flex-col gap-y-8">
            <div class="flex gap-y-2 flex-col text-center">
                <h1 class="text-indigo-950 font-bold text-4xl lg:text-5xl mb-4">
                   Apa itu E-Mading JeWePe
                </h1>
                <p class="text-base leading-loose text-gray-500">
                    E-Mading JeWePe adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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