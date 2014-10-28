<div class="problems index">
	<h2><?php echo __('Problems'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sentence'); ?></th>
			<th><?php echo $this->Paginator->sort('right_answer'); ?></th>
			<th><?php echo $this->Paginator->sort('wrong_answer1'); ?></th>
			<th><?php echo $this->Paginator->sort('wrong_answer2'); ?></th>
			<th><?php echo $this->Paginator->sort('wrong_answer3'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th><?php echo $this->Paginator->sort('reference'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
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
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $problem['Problem']['id']), array(), __('Are you sure you want to delete # %s?', $problem['Problem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Problem'), array('action' => 'add')); ?></li>
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
