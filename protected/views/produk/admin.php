<?php
$this->breadcrumbs = array(
    'Produks' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Produk', 'url' => array('index')),
    array('label' => 'Create Produk', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('produk-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<center>
<h1><b>IT & SYSTEM STORAGE </b></h1>
</center>
<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'produk-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        //'barcode_id',
        //'nama_barang',
        array(
            'name' => 'nama_barang',
            'header' => 'Nama Barang',
            'htmlOptions' => array('style' => 'width: 300px; text-align: left;', 'class' => 'zzz'),
            'headerHtmlOptions' => array('style' => 'width: 170px; text-align: left;', 'class' => 'zzz')
        ),
        array(
            'name' => 'barcode_id',
            'header' => 'Barcode ID',
            'htmlOptions' => array('style' => 'width: 200px; text-align: CENTER;', 'class' => 'zzz'),
            'headerHtmlOptions' => array('style' => 'width: 170px; text-align: CENTER;', 'class' => 'zzz')
        ),
        array(
            'header' => 'Aksi',
            'class' => 'booster.widgets.TbButtonColumn',
            'template' => '{view}  {update}  {delete}',
            'buttons' => array(
                'view' => array(
                    'url' => "CHtml::normalizeUrl(array('item/Adminbycriteria','id'=>\$data->barcode_id,'nama'=>\$data->nama_barang))",
                ),),
            'htmlOptions' => array('style' => 'width: 75px; text-align: center;', 'class' => 'zzz'),
        ),
    ),
));
?>
