<?php

/**
 * @var App\View\AppView $this
 */
?>
<div class="container mt-5">
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <p>Se le ha enviado un mail con una clave para cambiar la contraseña</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $this->Form->create() ?>
                        <div class="form-group">
                            <?= $this->Form->text('key', ['class' => 'form-control', 'required', 'id' => 'key', 'placeholder' => 'Clave privada*']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->password('pass', ['class' => 'form-control', 'required', 'id' => 'pass', 'placeholder' => 'Nueva contraseña*']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Html->link('back',['controller' => 'Users', 'action' => 'account'])?>
                        </div>
                        <div class="form-group text-center">
                            <?= $this->Form->submit('Changed', ['class' => 'btn btn-primary']) ?>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>