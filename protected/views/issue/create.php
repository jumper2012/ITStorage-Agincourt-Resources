<?php
$this->breadcrumbs=array(
	'Issues'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Issue','url'=>array('index')),
array('label'=>'Manage Issue','url'=>array('admin')),
);
?>

<center><h1><b>Form Peminjaman</b></h1></center>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>