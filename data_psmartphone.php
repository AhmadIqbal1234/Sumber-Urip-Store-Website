<?php
require 'functions.php';

$psmartphone = query("SELECT * FROM pu_smartphone");
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
    <h2 align="center">Daftar Produk Unggulan Smartphone</h2>

    <table class="table table-bordered" border="1" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Produk</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($psmartphone as $row) : ?>
                <tr style="color: black;">
                    <td><?= $row["nama"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>