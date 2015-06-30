<?php
$this->breadcrumbs=array(
	'Returns',
);

$this->menu=array(
array('label'=>'Create Returns','url'=>array('create')),
array('label'=>'Manage Returns','url'=>array('admin')),
);
?>

<h1>Returns</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
