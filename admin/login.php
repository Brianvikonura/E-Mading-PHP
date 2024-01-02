<?php
    include '../koneksi.php';

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Website Logo -->
    <link rel="shortcut icon" href="../assets/images/logo.png">

    <!-- CSS and Tailwind CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- TinyInt Editor -->
    <script src="https://cdn.tiny.cloud/1/tms6dcjlj54ndhsnhe7k3irmv5sod1jdojywhfkqwoutqvmj/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <title>Login Page</title>
</head>
<body>
    
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                E-Mading Sekolah Tinggi JeWePe
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>

                    <!-- Form Login -->
                    <?php
                    if(isset($_GET['msg'])) {
                        echo "<div class='bg-red-500 text-white p-4 rounded-md'>" .$_GET['msg'] ."</div>";
                    }
                    ?>

                    <form class="space-y-4 md:space-y-6" action="" method="POST">
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your username</label>
                            <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Registered Username" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <button type="submit" name="submit" value="Login" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign in</button>
                    </form>

                    <?php
                        if(isset($_POST['submit'])) {
                        $user = mysqli_real_escape_string($conn, $_POST['username']);
                        $pass = mysqli_real_escape_string($conn,$_POST['password']);
                        $cek = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '".$user."' ");
                        
                        if(mysqli_num_rows($cek) > 0) {
                        $d = mysqli_fetch_object($cek);
                        if(MD5($pass) == $d->password) {
                            $_SESSION['status_login'] = true;
                            $_SESSION['uid']          = $d->id_users;
                            $_SESSION['uname']        = $d->name;
                            
                            echo "<script>window.location = 'index.php'</script>";
                        } else {
                            echo '<div id="myAlert" class="bg-red-500 text-white p-4 rounded-md mb-4">
                                Wrong password
                                <button type="button" class="close" onclick="closeAlert()" aria-label="Close"></button>
                            </div>';
                        }
                        } else {
                            echo '<div id="myAlert" class="bg-red-500 text-white p-4 rounded-md mb-4">
                                Username not found
                                <button type="button" class="close" onclick="closeAlert()" aria-label="Close"></button>
                            </div>';
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
      </section>

</body>
</html>