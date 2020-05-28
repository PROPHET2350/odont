<?php

/**
 * @var App\View\AppView $this
 * @var \App\Model\Entity\User $users
 */

$this->assign('title', 'My Account');
$this->assign('nombre', $users->nombre . ' ' . $users->apellido);
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 m-auto">
            <?=$this->Form->create($users,['url'=>['controller'=>'Users','action'=>'edit',$users->id]])?>
                <div class="form-group">
                    <?=$this->Form->text('nombre',['class'=>'form-control','required','value'=>$users->nombre])?>
                </div>
                <div class="form-group">
                    <?=$this->Form->text('apellido',['class'=>'form-control','required','value'=>$users->apellido])?>
                </div>
                <div class="form-group">
                    <?=$this->Form->number('cedula',['class'=>'form-control','required','value'=>$users->cedula])?>
                </div>
                <div class="form-group">
                    <?=$this->Form->mail('mail',['class'=>'form-control','required','value'=>$users->mail])?>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-outline-warning btn-block" name="" value="Update">
                </div>
            <?=$this->Form->end()?>
        </div>
    </div>
</div>