<div class="answerHistories index">
	<h2><?php echo __('Answer Histories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_type'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('problem_id'); ?></th>
			<th><?php echo $this->Paginator->sort('result'); ?></th>
			<th><?php echo $this->Paginator->sort('select_answer'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($answerHistories as $answerHistory): ?>
	<tr>
		<td><?php echo h($answerHistory['AnswerHistory']['id']); ?>&nbsp;</td>
		<td><?php echo h($answerHistory['AnswerHistory']['client_type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($answerHistory['User']['id'], array('controller' => 'users', 'action' => 'view', $answerHistory['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($answerHistory['Problem']['id'], array('controller' => 'problems', 'action' => 'view', $answerHistory['Problem']['id'])); ?>
		</td>
		<td><?php echo h($answerHistory['AnswerHistory']['result']); ?>&nbsp;</td>
		<td><?php echo h($answerHistory['AnswerHistory']['select_answer']); ?>&nbsp;</td>
		<td><?php echo h($answerHistory['AnswerHistory']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $answerHistory['AnswerHistory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $answerHistory['AnswerHistory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $answerHistory['AnswerHistory']['id']), array(), __('Are you sure you want to delete # %s?', $answerHistory['AnswerHistory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Answer History'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
	</ul>
</div>
