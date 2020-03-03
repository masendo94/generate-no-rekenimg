<?php 
$mulai = $_POST['mulai'];
$sampai = $_POST['sampai'];
$jenis = $_POST['jenis'];
$cabang = $_POST['cabang'];
for($i = $mulai; $i <=$sampai; $i++){
    $nomer = sprintf('%05s',$i);
    echo $jenis."-".$nomer."-".$cabang."<br>";
}

?>

