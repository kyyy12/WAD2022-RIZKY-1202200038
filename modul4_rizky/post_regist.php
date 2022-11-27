<?php
    include('rizky_config2.php');
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $query = mysqli_query($connect, "INSERT INTO user_rizky(email,nama,no_hp,password)VALUES('$email','$nama','$no_hp','$password')");
    if($query){
        echo"<script>alert('Data telah ditembahkan')</script>";
        echo"<meta http-equiv='refresh' content='1 url=rizky_login.php'>";
    }
    else{
        echo"<script>alert('gagal ditembahkan')</script>";
        echo"<meta http-equiv='refresh' content='1 url=rizky_login.php'>";

    }

    ?>