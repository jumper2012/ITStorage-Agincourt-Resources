<?php
$this->breadcrumbs = array(
    'Admin'=> array('Adminbycriteria','id'=>$barcode_id,'nama'=>$nama),
    'Items' => array('IndexByBarcode','barcode_id'=>$barcode_id),
    'Daftar Barang Available',
);

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
<center><h1><b><?php echo $nama?></b></h1></center>
<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'item-grid',
    'dataProvider' => $model->searchByBarcode($barcode_id),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'serial_number',
            'header' => 'Serial Number',
            'htmlOptions' => array('style' => 'width: 200px; text-align: left;', 'class' => 'zzz'),
            'headerHtmlOptions' => array('style' => 'width: 200px; text-align: center;', 'class' => 'zzz')
        ),
        array(
            'name' => 'container',
            'header' => 'Container',
            'htmlOptions' => array('style' => 'width: 100px; text-align: center;', 'class' => 'zzz'),
            'headerHtmlOptions' => array('style' => 'width: 100px; text-align: center;', 'class' => 'zzz')
        ),
        array(
            'name' => 'location',
            'header' => 'Location',
            'htmlOptions' => array('style' => 'width: 100px; text-align: center;', 'class' => 'zzz'),
            'headerHtmlOptions' => array('style' => 'width: 100px; text-align: center;', 'class' => 'zzz')
        ),
        array(
            'name' => 'supplier_part',
            'header' => 'Suplier Part',
            'htmlOptions' => array('style' => 'width: 200px; text-align: center;', 'class' => 'zzz'),
            'headerHtmlOptions' => array('style' => 'width: 200px; text-align: center;', 'class' => 'zzz')
        ),
        array(
            'name' => 'comment',
            'header' => 'Comment',
            'htmlOptions' => array('style' => 'width: 270px; text-align: center;', 'class' => 'zzz'),
            'headerHtmlOptions' => array('style' => 'width: 270px; text-align: center;', 'class' => 'zzz')
        ),
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>
