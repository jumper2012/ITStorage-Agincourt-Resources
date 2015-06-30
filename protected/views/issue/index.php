<?php
$this->breadcrumbs=array(
	'Issues',
);

$this->menu=array(
array('label'=>'Create Issue','url'=>array('create')),
array('label'=>'Manage Issue','url'=>array('admin')),
);
?>

<h1>Issues</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
