<?php echo $this->Html->css('cake.generic'); ?>
<div class="reports index">
    <h2><?php echo __('Reports'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('reportid'); ?></th>
            <th><?php echo $this->Paginator->sort('reporterid'); ?></th>
            <th><?php echo $this->Paginator->sort('place'); ?></th>
            <th><?php echo $this->Paginator->sort('category'); ?></th>
            <th><?php echo $this->Paginator->sort('description'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($reports as $report): ?>
            <tr>
                <td><?php echo h($report['Report']['reportid']); ?>&nbsp;</td>
                <td><?php echo h($report['Report']['reporterid']); ?>&nbsp;</td>
                <td><?php echo h($report['Report']['place']); ?>&nbsp;</td>
                <td><?php echo h($report['Report']['category']); ?>&nbsp;</td>
                <td><?php echo h($report['Report']['description']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $report['Report']['reportid'])); ?>
                    <?php if ($current_user['role'] == 'admin'): ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $report['Report']['reportid'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $report['Report']['reportid']), null, __('Are you sure you want to delete # %s?', $report['Report']['reportid'])); ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	</p>

    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Report'), array('action' => 'add')); ?></li>
    </ul>
</div>
