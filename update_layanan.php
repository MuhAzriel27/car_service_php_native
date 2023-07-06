<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'car_service');
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT *  FROM jenis_layanan WHERE id_layanan='$id'");

$data = mysqli_fetch_row($result);

if (isset($_POST['update'])) {
    $id_layanan = $_POST['id_layanan'];
    $nama_layanan = $_POST['nama_layanan'];

    $sql = "update jenis_layanan set nama_layanan='$nama_layanan' where id_layanan='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Data updated Successfully";
        header("Location:coba_display.php");
    } else {
        echo "Failed!";
    }
}

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
            <h1 class="font-bold text-4xl text-slate-800 mb-2 text-left">Ubah Jenis Layanan</h1>
        </div>
        <div class="container w-2/3 my-5 mx-32 p-5">
            <form method="post" class="mb-20">
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900">ID Layanan</label>
                    <input type="text" id="id_layanan" name="id_layanan" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="id_layanan" required disabled value=<?php echo $data[0] ?>>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Nama Layanan</label>
                    <input type="text" id="nama_layanan" name="nama_layanan" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="nama_layanan" required value=<?php echo $data[1] ?>>
                </div>

                <div class="flex items-start mb-6">
                    <button type="submit" name="update" class="font-semibold bg-slate-800 text-slate-200 hover:text-slate-200 duration-500 hover:bg-slate-600 p-3 rounded-lg">Submit</button>
            </form>

        </div>
        <div class="max-w-xl ml-[-70px] mx-20">
            <a href="daftar_layanan.php" class="mx-6 font-semibold bg-slate-800 text-slate-200 hover:text-slate-200 duration-500 hover:bg-slate-600 p-3 rounded-lg">Kembali</a>
        </div>
    </section>


</body>

</html>