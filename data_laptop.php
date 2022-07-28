<?php
require 'functions.php';

$laptop = query("SELECT * FROM laptop");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .textarea {
            white-space: pre-wrap;
            padding: 2px 16px;
        }
    </style>
</head>

<body>
    <h2 align="center">Daftar Produk Laptop</h2>

    <table class="table table-bordered" border="1" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Deskripsi </th>
                <th colspan="2">Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laptop as $row) : ?>
                <tr style="color: black;">
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["merek"]; ?></td>
                    <td><?= $row["deskripsi"]; ?></td>
                    <td colspan="2"><?= $row["harga"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>