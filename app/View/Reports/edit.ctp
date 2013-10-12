<?php echo $this->Html->css('cake.generic');

    $options= array("HEllo","Bye");

?>
<div class="reports form">
    <?php echo $this->Form->create('Report'); ?>
    <fieldset>
        <legend><?php echo __('Edit Report'); ?></legend>
        <?php
        echo $this->Form->input('reportid');
        echo $this->Form->input('reporterid');
        echo $this->Form->input('place');
        echo $this->Form->input('category');
        echo $this->Form->input('description');
        //echo $this->Form->input('status');
        echo $this->Form->select('status', $options);
        //echo "<select name=\"pcid\">"; 
        //echo "<option value='".$row['status1']."'>test1</option>"; 
        //echo "<option value='".$row['status2']."'>test2</option>"; 
        //echo "</select>";
        ?>
    </fieldset>
    <?php if ($current_user['role'] == 'admin'): ?>
        <?php echo $this->Form->end(__('Submit')); ?>
        <?php endif; ?>
    
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <?php if ($current_user['role'] == 'admin'): ?>
            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Report.reportid')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Report.reportid'))); ?></li>
        <?php endif; ?>

        <li><?php echo $this->Html->link(__('List Reports'), array('action' => 'index')); ?></li>
    </ul>
</div>
