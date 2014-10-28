<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($user['User']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['twitter_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter Access Token'); ?></dt>
		<dd>
			<?php echo h($user['User']['twitter_access_token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['facebook_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Access Token'); ?></dt>
		<dd>
			<?php echo h($user['User']['facebook_access_token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Activities'); ?></h3>
	<?php if (!empty($user['Activity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Action Type'); ?></th>
		<th><?php echo __('Problem Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Activity'] as $activity): ?>
		<tr>
			<td><?php echo $activity['id']; ?></td>
			<td><?php echo $activity['user_id']; ?></td>
			<td><?php echo $activity['action_type']; ?></td>
			<td><?php echo $activity['problem_id']; ?></td>
			<td><?php echo $activity['created']; ?></td>
			<td><?php echo $activity['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'activities', 'action' => 'view', $activity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'activities', 'action' => 'edit', $activity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'activities', 'action' => 'delete', $activity['id']), array(), __('Are you sure you want to delete # %s?', $activity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Answer Histories'); ?></h3>
	<?php if (!empty($user['AnswerHistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Type'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Problem Id'); ?></th>
		<th><?php echo __('Result'); ?></th>
		<th><?php echo __('Select Answer'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['AnswerHistory'] as $answerHistory): ?>
		<tr>
			<td><?php echo $answerHistory['id']; ?></td>
			<td><?php echo $answerHistory['client_type']; ?></td>
			<td><?php echo $answerHistory['user_id']; ?></td>
			<td><?php echo $answerHistory['problem_id']; ?></td>
			<td><?php echo $answerHistory['result']; ?></td>
			<td><?php echo $answerHistory['select_answer']; ?></td>
			<td><?php echo $answerHistory['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'answer_histories', 'action' => 'view', $answerHistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'answer_histories', 'action' => 'edit', $answerHistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'answer_histories', 'action' => 'delete', $answerHistory['id']), array(), __('Are you sure you want to delete # %s?', $answerHistory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Answer History'), array('controller' => 'answer_histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Problems'); ?></h3>
	<?php if (!empty($user['Problem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Sentence'); ?></th>
		<th><?php echo __('Right Answer'); ?></th>
		<th><?php echo __('Wrong Answer1'); ?></th>
		<th><?php echo __('Wrong Answer2'); ?></th>
		<th><?php echo __('Wrong Answer3'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Latitude'); ?></th>
		<th><?php echo __('Longitude'); ?></th>
		<th><?php echo __('Reference'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Problem'] as $problem): ?>
		<tr>
			<td><?php echo $problem['id']; ?></td>
			<td><?php echo $problem['category_id']; ?></td>
			<td><?php echo $problem['sentence']; ?></td>
			<td><?php echo $problem['right_answer']; ?></td>
			<td><?php echo $problem['wrong_answer1']; ?></td>
			<td><?php echo $problem['wrong_answer2']; ?></td>
			<td><?php echo $problem['wrong_answer3']; ?></td>
			<td><?php echo $problem['description']; ?></td>
			<td><?php echo $problem['image']; ?></td>
			<td><?php echo $problem['user_id']; ?></td>
			<td><?php echo $problem['latitude']; ?></td>
			<td><?php echo $problem['longitude']; ?></td>
			<td><?php echo $problem['reference']; ?></td>
			<td><?php echo $problem['type']; ?></td>
			<td><?php echo $problem['created']; ?></td>
			<td><?php echo $problem['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'problems', 'action' => 'view', $problem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'problems', 'action' => 'edit', $problem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'problems', 'action' => 'delete', $problem['id']), array(), __('Are you sure you want to delete # %s?', $problem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Points'); ?></h3>
	<?php if (!empty($user['UserPoint'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Answer Point'); ?></th>
		<th><?php echo __('Sakumon Point'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserPoint'] as $userPoint): ?>
		<tr>
			<td><?php echo $userPoint['id']; ?></td>
			<td><?php echo $userPoint['user_id']; ?></td>
			<td><?php echo $userPoint['answer_point']; ?></td>
			<td><?php echo $userPoint['sakumon_point']; ?></td>
			<td><?php echo $userPoint['created']; ?></td>
			<td><?php echo $userPoint['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_points', 'action' => 'view', $userPoint['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_points', 'action' => 'edit', $userPoint['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_points', 'action' => 'delete', $userPoint['id']), array(), __('Are you sure you want to delete # %s?', $userPoint['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Point'), array('controller' => 'user_points', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
