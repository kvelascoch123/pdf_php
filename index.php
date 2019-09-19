<?php
require './vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf; //PDF CLASS


//require_once 'print_view.php'; //html

//buffer recoge html


if(isset($_POST['crear'])){
    ob_start();
    require_once 'print_view.php';
    $html = ob_get_clean();
    
    $html2pdf = new Html2Pdf('p','A4','es','true','UTF-8'); // (propiedades del documento)
    $html2pdf->writeHTML($html); //recibe el $html
    
    $html2pdf->output('pdf_generate.pdf'); // ($nombre del pdf al descargar)
    
}

?>

<form action="" method="POST">
    <input type="text" name="titulo">
    <input type="submit" value = 'Crear PDF' name='crear'>
</form>