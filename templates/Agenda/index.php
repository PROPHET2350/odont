<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agenda[]|\Cake\Collection\CollectionInterface $agenda
 */
?>
<div class="agenda index content">
    <?= $this->Html->link(__('New Agenda'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Agenda') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('hora') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('id_user') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agenda as $agenda): ?>
                <tr>
                    <td><?= $this->Number->format($agenda->id) ?></td>
                    <td><?= h($agenda->hora) ?></td>
                    <td><?= h($agenda->fecha) ?></td>
                    <td><?= $this->Number->format($agenda->precio) ?></td>
                    <td><?= h($agenda->tipo) ?></td>
                    <td><?= $this->Number->format($agenda->id_user) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $agenda->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agenda->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
