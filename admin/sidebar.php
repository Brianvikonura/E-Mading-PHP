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

    <title>Dashboard E-Mading JeWePe</title>
</head>
<body>

<?php
    session_start();
    include '../koneksi.php';
    if(!isset($_SESSION['status_login'])) {
        echo "<script>window.location = 'login.php?msg=Harap Login Terlebih Dahulu'</script>";
    }
    date_default_timezone_set("Asia/Jakarta");
?>

    <!-- Sidebar -->
    <div class="hidden lg:block fixed lg:max-w-[295px] w-full overflow-y-auto h-full bg-white z-[999]" id="sidebarHRIS">
        <div class="px-6 py-[50px] gap-y-[50px] flex flex-col">
            <div class="flex items-center justify-between">
                <a href="#" class="flex justify-center">
                    <img src="./assets/images/logo.svg" alt="">
                </a>
                <a href="#" id="toggleCloseSidebar" class="lg:hidden">
                    <svg class="w-6 h-6 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="flex flex-col gap-4">
                <div class="text-sm text-grey">Daily Use</div>
                <a href="index.php" class="nav-link active">
                    <img src="../assets/svgs/ic-grid.svg" alt="">
                    Manage Information
                </a>
            </div>
            <div class="flex flex-col gap-4">
                <div class="text-sm text-grey">Others</div>
                <a href="logout.php" class="nav-link">
                    <img src="../assets/svgs/ic-signout.svg" alt="">
                    Logout
                </a>
            </div>
        </div>
    </div>