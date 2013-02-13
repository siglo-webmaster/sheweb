<?php


function cargarExcel($file,$campos=false){
   
    require_once 'Excel/reader.php';
    
    if(!$campos){
        $campos = array(
            0=>'titulo',
            1=>'isbn',
            2=>'year',
            3=>'numeroedicion',
            4=>'formato',
            5=>'categoria',
            6=>'autor',
            7=>'precio',
            8=>'moneda',
            9=>'descripcion'
        );
    }
    
    
    $data = new Spreadsheet_Excel_Reader();
    $data->setOutputEncoding('UTF-8');
    
    $data->read($file);

    $carga = array();
    for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {

            for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
                    $carga[$i - 1][$campos[$j-1]] = (isset($data->sheets[0]['cells'][$i][$j]))?$data->sheets[0]['cells'][$i][$j]:'';
            }
    }
    
    return $carga;
    
}

$datos = cargarExcel('test1.xls');

foreach($datos as $row){
    var_dump($row);
    echo "<hr>";
}

?>
