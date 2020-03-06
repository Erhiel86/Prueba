<?php

$data = json_decode( file_get_contents("http://127.0.0.1:8000/api/empresa"), true);

//print_r($data);

for($i=0; $i<count($data); $i++)
{
	print_r($data[$i]['nombre']."<br>");
}





?>
