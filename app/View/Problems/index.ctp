<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Problems'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('category_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('sentence');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('right_answer');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('wrong_answer1');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('wrong_answer2');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('wrong_answer3');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('description');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('image');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('user_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('latitude');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('longitude');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('reference');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('type');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($problems as $problem): ?>
			<tr>
				<td><?php echo h($problem['Problem']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($problem['Category']['id'], array('controller' => 'categories', 'action' => 'view', $problem['Category']['id'])); ?>
				</td>
				<td><?php echo h($problem['Problem']['sentence']); ?>&nbsp;</td>
				<td><?php echo h($problem['Problem']['right_answer']); ?>&nbsp;</td>
				<td><?php echo h($problem['Problem']['wrong_answer1']); ?>&nbsp;</td>
				<td><?php echo h($problem['Problem']['wrong_answer2']); ?>&nbsp;</td>
				<td><?php echo h($problem['Problem']['wrong_answer3']); ?>&nbsp;</td>
				<td><?php echo h($problem['Problem']['description']); ?>&nbsp;</td>
				<td><?php echo h($problem['Problem']['image']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($problem['User']['id'], array('controller' => 'users', 'action' => 'view', $problem['User']['id'])); ?>
				</td>
				<td><?php echo h($problem['Problem']['latitude']); ?>&nbsp;</td>
				<td><?php echo h($problem['Problem']['longitude']); ?>&nbsp;</td>
				<td><?php echo h($problem['Problem']['reference']); ?>&nbsp;</td>
				<td><?php echo h($problem['Problem']['type']); ?>&nbsp;</td>
				<td><?php echo h($problem['Problem']['created']); ?>&nbsp;</td>
				<td><?php echo h($problem['Problem']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $problem['Problem']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $problem['Problem']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $problem['Problem']['id']), null, __('Are you sure you want to delete # %s?', $problem['Problem']['id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Problem')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('controller' => 'categories', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Category')), array('controller' => 'categories', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Activities')), array('controller' => 'activities', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Activity')), array('controller' => 'activities', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Answer Histories')), array('controller' => 'answer_histories', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Answer History')), array('controller' => 'answer_histories', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>
