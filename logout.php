<?php
session_start();
session_destroy();
?>
<script lang="javascript">
    alert("Anda Telah Logout");
    document.location = "home.php";
</script>