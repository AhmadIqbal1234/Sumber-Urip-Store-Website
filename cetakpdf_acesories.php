<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Times', 'B', 16);
// mencetak string
$pdf->Cell(190, 7, 'Daftar Produk Acesories ', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 16);
$pdf->Cell(190, 7, 'Sumber Urip Store', 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(30, 7, '', 0, 1);
$pdf->SetFont('Times', 'B', 14);
$pdf->Cell(21, 7, '', 0, 1);
$pdf->Cell(84, 6, 'Nama', 1, 0, 'C');
$pdf->Cell(42, 6, 'Merek', 1, 0, 'C');
$pdf->Cell(53, 6, 'Harga', 1, 1, 'C');
$pdf->SetFont('Times', '', 14);
include 'functions.php';
$mahasiswa = mysqli_query($conn, "select * from acesories");
while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(84, 6, $row['nama'], 1, 0);
    $pdf->Cell(42, 6, $row['merek'], 1, 0, 'C');
    $pdf->Cell(53, 6, $row['harga'], 1, 1);
}
$pdf->Output();
