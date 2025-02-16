<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
        <div class="col-md-4">
        <h2 class="text-center">Aplikasi Perhitungan Diskon</h2>
        <form method="POST" class="border rounded bg-light p-2">
            <label class="form-label">Harga Label</label>
            <input type="number" name="harga" class="form-control" step="0.01" placeholder="Masukkan harga barang" min="0">

            <label for="" class="form-label">Diskon (%)</label>
            <input type="number" maxlength="3" name="diskon"
    step="0.01" placeholder="Masukkan harga barang" min="0" >

             <label for="" class="form-label">Diskon (%)</label>
             <input type="number" maxlength="3" name="diskon"
    class="form-control" step="0.01" placeholder="Masukkan diskon (0-100)" min="0">
            <br>
            <button type="submit" class="btn btn-primary w-100" name="hitung">Hitung</button>

</form>

<?php
    if(isset($_POST['hitung'])){
        $harga=$_POST['harga'];
        $diskon=$_POST['diskon'];

        if($harga<0 ){
            echo "<script>alert('harga tidak boleh negatif')</script>";
        }

        elseif($diskon <0 || $diskon >100){
            echo "<script>alert('Diskon harus antara angka 0-100!')</script>";
        }

        else{
            $nilai_diskon=$harga*($diskon/100);
            $total_harga=$harga - $nilai_diskon;?>
            <div class="border rounded p-2 bg-light mt-2">
                <p>Harga Barang: Rp.<b> <?php echo
    number_format($harga,2,',',',') ?></b></p>
                 <p>Diskon: Rp.<b> <?php echo
    number_format($harga,2,',',',') ?></b></p>
                 <p>Total Harga Setelah Diskon: Rp.<b> <?php echo
    number_format($total_harga,2,',',',') ?></b></p>  
                   <p></p>
        </div>
        <div>
        </div>
        </div>
        
        <?php }
        }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>