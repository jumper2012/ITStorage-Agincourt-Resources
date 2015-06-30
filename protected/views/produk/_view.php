<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('barcode_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->barcode_id),array('view','id'=>$data->barcode_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_barang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_barang); ?>
	<br />


</div>
<hr>