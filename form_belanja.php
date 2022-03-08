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
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action= "form_belanja.php" method= "POST">
                    <div class="form-group row py-4">
                        <label for="customer" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                            <input id="customer" name="customer" placeholder="Nama Costumer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Televisi"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
                        <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah Beli" type="number" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <input name ="proses" type="submit" value="Kirim" class = "btn btn-success">
                        </div>
                    </div>
                </form>
                <?php
                
                $proses = $_POST["proses"];
                if (!empty($proses)) {
                    $customer = $_POST["customer"];
                    $produk = $_POST["produk"];
                    $jumlah = $_POST["jumlah"];
                    echo '<p class="text-md-start">Nama Costumer : '. $customer .'</p>';
                    echo '<p class="text-md-start">Produk Pilihan : '. $produk .'</p>';
                    echo '<p class="text-md-start">Jumlah Beli : '. $jumlah .'</p>';
                    if ($jumlah >= 0 && $produk == "Televisi") {
                        $total = 4200000 * $jumlah;
                        echo '<p class="text-md-start">Total Belanja : Rp. '. $total .',-</p>';
                    }elseif ($jumlah >= 0 && $produk == "Kulkas") {
                        $total = 3100000 * $jumlah;
                        echo '<p class="text-md-start">Total Belanja : Rp. '. $total .',-</p>';
                    }elseif ($jumlah >= 0 && $produk == "Mesin Cuci") {
                        $total = 3800000 * $jumlah;
                        echo '<p class="text-md-start">Total Belanja : Rp. '. $total .',-</p>';
                    }else {
                        echo '<p class="text-md-start">Masukan Nilai Jumlah Yang Valid</p>';
                    }
                }
                
                ?>
            </div>
            <div class="col-md-4">        
                <div class="container py-4">
                    <nav class="nav flex-column">
                        <ul class="list-group">
                        <li class="list-group-item active text-center" aria-current="true">Daftar Harga</li>
                        <li class="list-group-item">TV : 4.200.000</li>
                        <li class="list-group-item">Kulkas : 3.100.000</li>
                        <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                        <li class="list-group-item active" aria-current="true">Harga dapat berubah setiap saat</li>
                        </ul>
                    </nav>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>