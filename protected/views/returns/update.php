<?php
$this->breadcrumbs=array(
	'Returns'=>array('index'),
	$model->id_trans=>array('view','id'=>$model->id_trans),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Returns','url'=>array('index')),
	array('label'=>'Create Returns','url'=>array('create')),
	array('label'=>'View Returns','url'=>array('view','id'=>$model->id_trans)),
	array('label'=>'Manage Returns','url'=>array('admin')),
	);
	?>

	<h1>Update Returns <?php echo $model->id_trans; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>