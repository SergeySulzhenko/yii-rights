<?php
$this->breadcrumbs=array(
	'Rights'=>array('/rights/main'),
	Yii::t('RightsModule.tr', 'Permissions'),
);
?>

<div class="rights">

	<?php $this->renderPartial('_menu'); ?>

	<div id="rightsPermissions">

		<?php
		$this->renderPartial('_permissions', array(
			'roles'=>$roles,
			'roleColumnWidth'=>$roleColumnWidth,
			'authItems'=>$authItems,
			'rights'=>$rights,
			'parents'=>$parents,
			'i'=>$i,
		));
		?>

	</div>

</div>
