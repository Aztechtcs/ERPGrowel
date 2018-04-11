<?php 

var_dump($ar);

?>

<?php 
$size=array();
$color=array();
foreach($ar as $v){
    array_push($color, $v->color);
    array_push($size, $v->size);
}
$color= array_unique($color);
$size=array_unique($size);
//var_dump($color);
//var_dump($size);
?>

<table>  
<?php 
echo form_open();
echo form_hidden('operation_id',1);
foreach($ar as $v){
    echo form_input($v->id,'','placeholder ='.$v->id.'/'.$v->size.'/'.$v->color)."<br>";
}

echo form_submit('Submit','Submit');
echo form_close();
?>
</table>