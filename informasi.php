    <!-- Website Logo -->
    <link rel="shortcut icon" href="./assets/images/logo.png">

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
        <?php
            $query = "SELECT * FROM tb_artikel WHERE status = 'publish' ORDER BY id_artikel DESC";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $imagePath = "./uploads/artikel/{$row['header']}";
        ?>
        <a href="detail-informasi.php?id=<?php echo $row['id_artikel']; ?>" class="block">
            <div class="grid lg:grid-cols-2 gap-x-4 gap-y-4 px-5 lg:px-0 lg:grid-cols-2 pb-7">
                <div class="my-card bg-white rounded-2xl overflow-hidden lg:w-[550px] lg:h-[320px] relative">
                    <img src="<?php echo $imagePath; ?>" alt="" class="w-full h-full object-cover">
                </div>
                <div class="lg:ml-[-50px]">
                    <h3 class="text-indigo-950 font-bold text-lg">
                        <?php echo $row['judul_artikel']; ?>
                    </h3>
                    <p class="text-indigo-950"><?php echo date('l, d F Y', strtotime($row['created_at'])); ?></p>
                    <p class="flex mx-auto text-gray-500 mb-7 mt-[-25px]">
                        <?php echo $row['isi_artikel']; ?>
                    </p>
                </div>
            </div>
        </a>
        <?php
            }
        ?>
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
</body>
