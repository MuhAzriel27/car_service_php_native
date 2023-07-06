<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'car_service');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-image: url('https://vinsautogroup.com.sg/wp-content/uploads/2021/07/002-VAuG-0014-Z7-scaled.jpg');
            background-size: cover;
        }
    </style>
</head>

<body>
    <div>
        <header id="header" class="bg-slate-800 shadow-md fixed top-0 left-0 w-full flex items-center z-10">
            <div class="container">
                <div class="flex items-center justify-between relative">
                    <div class="items-center p-5">
                        <a href="#"><img src="logo2.png" alt="" class="object-cover h-20"></a>
                    </div>
                    <div class="items-center p-5">
                        <a href="logout.php" class="mx-6 font-semibold text-slate-200 border border-slate-200  md:text-lg md:font-semibold hover:text-slate-800 duration-500 hover:bg-slate-200 p-3 rounded-lg"><i class="fa fa-right-from-bracket px-2"></i>LOGOUT</a>
                    </div>
                </div>
            </div>
        </header>

        <section id="container" class="h-fit shadow-lg m-10 pt-[28px] pb-12 bg-slate-200 mt-32">
            <div class="max-w-xl ml-24 pt-10  mb-16">
                <h1 class="font-bold text-4xl text-slate-800 mb-2 text-left">Selamat Datang,</h1>
                <h2 class="font-semibold text-gray-700 text-3xl mb-4 text-left"><?php echo $_SESSION['nama']; ?></h2>
            </div>
            <div class="mx-24 grid grid-cols-2 gap-4">
                <div><button class="w-full py-10 border rounded-xl font-semibold text-2xl text-slate-200 bg-slate-800 hover:bg-slate-700 hover:text-slate-200 duration-500"><a href="display_reservasi.php"><i class="fas fa-clipboard pr-5"></i>Daftar Reservasi</a></button></div>
                <div><button class="w-full py-10 border rounded-xl font-semibold text-2xl text-slate-200 bg-slate-800 hover:bg-slate-700 hover:text-slate-200 duration-500"><a href="daftar_layanan.php"><i class="fa-sharp fa-solid fa-gears pr-5"></i>Daftar Layanan</a></button></div>
                <div><button class="w-full py-10 border rounded-xl font-semibold text-2xl text-slate-200 bg-slate-800 hover:bg-slate-700 hover:text-slate-200 duration-500"><a href="crud.php"><i class="fas fa-plus pr-5"></i>Buat Reservasi</a></button></div>
            </div>
        </section>
    </div>

    <!-- Footer Start -->
    <footer id="footer" class="bg-slate-800 pt-6 pb-6">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-2 text-slate-200 font-medium text-center text-xs">
                    <h3 class="font-bold text-sm text-center text-slate-200 mb-1"> Muhamad Azriel Alifiano 2023</h3>
                    <p>l200200027@student.ums.ac.id</p>
                    <p>Surakarta, Central Java, Indonesia.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
</body>

</html>