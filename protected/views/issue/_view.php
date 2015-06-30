<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_trans')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_trans),array('view','id'=>$data->id_trans)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barcode_id')); ?>:</b>
	<?php echo CHtml::encode($data->barcode_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial_number')); ?>:</b>
	<?php echo CHtml::encode($data->serial_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>