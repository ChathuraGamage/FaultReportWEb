<div class="reports form">
<?php echo $this->Form->create('Report'); ?>
	<fieldset>
		<legend><?php echo __('Add Report'); ?></legend>
	<?php
		echo $this->Form->input('reportid');
		echo $this->Form->input('reporterid');
		echo $this->Form->input('place');
		echo $this->Form->input('category');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reports'), array('action' => 'index')); ?></li>
	</ul>
</div>
