<div class="answerHistories view">
<h2><?php echo __('Answer History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($answerHistory['AnswerHistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Type'); ?></dt>
		<dd>
			<?php echo h($answerHistory['AnswerHistory']['client_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($answerHistory['User']['id'], array('controller' => 'users', 'action' => 'view', $answerHistory['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Problem'); ?></dt>
		<dd>
			<?php echo $this->Html->link($answerHistory['Problem']['id'], array('controller' => 'problems', 'action' => 'view', $answerHistory['Problem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result'); ?></dt>
		<dd>
			<?php echo h($answerHistory['AnswerHistory']['result']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Select Answer'); ?></dt>
		<dd>
			<?php echo h($answerHistory['AnswerHistory']['select_answer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($answerHistory['AnswerHistory']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Answer History'), array('action' => 'edit', $answerHistory['AnswerHistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Answer History'), array('action' => 'delete', $answerHistory['AnswerHistory']['id']), array(), __('Are you sure you want to delete # %s?', $answerHistory['AnswerHistory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Answer Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer History'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
	</ul>
</div>
