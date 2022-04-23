<?php 
require_once "class_account.php";
$bank1 = new Account("C343", "Ahmad", number_format("6000000",0,".","."));
$bank2 = new Account("C344", "Budi", number_format("5350000",0,".","."));
$bank3 = new Account("C345", "Kurniawan", number_format("2500000",0,".","."));

$ar_bank = [$bank1,$bank2,$bank3];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Bank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<table class="container table table-striped table-bordered">
  <h2 style="text-align: center;">Account Bank MR.WAY</h2>
  <hr/>
  <p class="container">Ahmad menabung Rp. 1000.000        
    <br> Budi tarik uang Rp. 2.500.000</p>
    <br>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">No. Akun</th>
      <th scope="col">Pemilik</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $nomor = 1;
      foreach ($ar_bank as $bank){
    ?>
    <tr>
        <td scope="row"><?=$nomor?></td>
        <td><?=$bank->no_akun?></td>
        <td><?=$bank->nama?></td>
        <td><?=$bank->saldo?></td>
    </tr>
    <?php 
      $nomor++;
    }  
    ?>
  </tbody>
</table>
</body>
</html>