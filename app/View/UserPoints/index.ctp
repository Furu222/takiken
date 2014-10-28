<div class="userPoints index">
	<h2><?php echo __('User Points'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('answer_point'); ?></th>
			<th><?php echo $this->Paginator->sort('sakumon_point'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($userPoints as $userPoint): ?>
	<tr>
		<td><?php echo h($userPoint['UserPoint']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userPoint['User']['id'], array('controller' => 'users', 'action' => 'view', $userPoint['User']['id'])); ?>
		</td>
		<td><?php echo h($userPoint['UserPoint']['answer_point']); ?>&nbsp;</td>
		<td><?php echo h($userPoint['UserPoint']['sakumon_point']); ?>&nbsp;</td>
		<td><?php echo h($userPoint['UserPoint']['created']); ?>&nbsp;</td>
		<td><?php echo h($userPoint['UserPoint']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userPoint['UserPoint']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userPoint['UserPoint']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userPoint['UserPoint']['id']), array(), __('Are you sure you want to delete # %s?', $userPoint['UserPoint']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New User Point'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
