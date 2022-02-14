<?php
include "sepakbola.php";

	#objek
	$sepakbola1 = new sepakbola("Biru", "Negara A", 2012, $pemain);
 	$sepakbola1->display();
    	$pemain = array("Sadam", "Yudi", "Ade", "Ahmad");
        foreach($pemain as $pemain){ 
        	echo $pemain . "<br>"; 
	}
?>
