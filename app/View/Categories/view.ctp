<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['category_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array(), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Problems'); ?></h3>
	<?php if (!empty($category['Problem'])): ?>
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
	<?php foreach ($category['Problem'] as $problem): ?>
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
