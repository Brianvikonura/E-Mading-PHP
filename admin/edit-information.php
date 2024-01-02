  <?php
    include 'sidebar.php';

    // Function to check user ID that is logged in
    function getLoggedInUserId() {
      if (isset($_SESSION['id_users'])) {
          return $_SESSION['id_users'];
      }
      return true;
    }
  ?>

  <?php
      if (isset($_GET['id_artikel'])) {
          $id_artikel = $_GET['id_artikel'];

          $artikel = mysqli_query($conn, "SELECT * FROM tb_artikel WHERE id_artikel = '$id_artikel'");

          if(mysqli_num_rows($artikel) == 0) {
              echo "<script>window.location='index.php'</script>";
          }

          $p = mysqli_fetch_object($artikel);
      } else {
          echo "ID Artikel tidak ditemukan";
      }
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
                </div>
            </div>
        </section>

        <!-- Edit information section -->
        <section>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="space-y-12">
                  <div class="border-b border-gray-900/10 pb-12">
                      <div class="sm:col-span-4">
                        <label for="judul_artikel" class="block text-sm font-medium leading-6 text-gray-900">Information Title</label>
                        <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                            <input type="text" name="judul_artikel" value="<?= $p->judul_artikel ?>" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Information Title">
                          </div>
                        </div>
                      </div>
              
                      <div class="col-span-full mt-6">
                        <label for="isi_artikel" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                          <textarea id="description" name="isi_artikel" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $p->isi_artikel ?></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Write an information.</p>
                      </div>
              
                      <div class="col-span-full mt-6">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                          <div class="text-center">
                            <img src="../uploads/artikel/<?= $p->header ?>" alt="">
                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                              <label class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span>Upload a file</span>
                                <input type="hidden" name="header_lama" value="<?= $p->header ?>">
                                <input name="header_baru" type="file" class="sr-only">
                              </label>
                              <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                          </div>
                        </div>
                      </div>
                    
                      <div class="sm:col-span-4 mt-6">
                        <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                        <div class="mt-2">
                          <div class="">                            
                            <label>
                                <input type="radio" name="status" value="draft"> Add to Draft
                            </label>
                            <label>
                                <input type="radio" name="status" value="publish" class="ml-3"> Publish
                            </label>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
              
                  <div class="mt-6 flex items-center justify-end gap-x-6">
                      <button type="button" class="text-sm font-semibold leading-6 text-gray-900" onclick="window.location.href='index.php'">Back</button>
                      <input type="submit" value="Save Changes" name="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                  </div>

              </form>

              <?php
              
              if(isset($_POST['submit'])) {
                  $status = isset($_POST['status']) ? $_POST['status'] : 'draft';
                          
                  $today = date("d-m-Y");
                  $time = date("H-i-s");
                  $currdate = date('Y-m-d H:i:s');

                  $id_users = getLoggedInUserId();

                  if ($id_users !== null) {                    
                  $judul_artikel = addslashes(ucwords($_POST['judul_artikel']));
                  $isi_artikel = addslashes($_POST['isi_artikel']);

                  if($_FILES['header_baru']['name'] != '') {
                  $filename = $_FILES['header_baru']['name'];
                  $tmpname = $_FILES['header_baru']['tmp_name'];
                  $filesize = $_FILES['header_baru']['size'];
      
                  $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                  $rename = 'artikel'.'_'.''.$today.'_'.$time.'.'.$formatfile;
          
                  $allowedtype = array('png', 'jpg', 'jpeg', 'gif');

                  if(!in_array($formatfile, $allowedtype)) {
                    echo '<div class="mt-6 bg-red-500 text-white p-4 rounded-md">File Formats are Not Allowed</div>';
                  } elseif($filesize > 10000000) {
                    echo '<div class="mt-6 bg-red-500 text-white p-4 rounded-md">File Size Cannot Be More Than 10 MB</div>';
                  } else {
                    if (file_exists("../uploads/artikel/".$_POST['header_lama'])) {
                      unlink("../uploads/artikel/".$_POST['header_lama']);
                    }
                    
                    move_uploaded_file($tmpname, "../uploads/artikel/".$rename);
                  }
                
                } else {
                  $rename = $_POST['header_lama'];
                }
                
                $update = "UPDATE tb_artikel (header, judul_artikel, isi_artikel, status, id_users, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NULL)";
                $stmt = mysqli_prepare($conn, $query);

                mysqli_stmt_bind_param($stmt, "ssssi", $rename, $judul_artikel, $isi_artikel, $status, $id_users);

                $update = mysqli_stmt_execute($stmt);
                
                if ($update) {
                    echo '<div class="mt-6 bg-green-500 text-whiterounded-md">Saved Successfully</div>';
                } else {
                    echo '<div class="mt-6 bg-red-500 text-white p-4 rounded-md">Failed Save: ' . mysqli_error($conn) . '</div>';
                }

                mysqli_stmt_close($stmt);
              }
            } else {
              echo '<div class="mt-6 bg-red-500 text-white p-4 rounded-md">User ID is null</div>';
            }
            
            ?>

        </section>        
    </div>

    <?php
      include 'footer.php';
    ?>