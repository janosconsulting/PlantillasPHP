<?php
  class master{

  	public static function load($content)
  	{
     
  	   ob_end_clean();
  	   $pagemaincontent = $content; 
       include 'paginamaestra.php';
  	}
    
  }
?>