<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Users'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('username');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('password');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('email');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('image');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('twitter_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('twitter_access_token');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('facebook_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('facebook_access_token');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($users as $user): ?>
			<tr>
				<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['image']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['twitter_id']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['twitter_access_token']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['facebook_id']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['facebook_access_token']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Activities')), array('controller' => 'activities', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Activity')), array('controller' => 'activities', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Answer Histories')), array('controller' => 'answer_histories', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Answer History')), array('controller' => 'answer_histories', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Problems')), array('controller' => 'problems', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Problem')), array('controller' => 'problems', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('User Points')), array('controller' => 'user_points', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User Point')), array('controller' => 'user_points', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>