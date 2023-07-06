<?php
session_start();
// error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$con = mysqli_connect('localhost', 'root', '', 'car_service');
// $mysql_connect('localhost','root','');
// mysql_select_db('informatika');



if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $query = mysqli_query($con, $sql);
    // $query = mysql_query($sql);
    $row = mysqli_fetch_array($query);
    if ($row['username'] != "") {
        //berhasil login
        $_SESSION['username'] = $row['username'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['nama'] = $row['nama'];
?>
        <script language script='JavaScript'>
            <?php
            if ($row['status'] == "Administrator") {
            ?>
                alert('<?php echo $row['nama']; ?> Anda Login Sebagai <?php echo $row['status']; ?>');
                document.location = 'halaman_admin1.php'
            <?php
            } else if ($row['status'] == 'Member') {
            ?>
                alert('Anda Login Sebagai <?php echo $row['status']; ?>');
                document.location = 'halaman_user.php'
            <?php
            }
            ?>
        </script>
    <?php
    } else {
        //gagal login
    ?>
        <script language script='JavaScript'>
            // console.log('<div class="alert alert-danger" role="alert" style="margin-top:200px;">A simple danger alert—check it out!</div>');
            alert('Gagal Login');
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
    <title>Login</title>
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
        <h1 class="text-5xl text-center text-slate-800 font-bold mt-5 mb-10">Login</h1>
        <form action="login.php" method="post">

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900">Username Anda</label>
                <input type="text" id="password" name="username" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="username" required>
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900">Password Anda</label>
                <input type="password" id="password" name="password" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="password" required>
            </div>

            <!-- Submit button -->
            <div class="text-center">
                <button type="submit" name="submit" class="p-3 mb-6 font-semibold bg-slate-800 text-slate-200 hover:text-slate-200 duration-500 hover:bg-slate-600  rounded-md">Submit</button>
            </div>
            <!-- Register buttons -->
            <div class="text-center mb-6">
                <p class="text-large text-slate-800">Don't have account? <a href="register.php" class="text-slate-800 font-bold" style="text-decoration: none;">Register</a></p>
            </div>
        </form>
    </div>



</body>

</html>