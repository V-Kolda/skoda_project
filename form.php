<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shortcut icon" type="image/png" href="LOGO.png">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style-form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Car Shop</title>
</head>
<body>

<div id="left"></div>
<div id="right"></div>
<div id="top"></div>
<div id="bottom"></div>

<form>
  <h1>FORMULÁŘ PRO OBJEDNÁNÍ AUTA</h1>
  <br><br>
  <h1 style="text-align: left; font-size: 30px;">Buyer Details</h1>
  <br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label style="color: black;" for="inputEmail4">Jméno a Příjmení</label>
      <input style="background-color: white; color: black; border-color: black;" type="text" class="form-control" placeholder="Adam Nový" required>
    </div>
    <div class="form-group col-md-6">
      <label style="color: black;" for="inputPassword4">Email</label>
      <input style="background-color: white; color: black; border-color: black;" type="email" class="form-control" placeholder="adam.novy@seznam.cz" required>
    </div>
  </div>
  <div class="form-group">
    <label style="color: black;" for="inputAddress">Address</label>
    <input style="background-color: white; color: black; border-color: black;" type="text" class="form-control" placeholder="Nová Ulice 123" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label style="color: black;" for="inputCity">City</label>
      <input style="background-color: white; color: black; border-color: black;" type="text" class="form-control" placeholder="Plzeň" required>
    </div>
    <div class="form-group col-md-4">
      <label style="color: black;" for="inputState">State</label>
      <select style="background-color: white; color: black; border-color: black;" class="form-control">
        <option selected>Choose...</option>
        <option>Česká republika</option>
        <option>Německo</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label style="color: black;" for="inputZip">Zip</label>
      <input style="background-color: white; color: black; border-color: black;" type="number" class="form-control" min="0" placeholder="12345" required>
    </div>
  </div>
  <br>

  <h1 style="text-align: left; font-size: 30px;">Vehicle Details</h1>
  <br>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID: <?php echo $_GET['name'];?></th>
      <th scope="col">First</th>
      <th scope="col">Second</th>
      <th scope="col">Third</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="border: 3px solid white;" scope="row">Název</th>
      <td><?php $ID = $_GET['name'];if ($ID == "acuransx"){echo "Acura NSX";}elseif ($ID == "bmwm8"){echo "BMW M8";}elseif ($ID == "lamborghini"){echo "Lamborghini";}elseif ($ID == "mclaren"){echo "Mclaren";}elseif ($ID == "nissangtr"){echo "Nissan GT-R";}elseif ($ID == "skoda"){echo"Škoda";}?></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th style="border: 3px solid white;" scope="row">Model</th>
      <td><?php $ID = $_GET['name'];if ($ID == "acuransx"){echo "Type S Coupe 2022";}elseif ($ID == "bmwm8"){echo "Gran Coupe 2021";}elseif ($ID == "lamborghini"){echo "Aventador Ultimae Roadster 2022";}elseif ($ID == "mclaren"){echo "600LT Spider 2020";}elseif ($ID == "nissangtr"){echo "Track Edition 2021";}elseif ($ID == "skoda"){echo"Superb L&K";}?></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th style="border: 3px solid white;" scope="row">Cena</th>
      <td><?php $ID = $_GET['name'];if ($ID == "acuransx"){echo "$: 169.500";}elseif ($ID == "bmwm8"){echo "$: 130.105";}elseif ($ID == "lamborghini"){echo "$: 546.840";}elseif ($ID == "mclaren"){echo "$: 256.500";}elseif ($ID == "nissangtr"){echo "$: 145.540";}elseif ($ID == "skoda"){echo"$: 33.630";}?></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

  <br><br><br>
  <div class="form-group">
    <div style="display: block; margin-left: auto; margin-right: auto; width: 8%;">
      <a style="color: black;" href="">Přidat počet / auto</a>
    </div>
  </div>
  <button style="background-color: white; display: block; margin-left: auto; margin-right: auto; width: 10%; color: black; border-color: black; font-weight: bold;" type="submit" class="btn btn-primary">OBJEDNAT</button>
</form>

</body>
</html>