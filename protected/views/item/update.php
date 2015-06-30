<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->serial_number=>array('view','id'=>$model->serial_number),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Item','url'=>array('index')),
	array('label'=>'Create Item','url'=>array('create')),
	array('label'=>'View Item','url'=>array('view','id'=>$model->serial_number)),
	array('label'=>'Manage Item','url'=>array('admin')),
	);
	?>

	<h1>Update Item <?php echo $model->serial_number; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>