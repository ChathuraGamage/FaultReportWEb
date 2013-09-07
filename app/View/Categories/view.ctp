<div class="categories view">
<h2><?php  echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Categoryid'); ?></dt>
		<dd>
			<?php echo h($category['Category']['categoryid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoryname'); ?></dt>
		<dd>
			<?php echo h($category['Category']['categoryname']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['categoryid'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['categoryid']), null, __('Are you sure you want to delete # %s?', $category['Category']['categoryid'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
