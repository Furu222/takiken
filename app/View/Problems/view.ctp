<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Problem');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Category'); ?></dt>
			<dd>
				<?php echo $this->Html->link($problem['Category']['id'], array('controller' => 'categories', 'action' => 'view', $problem['Category']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Sentence'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['sentence']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Right Answer'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['right_answer']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Wrong Answer1'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['wrong_answer1']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Wrong Answer2'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['wrong_answer2']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Wrong Answer3'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['wrong_answer3']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Description'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['description']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Image'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['image']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('User'); ?></dt>
			<dd>
				<?php echo $this->Html->link($problem['User']['id'], array('controller' => 'users', 'action' => 'view', $problem['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Latitude'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['latitude']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Longitude'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['longitude']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Reference'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['reference']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Type'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['type']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($problem['Problem']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Problem')), array('action' => 'edit', $problem['Problem']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Problem')), array('action' => 'delete', $problem['Problem']['id']), null, __('Are you sure you want to delete # %s?', $problem['Problem']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Problems')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Problem')), array('action' => 'add')); ?> </li>
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

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Activities')); ?></h3>
	<?php if (!empty($problem['Activity'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Action Type'); ?></th>
				<th><?php echo __('Problem Id'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($problem['Activity'] as $activity): ?>
			<tr>
				<td><?php echo $activity['id'];?></td>
				<td><?php echo $activity['user_id'];?></td>
				<td><?php echo $activity['action_type'];?></td>
				<td><?php echo $activity['problem_id'];?></td>
				<td><?php echo $activity['created'];?></td>
				<td><?php echo $activity['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'activities', 'action' => 'view', $activity['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'activities', 'action' => 'edit', $activity['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'activities', 'action' => 'delete', $activity['id']), null, __('Are you sure you want to delete # %s?', $activity['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Activity')), array('controller' => 'activities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Answer Histories')); ?></h3>
	<?php if (!empty($problem['AnswerHistory'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Client Type'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Problem Id'); ?></th>
				<th><?php echo __('Result'); ?></th>
				<th><?php echo __('Select Answer'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($problem['AnswerHistory'] as $answerHistory): ?>
			<tr>
				<td><?php echo $answerHistory['id'];?></td>
				<td><?php echo $answerHistory['client_type'];?></td>
				<td><?php echo $answerHistory['user_id'];?></td>
				<td><?php echo $answerHistory['problem_id'];?></td>
				<td><?php echo $answerHistory['result'];?></td>
				<td><?php echo $answerHistory['select_answer'];?></td>
				<td><?php echo $answerHistory['created'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'answer_histories', 'action' => 'view', $answerHistory['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'answer_histories', 'action' => 'edit', $answerHistory['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'answer_histories', 'action' => 'delete', $answerHistory['id']), null, __('Are you sure you want to delete # %s?', $answerHistory['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Answer History')), array('controller' => 'answer_histories', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
