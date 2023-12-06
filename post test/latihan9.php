<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Handling</title>
  <style>
    .error {color: #FF0000;}
  </style>
</head>
<body>
  <?php
    $nama=$nim=$alamat=$email=$nohp=$prodi="";
    $namaErr=$nimErr=$alamatErr=$emailErr=$nohpErr=$prodiErr="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["nama"])) {
        $namaErr = "Nama is required";
      } else {
        $nama = test_input($_POST["nama"]);
      }

      if (empty($_POST["NIM"])) {
        $nimErr = "NIM is required";
      } else {
        $nim = test_input($_POST["NIM"]);
      }
      
      if (empty($_POST["alamat"])) {
        $alamatErr = "Alamat is required";
      } else {
        $alamat = test_input($_POST["alamat"]);
      }
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }
      if (empty($_POST["Nohp"])) {
        $nohpErr = "No HP is required";
      } else {
        $nohp = test_input($_POST["Nohp"]);
      }
      if (empty($_POST["Prodi"])) {
        $prodiErr = "Prodi is required";
      } else {
        $prodi = test_input($_POST["Prodi"]);
      }
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
  ?>
  <h2>Form HTML dan Form Handling PHP</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    Nama : <input type="text" name="nama"><span class="error"> * <?php echo $namaErr;?></span><br><br>
    NIM : <input type="text" name="NIM"><span class="error"> * <?php echo $nimErr;?></span><br><br>
    Alamat : <input type="text" name="alamat"><span class="error"> * <?php echo $alamatErr;?></span><br><br>
    Email : <input type="text" name="email"><span class="error"> * <?php echo $emailErr;?></span><br><br>
    Nohp : <input type="text" name="Nohp"><span class="error"> * <?php echo $nohpErr;?></span><br><br>
    Prodi : <input type="text" name="Prodi"><span class="error"> * <?php echo $prodiErr;?></span><br><br>
    <button>Submit</button><br><br>
  </form>
      
  <?php
    echo "Nama : " . $nama . "<br>";
    echo "NIM : " . $nim . "<br>";
    echo "alamat : " . $alamat . "<br>";
    echo "email : " . $email . "<br>";
    echo "Nohp : " . $nohp . "<br>";
    echo "Prodi : " . $prodi . "<br>";
    
      ?>
      </body>
      </html>