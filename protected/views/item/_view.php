<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('serial_number')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->serial_number),array('view','id'=>$data->serial_number)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barcode_id')); ?>:</b>
	<?php echo CHtml::encode($data->barcode_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('container')); ?>:</b>
	<?php echo CHtml::encode($data->container); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_part')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_part); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />


</div>