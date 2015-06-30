<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->serial_number,
);

$this->menu=array(
array('label'=>'List Item','url'=>array('index')),
array('label'=>'Create Item','url'=>array('create')),
array('label'=>'Update Item','url'=>array('update','id'=>$model->serial_number)),
array('label'=>'Delete Item','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->serial_number),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Item','url'=>array('admin')),
);
?>

<h1>View Item #<?php echo $model->serial_number; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'serial_number',
		'barcode_id',
		'container',
		'location',
		'supplier_part',
		'comment',
),
)); ?>
