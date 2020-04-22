<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factura $factura
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Factura'), ['action' => 'edit', $factura->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Factura'), ['action' => 'delete', $factura->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factura->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Factura'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Factura'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="factura view content">
            <h3><?= h($factura->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($factura->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Consulta') ?></th>
                    <td><?= $this->Number->format($factura->id_consulta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Envio') ?></th>
                    <td><?= $factura->envio ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
