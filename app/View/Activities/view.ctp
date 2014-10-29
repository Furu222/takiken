<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Activity');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($activity['Activity']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('User'); ?></dt>
			<dd>
				<?php echo $this->Html->link($activity['User']['id'], array('controller' => 'users', 'action' => 'view', $activity['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Action Type'); ?></dt>
			<dd>
				<?php echo h($activity['Activity']['action_type']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Problem'); ?></dt>
			<dd>
				<?php echo $this->Html->link($activity['Problem']['id'], array('controller' => 'problems', 'action' => 'view', $activity['Problem']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($activity['Activity']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($activity['Activity']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Activity')), array('action' => 'edit', $activity['Activity']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Activity')), array('action' => 'delete', $activity['Activity']['id']), null, __('Are you sure you want to delete # %s?', $activity['Activity']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Activities')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Activity')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Problems')), array('controller' => 'problems', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Problem')), array('controller' => 'problems', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

