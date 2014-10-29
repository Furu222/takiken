<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Problem', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Problem')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('category_id', array(
					'required' => 'required',
                         'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;',
                         'options' => array(0 => '文化', 1 => '歴史'),
                         'label' => 'カテゴリ'
				));
				echo $this->BootstrapForm->input('type', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;',
                         'options' => array(0 => '4択選択問題', 1 => '一問一答問題'),
                         'label' => '問題形式'
				));
				echo $this->BootstrapForm->input('sentence', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;',
                         'label' => '問題文'
				));
				echo $this->BootstrapForm->input('right_answer', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;',
                         'label' => '正解'
				));
				echo $this->BootstrapForm->input('wrong_answer1', array('label' => '誤答選択肢1'));
				echo $this->BootstrapForm->input('wrong_answer2', array('label' => '誤答選択肢2'));
				echo $this->BootstrapForm->input('wrong_answer3', array('label' => '誤答選択肢3'));
				echo $this->BootstrapForm->input('description', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;',
                         'label' => '解説文'
                    ));
				echo $this->BootstrapForm->input('image');
				//echo $this->BootstrapForm->input('user_id', array(
				//	'required' => 'required',
				//	'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				//);
                    //位置情報はwebでは使わないかも
				//echo $this->BootstrapForm->input('latitude');
				//echo $this->BootstrapForm->input('longitude');
				echo $this->BootstrapForm->input('reference', array('label' => '参考文献'));
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Problems')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('controller' => 'categories', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Category')), array('controller' => 'categories', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Activities')), array('controller' => 'activities', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Activity')), array('controller' => 'activities', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Answer Histories')), array('controller' => 'answer_histories', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Answer History')), array('controller' => 'answer_histories', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>
