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

  <div class="row g-0">
    <div class="col-md-6">
      <br><br><br><br>
        <?php
        if (array_key_exists("honda", $_POST)) {
            echo '<img src="civic.png" class="img-fluid rounded-start" alt="...">';
        } elseif (array_key_exists("Toyota", $_POST)) {
            echo '<img src="hiace.png" class="img-fluid rounded-start" alt="...">';
        } elseif (array_key_exists("innova", $_POST)) {
            echo '<img src="innova.png" class="img-fluid rounded-start" alt="...">';
        } else {
            echo '<img src="civic.png" class="img-fluid rounded-start" alt="...">';
        }
        ?>
   </div>

    <div class="col-md-6">
    <div class="container">
    <h4 class="text-center">Rent your car now!</h4>
    <form action="Rizky_mybooking.php" method="POST">
        <div class= "mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder=" ">
        </div>
        <div class= "mb-3">
            <label for="date" class="form-label">Tanggal book</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="dd/mm/yyyy">
        </div>
        <div class= "mb-3">
            <label for="time" class="form-label">Start Time</label>
            <input type="time" class="form-control" id="time" name="time">
        </div>
        <div class= "mb-3">
            <label for="duration" class="form-label">Durasi (Hari)</label>
            <input type="number" class="form-control" id="duration" name="duration" placeholder=" ">
        </div>
        <div class= "mb-3">
                <label for="car" class="form-label">tipe mobil</label>
                <select class="form-control" name="car" id="">
                    <option selected disabled>Pick Car Type</option>
                    <option value=" civic">civic</option>
                    <option value="Hiace">Hiace</option>
                    <option value="innova">innova</option>
                </select>
        </div>
        <div class= "mb-3">
            <label for="Number" class="form-label">Nomor hp</label>
            <input type="text" class="form-control" id="Number" name="Number" placeholder=" ">
        </div>

        <div class="mb-3">
        <label for="Name" class="form-label">Add Service(s)</label>
        <br>
            <input type="checkbox" id="health" name="health" value="Bike">
            <label for="vehicle1"> Health Protocol /Rp25.000</label><br>
            <input type="checkbox" id="driver" name="driver" value="Car">
            <label for="vehicle2"> Driver / Rp.100.000</label><br>
            <input type="checkbox" id="full" name="full" value="Boat">
            <label for="vehicle3"> Fuel filled / 250.000</label><br><br>
    </form>
    <div class="mb-3">
        <button type="submit" class="btn btn-success btn btn-primary btn-lg btn-block" href="Rizky_mybooking.php" height>Book</button>
</div>

       
        </form>
        <br>
        <br>
    </div>
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
</html>