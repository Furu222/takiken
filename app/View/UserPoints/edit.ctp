<div class="userPoints form">
<?php echo $this->Form->create('UserPoint'); ?>
	<fieldset>
		<legend><?php echo __('Edit User Point'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('answer_point');
		echo $this->Form->input('sakumon_point');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserPoint.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UserPoint.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Points'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
