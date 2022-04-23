<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-left: 25px;">
    <h3 class="m-1" style="color:blue">BELANJA ONLINE</h3>
    <hr>
<div class="container-fuild d-flex">
    <form class="container mt-4 m-2 mb-2" method="POST" action="form_belanja.php">
        <div class="form-group row">
        <label for="name" class="col-2 col-form-label">Customer</label> 
        <div class="col-7">
            <input id="name" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
        </div>
        </div>
        <div class="form-group row">
            <label class="col-2">Pilih Produk</label> 
        <div class="col-7">
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV" required="required"> 
            <label for="radio_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
            <label for="radio_1" class="custom-control-label">KULKAS</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
            <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
        </div>
        </div>
        </div>
        <div class="form-group row">
        <label for="number" class="col-2 col-form-label">Jumlah</label> 
        <div class="col-4">
            <input id="number" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
        </div>
        </div> 
        <div class="form-group row">
        <div class="offset-2 col-7">
            <button name="submit" type="submit" class="btn btn-success">Kirim</button>
        </div>
        </div>
    </form>

    <div class="col-md-3 mt-4">
        <ul class="list-group"id="list">
            <li class="list-group-item active" aria-current="true">Daftar Harga</li>
            <li class="list-group-item">TV : 4.200.000</li>
            <li class="list-group-item">Kulkas : 3.100.000</li>
            <li class="list-group-item">Mesin Cuci : 3.800.000</li>
            <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
        </ul>
    </div>
</div>
<br>
<hr>
<?php 
    $proses = $_POST['submit'];
    $nama_customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah_produk = $_POST['jumlah'];

    if ($produk == "TV"){
        $total = $jumlah_produk * 4200000;
    } elseif($produk == "Kulkas"){
        $total = $jumlah_produk * 3100000;
    } elseif($produk == "Mesin Cuci"){
        $total = $jumlah_produk * 3800000;
    } else{
        "Konfirmasi Anda Salah";
    }

    echo "Nama Customer : $nama_customer";
    echo "<br/>Produk Yang Dipilih : $produk";
    echo "<br/>Jumlah Produk : $jumlah_produk";
    echo "<br/>Total Harga : Rp.". number_format($total). "-";
?>

<footer class="footer mt-5 py-2 bg-light border-top shadow-sm">
    <div class="footer m-2">
        <span class="black">@2022 - Pemweb2 - Wahyudin_2TI06</span>
    </div>
</footer>

</body>
</html>