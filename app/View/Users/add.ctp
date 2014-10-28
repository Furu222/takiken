<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('image');
		echo $this->Form->input('twitter_id');
		echo $this->Form->input('twitter_access_token');
		echo $this->Form->input('facebook_id');
		echo $this->Form->input('facebook_access_token');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answer Histories'), array('controller' => 'answer_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer History'), array('controller' => 'answer_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Points'), array('controller' => 'user_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Point'), array('controller' => 'user_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
