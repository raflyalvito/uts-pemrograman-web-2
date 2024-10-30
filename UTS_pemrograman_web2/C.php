<?php
$headers= [
    "No",
    "Produk",
    "Stok",
    "Harga",
    "Jumlah"
];
$data = [
    ["Produk"=> "Buahvita","Stok"=> "30","Harga"=> "10.890","Jumlah"=> "326.700"],
    ["Produk"=>"Bango","Stok"=> "21","Harga"=> "21.890","Jumlah"=> "459.690"],
    ["Produk"=>"Sariwangi","Stok"=> "10","Harga"=> "9.990","Jumlah"=> "99.900"],
    ["Produk"=>"Shampo Bayi","Stok"=> "20","Harga"=> "21.980","Jumlah"=> "439.600"],
    ["Produk"=>"Bedak","Stok"=> "15","Harga"=> "14.990","Jumlah"=> "224.850"],
    ["Produk"=>"Baju Bayi","Stok"=> "20","Harga"=> "35.500","Jumlah"=> "710.000"],
    ["Produk"=>"Jumper","Stok"=> "25","Harga"=> "49.999","Jumlah"=> "1.249.975"]
];


    function diskon($pembelian){
        if($pembelian == 400000){
            $diskon= 35;
        }elseif($pembelian == 250000){
            $diskon= 20;
        }else{
            $diskon= 0;
        }
        $totalDiskon = ($pembelian * $diskon) / 100;
        $totalBayar = $pembelian - $totalDiskon;
    }
    $totalJumlah = 0;
    foreach($data as $row) {
        $jumlah = (float)str_replace('.', '', $row['Jumlah']);
        $totalJumlah += $jumlah;
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%; 
        }
        td, th {
            text-align: center; 
        }
    </style>
</head>
<body>
    <table border="1" >
        <tr>
            <?php foreach($headers as $header) : ?>
                <th><?= $header;?></th>
            <?php endforeach;?>

        </tr>
       <?php foreach($data as $index => $row) :?>
        <tr>
            <td><?= $index + 1;?></td>
            <td><?= $row['Produk'];?></td>
            <td><?= $row['Stok'];?></td>
            <td><?= $row['Harga'];?></td>
            <td><?= $row['Jumlah'];?></td>
            
        </tr>
        <?php endforeach;?>
        <tr>
        <td colspan="4" style="text-align: center;"><strong>Total:</strong></td>
        <td><strong><?= number_format($totalJumlah, 0, ',', '.'); ?></strong></td>
        </tr>
    </table>
</body>
</html>