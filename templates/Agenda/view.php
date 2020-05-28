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
            <?= $this->Html->link(__('Edit Agenda'), ['action' => 'edit', $agenda->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Agenda'), ['action' => 'delete', $agenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Agenda'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Agenda'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="agenda view content">
            <h3><?= h($agenda->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Hora') ?></th>
                    <td><?= h($agenda->hora) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($agenda->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $agenda->has('user') ? $this->Html->link($agenda->user->id, ['controller' => 'Users', 'action' => 'view', $agenda->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($agenda->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($agenda->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($agenda->id_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($agenda->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
