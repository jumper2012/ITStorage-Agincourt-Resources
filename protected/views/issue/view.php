<?php
$this->breadcrumbs=array(
	'Issues'=>array('index'),
	$model->id_trans,
);

$this->menu=array(
array('label'=>'List Issue','url'=>array('index')),
array('label'=>'Create Issue','url'=>array('create')),
array('label'=>'Update Issue','url'=>array('update','id'=>$model->id_trans)),
array('label'=>'Delete Issue','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_trans),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Issue','url'=>array('admin')),
);
?>

<h1>View Issue #<?php echo $model->id_trans; ?></h1>

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
