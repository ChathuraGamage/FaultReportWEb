<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Userid'); ?></dt>
		<dd>
			<?php echo h($user['User']['userid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
            <?php if($current_user['userid']==$user['User']['userid']):?>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['userid'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['userid']), null, __('Are you sure you want to delete # %s?', $user['User']['userid'])); ?> </li>
            <?php endif;?>    
                <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
