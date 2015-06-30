<?php
ini_set('max_execution_time', 300);
//$this->breadcrumbs = array(
//    'Items' => array('index'),
//    'Manage',
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('item-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<center><h2><b><?php echo $nama?></b></h2></center>
<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'item-grid',
    'dataProvider' => $model->searchByBarcode($barcode_id),
    'filter' => $model,
    'columns' => array(
        'serial_number',
        //'barcode_id',
        'container',
        'location',
        //'supplier_part',
        //'comment',
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>
