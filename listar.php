<?php include('master.php');?>
<h1>Este es un ejemplo de Pagina usando la plantilla master</h1>

<H2>eSTO ES OTRO CODIGO.</H2>
<?php
   master::load(ob_get_contents());
?>