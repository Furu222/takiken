<div class="row-fluid">
    <div class="span9">
        <?php echo $this->BootstrapForm->create('User', array('class' => 'form-heorizontal')); ?>
        <fieldset>
            <legend><?php echo(__('Login User')); ?></legend>
            <?php
                echo $this->BootstrapForm->input('username', array(
                    'label' => 'ユーザ',
                    'required' => 'required',
                    'helpInline' => '<span class="label label-important">' . __('Required'). '</span>&nbsp;'));
                echo $this->BootstrapForm->input('password', array(
                    'label' => 'パスワード',
                    'required' => 'required',
                    'helpInline' => '<span class="label label-important">' . __('Required'). '</span>&nbsp;'));
            ?>
        </fieldset>
    <?php echo $this->BootstrapForm->end(__('ログイン')); ?>
    </div>
    <div class="span3">
        <div class="well" style="padding: 8px 0; margin-top:8px;">
        <ul class="nav nav-list">
            <li class="nav-header"><?php echo __('Actions'); ?></li>
            <li><?php echo $this->Html->link(__('新規登録'), array('action' => 'add')); ?></li>
        </ul>
        </div>
    </div>
</div>
