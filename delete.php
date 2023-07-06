<?php
$con = mysqli_connect('localhost', 'root', '', 'car_service');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM transaksi2 WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "
        <script>
            alert('Delete Success!');
        </script>";
        header("Location:display_reservasi.php");
    } else {
        echo "
        <script>
            alert('Failed!');
        </script>";
        header("Location : display_reservasi.php");
    }
}
