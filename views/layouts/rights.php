<?php $this->beginContent('application.views.layouts.main'); ?>

<div class="container">

	<div id="content" class="rights">

		<?php if( strpos($this->route, 'setup/install')===false ): ?>

			<div id="rightsMenu">

				<?php $this->renderPartial('/_menu'); ?>

			</div>

		<?php endif; ?>

		<?php $this->renderPartial('/_flash'); ?>

		<?php echo $content; ?>

	</div><!-- content -->

</div>

<?php $this->endContent(); ?>