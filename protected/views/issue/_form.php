            <?php
$form = $this->beginWidget(
        'booster.widgets.TbActiveForm', array(
    'id' => 'verticalForm',
    'htmlOptions' => array('class' => 'well'), // for inset effect
        )
);
?>
<table WIDTH="100%" >
    <TR>
        <TD width="45%" valign="center">

            <p class="help-block">Fields with <span class="required">*</span> are required.</p>

            <?php echo $form->errorSummary($model); ?>
            <?php $nama = CHtml::listData(Produk::model()->findAll(), 'barcode_id', 'barcode_id');?>
            
            Barcode ID
            <?php
            $this->widget('ext.select2.ESelect2', array(
                'model' => $model,
                'attribute' => 'barcode_id',
//                'name' => 'selectInput',
                'data' => $nama,
                'htmlOptions' => array(
//                'wrapperHtmlOptions' => array(
//                    'class' => 'col-sm-5',
//                ),
                    'style' => 'width:340px',
                    'prompt' => '-- Masukkan Barcode Produk --',
                    'ajax' => array(
                        'type' => 'POST',
                        'url' => CController::createUrl('Issue/CekNamaProduk'),
                        'class' => 'span5',
                        'update' => '#kode',// '#' . CHtml::activeId($model, 'serial_number'), //jurusan_id = field jurusan_id
                        //'update' => "#kode",
                        'beforeSend' => 'function() {$("#Beli_jumlah").find("option").remove();}',
                    )
                ),)
            );
            ?>
            Serial Number
            <?php
            $this->widget('ext.select2.ESelect2', array(
                'model' => $model,
                'attribute' => 'serial_number',
//                'name' => 'selectInput',
              //  'data' => $s_n,
                'htmlOptions' => array(
//                'wrapperHtmlOptions' => array(
//                    'class' => 'col-sm-5',
//                ),
                    'style' => 'width:340px',
                    'prompt' => '-- Masukkan Serial Number --',
//                    'ajax' => array(
//                        'type' => 'POST',
//                        'url' => CController::createUrl('Issue/CekNamaProduk'),
//                        'class' => 'span5',
//                        'update' => '#kode', //. CHtml::activeId($model2, 'jumlah'), //jurusan_id = field jurusan_id
//                        //'update' => "#kode",
//                        'beforeSend' => 'function() {$("#Beli_jumlah").find("option").remove();}',
//                    )
                ),)
            );
            ?>

        </TD>
        <TD width="" bgcolor="#eee" >
            
        </TD>
        <TD  width="65%">
            <div id="kode" class="alert alert-info"></div>
        </TD>            
    </TR>
    <TR>
        <TD colspan="3">
            <hr>
            <?php
            echo $form->datePickerGroup($model, 'tanggal', array('widgetOptions' => array('options' => array(
                        'showButtonPanel' => true,
                        'format' => 'yyyy-mm-dd',
                        'viewformat' => 'yyyy-mm-dd',
                        'todayHighlight' => true,
                        'todayBtn' => "linked",
                    ), 'htmlOptions' => array('class' => 'span5', 'maxlength' => 20))));
            ?>


            <?php echo $form->textFieldGroup($model, 'username', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 75)))); ?>

            <?php echo $form->textFieldGroup($model, 'department', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 75)))); ?>

                        <?php
            echo $form->ckEditorGroup(
                    $model, 'notes', array(
                'wrapperHtmlOptions' => array(
                /* 'class' => 'col-sm-5', */
                ),
                'widgetOptions' => array(
                    'editorOptions' => array(
                        'fullpage' => 'js:true',
                    /* 'width' => '640', */
                    /* 'resize_maxWidth' => '640', */
                    /* 'resize_minWidth' => '320' */
                    )
                )
                    )
            );
            ?>


            <div class="form-actions">
                <?php
                $this->widget('booster.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'context' => 'primary',
                    'label' => $model->isNewRecord ? 'Create' : 'Save',
                ));
                ?>
            </div>

<?php $this->endWidget(); ?>
        </TD>
    </TR>
</table>