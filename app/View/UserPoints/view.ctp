<div class="userPoints view">
<h2><?php echo __('User Point'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userPoint['UserPoint']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userPoint['User']['id'], array('controller' => 'users', 'action' => 'view', $userPoint['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer Point'); ?></dt>
		<dd>
			<?php echo h($userPoint['UserPoint']['answer_point']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sakumon Point'); ?></dt>
		<dd>
			<?php echo h($userPoint['UserPoint']['sakumon_point']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userPoint['UserPoint']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userPoint['UserPoint']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Point'), array('action' => 'edit', $userPoint['UserPoint']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Point'), array('action' => 'delete', $userPoint['UserPoint']['id']), array(), __('Are you sure you want to delete # %s?', $userPoint['UserPoint']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Points'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Point'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
