<!DOCTYPE html>
<html>
<head>
  <style>
    .navbg{
      background-color: black;
    }
  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
    <title> Modul 2</title>
</head>

<body>
<ul class="nav justify-content-center navbg">
  <li class="nav-item">
    <a class="nav-link" href="Rizky_home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Rizky_booking.php">Booking</a>
  </li>
</ul>
    
<?php
$name = $_POST['name'];
$date = $_POST['tanggal'];
$time = $_POST['time'];
$duration = $_POST['duration'];
$car = $_POST['car'];
$phone = $_POST['Number'];
?>


<div class="container">
        <h5 class="text-center">Terima kasih RIZKY_1202200038 for Reserving</h5>
        <p class="text-center">Please double check your reservation details</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Book Number</th>
                    <th scope="col">Nama</th>
                    <th scope="col">tanggal book</th>
                    <th scope="col">Date time</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo( "<br>");?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $date ?></td>
                    <td><?php echo $time ?></td>
                    <td><?php echo $car ?></td>
                    <td><?php echo $no ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mb-3">
        <div class="d-flex justify-content-center">
            <a href="Pendaftaran.php" class="btn btn-outline-primary w-50">Back</a>
    </div>
    <footer class="bg-light text-center text-lg-start">
            <div class="container">
                <BR>
                <br>
                <br>
                Created by RIZKY_1202200038
            </div>
        </footer>
</body>