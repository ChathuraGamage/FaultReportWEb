<?php echo $this->Html->css('cake.generic'); ?>
<div class="reports view">
    <h2><?php echo __('Report'); ?></h2>
    <dl>
        <!--<dt><?php //echo __('Reportid'); ?></dt>
        <dd>
            <?php// echo h($report['Report']['reportid']); ?>
            &nbsp;
        </dd>-->
        <dt><?php echo __('Reporterid'); ?></dt>
        <dd>
            <?php echo h($report['Report']['reporterid']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Place'); ?></dt>
        <dd>
            <?php echo h($report['Report']['place']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Category'); ?></dt>
        <dd>
            <?php echo h($report['Report']['category']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Description'); ?></dt>
        <dd>
            <?php echo h($report['Report']['description']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Status'); ?></dt>
        <dd>
            <?php echo h($report['Report']['status']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <?php if ($current_user['role'] == 'admin'): ?>
            <li><?php echo $this->Html->link(__('Edit Report'), array('action' => 'edit', $report['Report']['reportid'])); ?> </li>
            <li><?php echo $this->Form->postLink(__('Delete Report'), array('action' => 'delete', $report['Report']['reportid']), null, __('Are you sure you want to delete # %s?', $report['Report']['reportid'])); ?> </li>		
        <?php endif; ?> 
        <li><?php echo $this->Html->link(__('List Reports'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Report'), array('action' => 'add')); ?> </li>
    </ul>
</div>
