<?php
$this->breadcrumbs=array(
	'Returns'=>array('index'),
	$model->id_trans,
);

$this->menu=array(
array('label'=>'List Returns','url'=>array('index')),
array('label'=>'Create Returns','url'=>array('create')),
array('label'=>'Update Returns','url'=>array('update','id'=>$model->id_trans)),
array('label'=>'Delete Returns','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_trans),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Returns','url'=>array('admin')),
);
?>

<h1>View Returns #<?php echo $model->id_trans; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_trans',
		'barcode_id',
		'serial_number',
		'tanggal',
		'username',
		'department',
		'notes',
),
)); ?>
