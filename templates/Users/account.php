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
            <form action="">
                <div class="form-group">
                <input type="text" name="" class="form-control" value="<?=$users->nombre?>">
                </div>
                <div class="form-group">
                    <input type="text" name="" class="form-control" value="<?=$users->apellido?>">
                </div>
                <div class="form-group">
                    <input type="text" name="" class="form-control" value="<?=$users->cedula?>">
                </div>
                <div class="form-group">
                    <input type="text" name="" class="form-control" value="<?=$users->mail?>">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-outline-warning btn-block" name="" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>