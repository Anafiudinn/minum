<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

session_start();
include('db.php');

// Mulai output buffering
ob_start();

$user_id = $_SESSION['user_id'];

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set header kolom
$sheet->setCellValue('A1', 'Menu Name');
$sheet->setCellValue('B1', 'Price');
$sheet->setCellValue('C1', 'Quantity');
$sheet->setCellValue('D1', 'Date Added');

// Menulis data dari database ke spreadsheet
$sql = "SELECT * FROM stock WHERE user_id = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $rowNum = 2; // Mulai menulis data dari baris kedua
    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $rowNum, $row['menu_name']);
        $sheet->setCellValue('B' . $rowNum, $row['price']);
        $sheet->setCellValue('C' . $rowNum, $row['quantity']);
        $sheet->setCellValue('D' . $rowNum, $row['date_added']);
        $rowNum++;
    }
}

// Menulis file ke sistem
$writer = new Xlsx($spreadsheet);
$filename = 'stock_data.xlsx';

// Menyimpan file di server
$writer->save($filename);
echo "File berhasil disimpan. Unduh file ini: <a href='$filename'>Download</a><br>";

// Untuk download langsung
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'. urlencode($filename) .'"');
header('Cache-Control: max-age=0');

// Bersihkan buffer dan kirim output
ob_end_clean();
$writer->save('php://output');
exit;
?>
