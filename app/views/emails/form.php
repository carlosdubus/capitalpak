<?php
$counter = 0;
function label($k){
	return ucfirst(str_replace("_"," ",$k));
}

function trclass(){
    global $counter;
    $class = $counter % 2 == 0 ? "" : "background-color:#EEE";
    $counter++;
    return $class;
}

function get_envio_data($envios,$envioIx){
	$envioData = array();
	foreach($envios as $k=>$v){
		$envioData[$k] = $v[$envioIx];
	}
	return $envioData;
}

function envio_template($envioData){
    global $counter;
    
$counter = 0;
	?>

<?php foreach($envioData as $k=>$v): ?>

<tr style="<?=trclass()?>">
<td><?=label($k)?>:</td>
<td><?=$v?></td>
</tr>

<? endforeach ?>




<?
}
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<style type="text/css">
		    td{
			padding:5px;
			
		    }
		    
		    .odd td{
			background-color:#EEE;
		    }
		</style>
	</head>
	<body>
<h3>Datos Solicitante</h3>

<table cellspasing="0">

<?php foreach($solicitante as $k=>$v): ?>

<tr style="<?=trclass()?>">
<td><?=label($k)?>:</td>
<td><?=$v?></td>
</tr>

<? endforeach ?>

<tr><td colspan="2">
	
<h3>Envios</h3>
    </td></tr>

<?

for($i=0;$i<$quantity;$i++){
	?><tr><td colspan="2"><div ><strong>Envio #<?=$i+1?></strong></div></td></tr><?
	envio_template(get_envio_data($envios,$i));
	?><tr><td colspan="2"><div style="height:1em"></div></td></tr><?
}

?>
</table>
</body>
</html>