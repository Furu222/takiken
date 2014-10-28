<div class="problems form">
<?php echo $this->Form->create('Problem'); ?>
	<fieldset>
		<legend><?php echo __('Add Problem'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('sentence');
		echo $this->Form->input('right_answer');
		echo $this->Form->input('wrong_answer1');
		echo $this->Form->input('wrong_answer2');
		echo $this->Form->input('wrong_answer3');
		echo $this->Form->input('description');
		echo $this->Form->input('image');
		echo $this->Form->input('user_id');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
		echo $this->Form->input('reference');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Problems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answer Histories'), array('controller' => 'answer_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer History'), array('controller' => 'answer_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
