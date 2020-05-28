<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agenda $agenda
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Agenda'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="agenda form content">
            <?= $this->Form->create($agenda) ?>
            <fieldset>
                <legend><?= __('Add Agenda') ?></legend>
                <?php
                    echo $this->Form->control('hora');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('precio');
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('id_user');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
