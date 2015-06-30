<?php
$this->breadcrumbs=array(
	'Produks'=>array('index'),
	$model->barcode_id,
);

$this->menu=array(
array('label'=>'List Produk','url'=>array('index')),
array('label'=>'Create Produk','url'=>array('create')),
array('label'=>'Update Produk','url'=>array('update','id'=>$model->barcode_id)),
array('label'=>'Delete Produk','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->barcode_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Produk','url'=>array('admin')),
);
?>

<h1>View Produk #<?php echo $model->barcode_id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'barcode_id',
		'nama_barang',
),
)); ?>
