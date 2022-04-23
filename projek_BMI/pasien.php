<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <form method="POST" action="BMI_pasien.php">
    <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-bed"></i>
          </div>
        </div> 
        <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukan Tempat Lahir Anda" type="text" class="form-control">
      </div>
    </div>
  </div> 
    <div class="form-group row">
    <label for="date" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-3">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="tanggalLahir" name="tanggalLahir" placeholder="Masukkan Tanggal Lahir Anda" type="date" class="form-control" required="required">
      </div>
    </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label> 
        <div class="col-8">
            <i class="fa fa-male"></i>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Pria"> 
            <label for="gender_0" class="custom-control-label">Pria</label>
        </div>
        <i class="fa fa-female"></i>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Wanita"> 
            <label for="gender_1" class="custom-control-label">Wanita</label>
        </div>
        </div>
    </div>
    <div class="form-group row">
    <label for="weight" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="weight" name="weight" placeholder="Masukan Berat Badan Anda" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="weight" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-street-view"></i>
          </div>
        </div> 
        <input id="weight" name="height" placeholder="Masukan Tinggi Badan Anda" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Masukan Email Anda" type="text" class="form-control">
      </div>
    </div>
  </div>  
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Hitung</button>
        </div>
    </div>
    </form>
</body>
</html>