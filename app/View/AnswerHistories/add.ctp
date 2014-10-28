<div class="answerHistories form">
<?php echo $this->Form->create('AnswerHistory'); ?>
	<fieldset>
		<legend><?php echo __('Add Answer History'); ?></legend>
	<?php
		echo $this->Form->input('client_type');
		echo $this->Form->input('user_id');
		echo $this->Form->input('problem_id');
		echo $this->Form->input('result');
		echo $this->Form->input('select_answer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Answer Histories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
	</ul>
</div>
