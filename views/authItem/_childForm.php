<div class="form">

<?php $form=$this->beginWidget('CActiveForm'); ?>
	
	<div class="row">
        <?php $this->widget('bootstrap.widgets.TbSelect2', array(
            'model'=>$model,
            'attribute'=>'itemname',
            'data'=>$itemnameSelectOptions,
            'options'=>array(
                'width'=>'350px',
                'placeholder'=>Yii::t('AuthModule.main', 'Select item'),
                'allowClear'=>true,
            ),
        ) ); ?>
		<?php echo $form->error($model, 'itemname'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton(Rights::t('core', 'Add')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>