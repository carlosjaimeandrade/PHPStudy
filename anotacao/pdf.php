<?php
   ob_start();
   require_once __DIR__ . '/vendor/autoload.php';
   
    
   $conteudo = ob_get_contents();
   ob_end_clean();

   $mpdf = new \Mpdf\Mpdf();
   $mpdf->WriteHTML($conteudo);
   $mpdf->Output();
?>