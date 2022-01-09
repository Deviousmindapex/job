<?php
include_once "connection.php";
function export() {
    global $conn;
    if (isset($_POST["export"])) {
        $checkbox = $_POST["checkbox"];
        for ($i=0;$i<count($checkbox);$i++) {
            $export_id = $checkbox[$i];

            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=data.csv');
            $output = fopen("php://output", "w");
            fputcsv($output, array('ID', 'Joining Date', 'Email'));
            $query = "SELECT id,date,email from job WHERE id='".$export_id."'";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                fputcsv($output, $row);
            }
            fclose($output);
        };
    }  ;
};


?>