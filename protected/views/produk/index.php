<?php
$this->breadcrumbs=array(
	'Produks',
);

$this->menu=array(
array('label'=>'Create Produk','url'=>array('create')),
array('label'=>'Manage Produk','url'=>array('admin')),
);
?>

<h1>Produks</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
