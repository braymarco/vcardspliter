<?php
$file=file_get_contents('input.vcf');
$data=explode('BEGIN:VCARD',$file);
for($i=1;$i<count($data);$i++){
	$datos='BEGIN:VCARD'.$data[$i];
	$name='v/'.$i.'.vcf';
	$fp = fopen($name, "w");
	fwrite($fp, $datos);
	fclose($fp);
}
?>