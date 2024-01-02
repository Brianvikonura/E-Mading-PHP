<?php
    include 'sidebar.php';
?>
    <!-- Main Content -->
    <div class="lg:pr-[70px] py-[50px] lg:ml-[320px] xl:ml-[365px] px-4 lg:pl-0">
        <!-- Header Section -->
        <section class="flex flex-col flex-wrap justify-between gap-6 md:items-center md:flex-row">
            <div class="flex items-center justify-between gap-4">
                <a href="#" id="toggleOpenSidebar" class="lg:hidden">
                    <svg class="w-6 h-6 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7">
                        </path>
                    </svg>
                </a>
                <div class="text-[32px] font-semibold text-dark">
                    Manage Information
                </div>
            </div>
        </section>

        <!-- Top Section -->
        <section class="pt-[50px]">
            <div class="mb-[30px]">
                <div class="flex flex-col justify-between gap-6 sm:items-center sm:flex-row">
                    <div>
                        <div class="text-xl font-medium text-dark">
                            E-Mading
                        </div>
                        <p class="text-grey">Information at E-Mading JeWePe</p>
                    </div>
                    <a href="add-information.php" class="btn btn-primary">Add Information</a>
                </div>
            </div>
        </section>

        <!-- Untuk menampilkan edit success pada saat selesai mengedit informasi -->
        <?php
            if(isset($_GET['success'])) {
                echo "<div class='bg-green-500 text-white p-4 rounded-md mb-4'>".$_GET['success']."</div>";
            }
        ?>

        <section class="table pt-[50px]">
            <table class="table-auto w-full bg-white border border-gray-300"> 
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Title</th>
                        <th class="py-2 px-4 border-b">Description</th>
                        <th class="py-2 px-4 border-b">Images</th>
                        <th class="py-2 px-4 border-b">Status</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $no = 1;

                        $where = " WHERE 1=1 ";
                        if(isset($_GET['key'])) {
                            $where .= " AND judul_artikel LIKE '%" .addslashes($_GET['key'])."%' ";
                        }

                        $artikel = mysqli_query($conn, "SELECT * FROM tb_artikel $where ORDER BY id_artikel DESC");
                        if(mysqli_num_rows($artikel) > 0) {
                            while($p = mysqli_fetch_array($artikel)) {
                    ?>

                    <tr>
                        <td class="py-2 px-4 border-b"><?= $no++ ?></td>
                        <td class="py-2 px-4 border-b"><?= $p ['judul_artikel'] ?></td>
                        <td class="py-2 px-4 border-b">
                        <?= $p ['isi_artikel'] ?>
                        </td>
                        <td class="py-2 px-4 border-b">
                            <img src="../uploads/artikel/<?= $p ['header'] ?>">
                        </td>
                        <td class="py-2 px-4 border-b">
                        <?php
                            if ($p['status'] === 'publish') {
                                echo 'Published';
                            } else {
                                echo 'Draft';
                            }
                        ?>
                        </td>
                        <td class="py-2 px-4 border-b items-center">
                            <a href="edit-information.php?id_artikel=<?= $p['id_artikel'] ?>" class="text-blue-500 hover:underline inline-flex items-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13" stroke="#FED54E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z" stroke="#FED54E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="hapus.php?id_artikel=<?= $p['id_artikel'] ?>" onclick="return confirm('Are you sure you want to permanently delete this data?')" title="Delete Data" class="text-blue-500 hover:underline inline-flex items-center">
                                <p class="text-black">|</p>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-1">
                                    <path d="M19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z" stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 9L15 15" stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 9L9 15" stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>

                    <?php }}else{ ?>
                                <tr>
                                    <td colspan="5">Data Not Found</td>
                                </tr>
                    <?php }?>

                </tbody>
            </table>
        </section>
        
    </div>

    <?php
        include 'footer.php';
    ?>