<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('User', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('ユーザ新規登録'); ?></legend>
				<?php
                    echo $this->BootstrapForm->input('username', array(
                        'type' => 'text',
                        'label' => 'ユーザ名',
                        'required' => 'required',
                        'helpInline' => '<span class="label label-important">' . __('必須(英数字と記号のみ)') . '</span>&nbsp;')
                     );
                	echo $this->BootstrapForm->input('email', array(
                        'type' => 'text',
                        'label' => 'メールアドレス',
                        'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('必須') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('password', array(
                        'label' => 'パスワード',
                        'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('必須') . '</span>&nbsp;')
                     );
                    echo $this->BootstrapForm->input('password_confirm', array(
                        'label' => 'パスワード確認',
                        'requried' => 'required',
                        'helpInline' => '<span class="label label-important">' . __('必須') . '</span>&nbsp;')
                    );     
        			?>
				<?php echo $this->BootstrapForm->submit(__('新規登録'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
		</ul>
		</div>
	</div>
</div>
