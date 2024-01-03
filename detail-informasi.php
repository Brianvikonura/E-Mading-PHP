    <!-- Website Logo -->
    <link rel="shortcut icon" href="./assets/images/logo.png">

<body class="bg-[#F1F4F5] font-poppins">

    <?php
        include 'header.php';

        $id_artikel = $_GET['id'];

        // Menggunakan JOIN untuk menggabungkan data dari tb_artikel dan tb_users berdasarkan id_users
        $query_detail = "SELECT tb_artikel.*, tb_users.name 
                        FROM tb_artikel 
                        JOIN tb_users ON tb_artikel.id_users = tb_users.id_users
                        WHERE tb_artikel.id_artikel = $id_artikel";

        $result_detail = mysqli_query($conn, $query_detail);
        
        if ($result_detail && mysqli_num_rows($result_detail) > 0) {
            $row_detail = mysqli_fetch_assoc($result_detail);
            $imagePath_detail = "./uploads/artikel/{$row_detail['header']}";
    ?>

    <!-- Description Section -->
    <section class="showcases mx-auto py-12 max-w-7xl">
        <div class="flex flex-col gap-y-8">
            <div class="flex gap-y-2 flex-col text-center">
                <h1 class="text-indigo-950 font-bold text-4xl lg:text-5xl mb-4 px-5">
                    <?php echo $row_detail['judul_artikel']; ?>
                </h1>
            </div>
        </div>
    </section>

    <!-- Detail Information Section -->
    <section class="detail-information max-w-7xl mx-auto pb-12 px-5">
        <div class="grid grid-cols-3 gap-x-4 gap-y-4 px-5 lg:px-0 pb-7">
            <div class="flex flex-col col-span-3 md:col-span-2 gap-y-2">
                <p class="text-indigo-950"><?php echo date('l, d F Y', strtotime($row_detail['created_at'])); ?> by <?php echo $row_detail['name']; ?></p>
                <h3 class="text-indigo-950 font-bold text-lg">
                    <?php echo $row_detail['judul_artikel']; ?>
                </h3>
                <p class="flex mx-auto text-gray-500 mb-7 md:mt-[-35px]">
                    <?php echo $row_detail['isi_artikel']; ?>
                </p>
            </div>
            <div class="flex flex-col">
                <div class="my-card bg-white rounded-2xl overflow-hidden lg:h-[320px] relative">
                    <img src="<?php echo $imagePath_detail; ?>" alt="" class="hidden md:block md:w-full md:h-full md:object-cover">
                </div>
            </div>
        </div>
    </section>

    <?php
        } else {
            echo "<p>No Data Found</p>";
        }

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
