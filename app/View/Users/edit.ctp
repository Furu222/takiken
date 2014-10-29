<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('User', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('User')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('username', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('password', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('email', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('image', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('twitter_id');
				echo $this->BootstrapForm->input('twitter_access_token');
				echo $this->BootstrapForm->input('facebook_id');
				echo $this->BootstrapForm->input('facebook_access_token');
				echo $this->BootstrapForm->hidden('id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Activities')), array('controller' => 'activities', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Activity')), array('controller' => 'activities', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Answer Histories')), array('controller' => 'answer_histories', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Answer History')), array('controller' => 'answer_histories', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Problems')), array('controller' => 'problems', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Problem')), array('controller' => 'problems', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('User Points')), array('controller' => 'user_points', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('User Point')), array('controller' => 'user_points', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>