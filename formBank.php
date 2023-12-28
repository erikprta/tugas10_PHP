<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .title{
        font-size: 50px;
        text-align: center;
        margin-bottom: 40px;
    }
    .form-group{
        margin-left: 655px;
    }
</style>
<body>
<form action="formBank.php" method="POST">
    <h1 class="title">Form Account Bank</h1>
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Nomor Rekening</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-credit-card-alt"></i>
          </div>
        </div> 
        <input id="text" name="nomor" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label">Nama Customer</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="text1" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label" for="text2">Saldo Awal</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-money"></i>
          </div>
        </div> 
        <input id="text2" name="saldo" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-3">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
    require_once 'accountBank.php';

    $ab1 = new AccountBank("010", 6250000, "Messi");
    $ab2 = new AccountBank("070", 8743500, "Ronaldo");

    if (isset($_POST['submit'])) {
        $nomor = $_POST['nomor'];
        $nama = $_POST['nama'];
        $saldo = $_POST['saldo'];

        $new_account = new AccountBank($nomor, $saldo, $nama);
        
        echo '<table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No.Rekening</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Saldo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>'.$ab1 -> nomor.'</td>
                    <td>'.$ab1 -> customer.'</td>
                    <td>'.$ab1 -> get_Saldo().'</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>'.$ab2 -> nomor.'</td>
                    <td>'.$ab2 -> customer.'</td>
                    <td>'.$ab2 -> get_Saldo().'</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>'.$new_account -> nomor.'</td>
                    <td>'.$new_account -> customer.'</td>
                    <td>'.$new_account -> get_Saldo().'</td>
                </tr>
            </tbody>
        </table>';
    }
?>

</body>
</html>