<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$con = mysqli_connect('localhost', 'root', '', 'car_service');
// $mysql_connect('localhost','root','');
// mysql_select_db('informatika');



if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $sql = "INSERT INTO user(nama, username, password, status) VALUES('$nama', '$username', '$password', '$status')";
    $query = mysqli_query($con, $sql);
    // $query = mysql_query($sql);

    if ($nama == '') {
        echo "<br>Nama tidak boleh kosong";
    } elseif ($username == '') {
        echo "<br>Username tidak boleh kosong, diisi dulu";
    } elseif ($password == '') {
        echo "<br>Password tidak boleh kosong, diisi dulu";
    } else {
?>
        <script>
            alert('Selamat Akun Telah Dibuat');
            document.location = 'login.php'
        </script>

<?php
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-image: url('https://vinsautogroup.com.sg/wp-content/uploads/2021/07/002-VAuG-0014-Z7-scaled.jpg');
            background-size: cover;

        }
    </style>
</head>

<body>
    <div class="container bg-slate-200 rounded p-5 mx-auto my-auto" style="width: 500px; margin-top: 150px;">
        <h1 class="text-5xl text-center text-slate-800 font-bold mt-5 mb-10">Register</h1>
        <form action="register.php" method="post">

            <div class="mb-3">
                <label class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="nama" placeholder="Nama">

            </div>
            <div class="mb-3">
                <label class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                <input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="username" placeholder="Username">
            </div>
            <div class="mb-3">
                <label class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="password" placeholder="Password">
            </div>
            <div class="mb-3">
                <label class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                <input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="status" placeholder="Status" value="Administrator">
            </div>
            <!-- Submit button -->
            <div class="text-center">
                <button type="submit" name="submit" class="p-3 mb-6 font-semibold bg-slate-800 text-slate-200 hover:text-slate-200 duration-500 hover:bg-slate-600  rounded-md">Submit</button>
            </div>

        </form>
        <!-- Register buttons -->
        <div class="text-center mb-3">
            <p class="text-large text-slate-800">Already have account? <a href="login.php" class="text-slate-800 font-bold">Login</a></p>
        </div>
    </div>
</body>

</html>