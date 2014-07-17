<?php
include('../../../conexion.php');

$valid_formats = array("jpg", "png", "PNG", "gif", "GIF", "JPG", "JPEG", 'jpeg');
$max_file_size = 1024 * 6000;
$path = "img/galeria/";
$count = 0;

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	foreach ($_FILES['files']['name'] as $f => $name) {
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue;
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue;
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue;
			}
            else{
                $ext = pathinfo($_FILES['files']['name'][$f], PATHINFO_EXTENSION);
                $uniq_name = substr(uniqid(),-5) . '.' .$ext;
                $dest = $path.$uniq_name;
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], '../../../'.$dest)){
                  $qry = "INSERT INTO fotos VALUES ('','$uniq_name')" ;
                  $result = mysql_query($qry);
                  if ( false===$result ) {
                    $sql_error .= 'Error in the query '.$qry.'  Error Desc :'.mysql_error($dbc).'<br /><br />' ;
                  }
                }
            }
        }
    }
}

?>