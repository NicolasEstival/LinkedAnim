<div class="ratings form">
<?php echo $this->Form->create('Rating'); ?>
	<fieldset>
		<legend><?php echo __('Add Rating'); ?></legend>
	<?php
		echo $this->Form->input('mangas_id');
		echo $this->Form->input('rating');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ratings'), array('action' => 'index')); ?></li>
	</ul>
</div>
