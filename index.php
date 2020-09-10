<?php
if (!isset($_SESSION)) {
  session_start();
} 
//ext file
$ext = substr(strrchr(__FILE__, '.'), 1);

/** Define ROOT_PATH para directorio app */
if ( ! defined( 'ROOT_PATH' ) ) {
  define( 'ROOT_PATH', dirname(__FILE__) . '/' );
}

//requerimos la configuracion del host
require ( ROOT_PATH . 'config.php' );

require ( ROOT_PATH . 'model/idiorm.php' );

 //Utilizamos la clase ORM de idiorm class
ORM::configure("mysql:host=".DB_HOST.";dbname=".DB_NAME);
ORM::configure('username', DB_USER);
ORM::configure('password', DB_PASS);
// cambiamos el juego de caracteres
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.DB_CHARSET));



?>

<!DOCTYPE html>
<html>
<head>
	<title>Leer Archivo Excel usando PHP</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h2>Ejemplo: Leer Archivos Excel con PHP</h2>	
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Resultados de archivo de Excel.</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-12">
            
<?php
require_once 'PHPExcel/Classes/PHPExcel.php';
$archivo = "listaproductos.xlsx";
$inputFileType = PHPExcel_IOFactory::identify($archivo);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($archivo);
$sheet = $objPHPExcel->getSheet(0); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();?>

<table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>SKU</th>
          <th>CATEGORIA</th>
          <th>NOMBRE DEL PRODUCTO</th>
          <th>PRESENTACIÓN</th>
          <th>PRECIO VENTA</th>
          <th>FOTO</th>
        </tr>
      </thead>
      <tbody>


<?php
$num=0;
for ($row = 2; $row <= $highestRow; $row++){ $num++;

//->find_many();




?>

       <tr>
          <th scope='row'><?php echo $num;?></th>
          <td><?php echo $sheet->getCell("A".$row)->getValue();?></td>
          <td><?php echo $sheet->getCell("B".$row)->getValue();?></td>
          <td><?php echo $sheet->getCell("C".$row)->getValue();?></td>
          <td><?php echo $sheet->getCell("D".$row)->getValue();?></td>
          <td><?php echo $sheet->getCell("E".$row)->getValue();?></td>
          <td><?php echo $sheet->getCell("F".$row)->getValue();?></td>
        </tr>
    	
	<?php	
}
?>
          </tbody>
    </table>
  </div>	
 </div>	
</div>
</body>
</html>
