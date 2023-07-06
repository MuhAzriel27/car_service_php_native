<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'car_service');
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <div class="flex items-center p-5">
                        <div class="flex mx-6 text-xl font-semibold text-slate-200 rounded-lg items-center">
                            <i class="fas fa-user text-white px-3"></i>
                            <p><?php echo $_SESSION['nama']; ?></p>
                        </div>
                        <div class="items-center p-5">
                            <a href="logout.php" class="mx-6 font-semibold text-slate-200 border border-slate-200  hover:text-slate-800 duration-500 hover:bg-slate-200 p-3 rounded-lg"><i class="fa fa-right-from-bracket px-2"></i>LOGOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="container" class="h-fit shadow-lg m-10 pt-[28px] pb-12 bg-slate-200 mt-32">
            <div class="max-w-xl ml-24 pt-10  mb-5">
                <h1 class="font-bold text-4xl text-slate-800 mb-2 text-left">Daftar Reservasi</h1>
            </div>
            <div class="flex flex-col my-5 mx-32 p-5">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="border-collapse min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium">
                                    <tr>
                                        <th scope="col" class="px-6 py-4 border border-slate-600 bg-slate-800 text-slate-200 text-lg">ID</th>
                                        <th scope="col" class="px-6 py-4 border border-slate-600 bg-slate-800 text-slate-200 text-lg">Nama</th>
                                        <th scope="col" class="px-6 py-4 border border-slate-600 bg-slate-800 text-slate-200 text-lg">Alamat</th>
                                        <th scope="col" class="px-6 py-4 border border-slate-600 bg-slate-800 text-slate-200 text-lg">Telepon</th>
                                        <th scope="col" class="px-6 py-4 border border-slate-600 bg-slate-800 text-slate-200 text-lg">Jenis Layanan</th>
                                        <th scope="col" class="px-6 py-4 border border-slate-600 bg-slate-800 text-slate-200 text-lg">Tanggal</th>
                                        <th scope="col" class="px-6 py-4 border border-slate-600 bg-slate-800 text-slate-200 text-lg">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cari = "SELECT transaksi2.*, jenis_layanan.nama_layanan  FROM transaksi2 JOIN jenis_layanan ON transaksi2.id_layanan = jenis_layanan.id_layanan";
                                    $hasil_cari = mysqli_query($con, $cari);
                                    while ($data = mysqli_fetch_row($hasil_cari)) {
                                        echo "
                                    <tr>
                                        <td scope='col' class='px-6 py-4 border-slate-600 bg-slate-200 font-medium text-lg text-slate-800'>$data[0]</td>
                                        <td scope='col' class='px-6 py-4 border-slate-600 bg-slate-200 font-medium text-lg text-slate-800'>$data[1]</td>
                                        <td scope='col' class='px-6 py-4 border-slate-600 bg-slate-200 font-medium text-lg text-slate-800'>$data[2]</td>
                                        <td scope='col' class='px-6 py-4 border-slate-600 bg-slate-200 font-medium text-lg text-slate-800'>$data[3]</td>
                                        <td scope='col' class='px-6 py-4 border-slate-600 bg-slate-200 font-medium text-lg text-slate-800'>$data[6]</td>
                                        <td scope='col' class='px-6 py-4 border-slate-600 bg-slate-200 font-medium text-lg text-slate-800'>$data[5]</td>
                                        <td width='15%' align='start'>
                                            <button class='font-semibold text-slate-200 bg-slate-800 p-3 rounded-lg'><a href='update.php?id=$data[0]'><i class='fas fa-pen pr-3'></i>Edit</a></button>
                                            <button class='font-semibold text-slate-200 bg-slate-800 p-3 rounded-lg'><a href='delete.php?id=$data[0]' onclick='myConfirm()'><i class='fas fa-trash pr-3'></i>Hapus</a></button>
                                        </td>
                                    </tr>";
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-xl ml-24 mb-5">
                <a href="halaman_admin1.php" class="mx-6 items-center font-semibold bg-slate-800 text-slate-200 border border-slate-200  hover:text-slate-200 duration-500 hover:bg-slate-600 p-3 rounded-lg"><i class="fas fa-chevron-left px-2"></i>Kembali</a>
            </div>
            <script>
                function myConfirm() {
                    confirm("Apakah Anda yakin?");
                }
            </script>
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