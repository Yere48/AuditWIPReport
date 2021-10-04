<?php
require_once 'vendor/autoload.php';
require_once 'config.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

if (isset($_POST['btn_import'])) {

    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    $factory = $_POST['factory'];

    if (isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {

        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);

        if ('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);

        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        if (!empty($sheetData)) {
            if ($factory == "klego") {
                for ($i = 1; $i < count($sheetData); $i++) { //skipping first row
                    $buyer = $sheetData[$i][0];
                    $kp = $sheetData[$i][1];
                    $order = $sheetData[$i][2];
                    $season = $sheetData[$i][3];
                    $style = $sheetData[$i][4];
                    $color = $sheetData[$i][5];
                    $no_po  = $sheetData[$i][6];
                    $destination = $sheetData[$i][7];
                    $plant = $sheetData[$i][8];
                    $delivery = $sheetData[$i][9];
                    $base_unit_of_measure = $sheetData[$i][10];
                    $qty_order = $sheetData[$i][11];
                    $cutting_total = $sheetData[$i][12];
                    $distribution_center_total = $sheetData[$i][13];
                    $sewing_total = $sheetData[$i][14];
                    $qc_total = $sheetData[$i][15];
                    $pan_qc_total = $sheetData[$i][16];
                    $washing_received_total = $sheetData[$i][17];
                    $packing_total = $sheetData[$i][18];
                    $gr_finished_goods = $sheetData[$i][19];
                    $export = $sheetData[$i][20];
                    $shortage = $sheetData[$i][21];
                    $remark = $sheetData[$i][22];
                    $reject_fabric = $sheetData[$i][23];
                    $reject_washing = $sheetData[$i][24];
                    $reject_sewing = $sheetData[$i][25];
                    $tanggal_import = date("Y-m-d");

                    $explode_date = explode("/", $delivery);
                    $delivery_date = $explode_date[2] . "-" . $explode_date[1] . "-" . $explode_date[0];

                    $kode = $kp . "" . $order . "" . $season . "" . $style . "" . $color . "" . $no_po . "" . $destination . "" . $explode_date[0] . "" . $explode_date[1] . "" . $explode_date[2];

                    $dbaccess->query("INSERT INTO tb_wip_klego VALUES ('$buyer','$kp','$order','$season','$style','$color','$no_po',
                                '$destination','$plant','$delivery_date','$base_unit_of_measure','$qty_order','$cutting_total',
                                '$distribution_center_total','$sewing_total','$qc_total','$pan_qc_total','$washing_received_total',
                                '$packing_total','$gr_finished_goods','$export','$shortage','$remark','$reject_fabric',
                                '$reject_washing','$reject_sewing','$tanggal_import','$kode') 
                                ON DUPLICATE KEY UPDATE buyer='$buyer', kp='$kp', ocode='$order', season='$season', style='$style', 
                                color='$color', no_po='$no_po', destination='$destination', plant='$plant', delivery_date='$delivery_date', 
                                base_unit_of_measure='$base_unit_of_measure', qty_order='$qty_order', cutting_total='$cutting_total', 
                                distribution_center_total='$distribution_center_total', sewing_total='$sewing_total', qc_total ='$qc_total', 
                                pan_qc_total='$pan_qc_total', washing_received_total='$washing_received_total', packing_total='$packing_total', 
                                gr_finished_goods='$gr_finished_goods', export='$export', shortage='$shortage',
                                remark='$remark', reject_fabric='$reject_fabric', reject_washing='$reject_washing', reject_sewing='$reject_sewing', 
                                tanggal_import='$tanggal_import'");

                    $dbaccess->query("INSERT INTO tb_remark_klego VALUES ('$kp','$remark') ON DUPLICATE KEY UPDATE remark='$remark'");
                }
            } else if ($factory == "sambi") {
                for ($i = 1; $i < count($sheetData); $i++) { //skipping first row
                    $buyer = $sheetData[$i][0];
                    $kp = $sheetData[$i][1];
                    $order = $sheetData[$i][2];
                    $season = $sheetData[$i][3];
                    $style = $sheetData[$i][4];
                    $color = $sheetData[$i][5];
                    $no_po  = $sheetData[$i][6];
                    $destination = $sheetData[$i][7];
                    $plant = $sheetData[$i][8];
                    $delivery = $sheetData[$i][9];
                    $base_unit_of_measure = $sheetData[$i][10];
                    $qty_order = $sheetData[$i][11];
                    $cutting_total = $sheetData[$i][12];
                    $embroidry_total = $sheetData[$i][13];
                    $distribution_center_total = $sheetData[$i][14];
                    $sewing_total = $sheetData[$i][15];
                    $qc_total = $sheetData[$i][16];
                    $pan_qc_total = $sheetData[$i][17];
                    $packing_total = $sheetData[$i][18];
                    $gr_finished_goods = $sheetData[$i][19];
                    $export = $sheetData[$i][20];
                    $shortage = $sheetData[$i][21];
                    $remark = $sheetData[$i][22];
                    $reject_fabric = $sheetData[$i][23];
                    $reject_washing = $sheetData[$i][24];
                    $reject_sewing = $sheetData[$i][25];
                    $tanggal_import = date("Y-m-d");

                    $explode_date = explode("/", $delivery);
                    $delivery_date = $explode_date[2] . "-" . $explode_date[1] . "-" . $explode_date[0];

                    $kode = $kp . "" . $order . "" . $season . "" . $style . "" . $color . "" . $no_po . "" . $destination . "" . $explode_date[0] . "" . $explode_date[1] . "" . $explode_date[2];

                    $dbaccess->query("INSERT INTO tb_wip_sambi VALUES ('$buyer','$kp','$order','$season','$style','$color','$no_po',
                                '$destination','$plant','$delivery_date','$base_unit_of_measure','$qty_order','$cutting_total',
                                '$embroidry_total', '$distribution_center_total','$sewing_total','$qc_total','$pan_qc_total',
                                '$packing_total','$gr_finished_goods','$export','$shortage','$remark','$reject_fabric',
                                '$reject_washing','$reject_sewing','$tanggal_import','$kode') 
                                ON DUPLICATE KEY UPDATE buyer='$buyer', kp='$kp', ocode='$order', season='$season', style='$style', 
                                color='$color', no_po='$no_po', destination='$destination', plant='$plant', delivery_date='$delivery_date', 
                                base_unit_of_measure='$base_unit_of_measure', qty_order='$qty_order', cutting_total='$cutting_total', 
                                embroidry_total='$embroidry_total', distribution_center_total='$distribution_center_total', 
                                sewing_total='$sewing_total', qc_total ='$qc_total', pan_qc_total='$pan_qc_total', 
                                packing_total='$packing_total', gr_finished_goods='$gr_finished_goods', export='$export', shortage='$shortage',
                                remark='$remark', reject_fabric='$reject_fabric', reject_washing='$reject_washing', reject_sewing='$reject_sewing', 
                                tanggal_import='$tanggal_import'");

                    $dbaccess->query("INSERT INTO tb_remark_sambi VALUES ('$kp','$remark') ON DUPLICATE KEY UPDATE remark='$remark'");
                }
            }
        }
        // echo "Records inserted successfully.";
        $_SESSION["success"] = 'Import Data Successfully';
    } else {
        // echo "Upload only CSV or Excel file.";
        $_SESSION["failed"] = 'Incorrectly Imported File, Upload only CSV or Excel file';
    }
}
