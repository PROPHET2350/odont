<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Login
                    </h4>
                </div>
                <div class="card-body">
                    <?= $this->Form->create(null,['url' => ['controller' => 'Users','action'=>'login']]) ?>
                    <div class="form-group">
                        <?= $this->Form->text('mail',['class'=>'form-control','placeholder'=>'Email Address']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->password('password',['class'=>'form-control','placeholder'=>'Password']) ?>
                    </div>
                    <?= $this->Html->link('Create Account',['controller'=>'Users','action'=>'createUser']); ?>
                    <div class="form-group">
                        <?= $this->Form->submit('Login',['class'=>'btn btn-outline-success btn-block']); ?>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
