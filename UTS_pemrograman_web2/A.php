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
    <table border="1" cellpadding="2" cellspacing="2">
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php 
        $data = [
            ["Buavita", "30", "10.890", "326.700"],
            ["Bango", "21", "21.890", "459.690"],
            ["Sariwangi", "10", "9.990", "99.900"],
            ["Shampo Bayi", "20", "21.980", "439.600"],
            ["Bedak", "15", "14.990", "224.850"],
            ["Baju Bayi", "20", "35.500", "710.000"],
            ["Jumper", "25", "49.999", "1.249.975"]
        ];

        $totalJumlah = 0; 

        foreach($data as $index => $row) : 
            $jumlah = (float)str_replace('.', '', $row[3]);
            $totalJumlah += $jumlah;
        ?>
        <tr>
            <td><?= $index + 1; ?></td>
            <td><?= $row[0]; ?></td>
            <td><?= $row[1]; ?></td>
            <td><?= $row[2]; ?></td>
            <td><?= $row[3]; ?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" style="text-align: center;"><strong>Total:</strong></td>
            <td><strong><?= number_format($totalJumlah, 0, ',', '.'); ?></strong></td>
        </tr>
    </table>
</body>
</html>