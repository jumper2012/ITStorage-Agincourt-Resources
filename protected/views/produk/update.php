<?php
$this->breadcrumbs = array(
    'Produks' => array('index'),
    $model->barcode_id => array('view', 'id' => $model->barcode_id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Produk', 'url' => array('index')),
    array('label' => 'Create Produk', 'url' => array('create')),
    array('label' => 'View Produk', 'url' => array('view', 'id' => $model->barcode_id)),
    array('label' => 'Manage Produk', 'url' => array('admin')),
);
?>

<center><b>	<h1>Update Produk <?php echo $model->barcode_id; ?></b></h1></center>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>