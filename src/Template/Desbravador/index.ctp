<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Desbravador[]|\Cake\Collection\CollectionInterface $desbravador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Desbravador'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Unidades'), ['controller' => 'Unidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unidade'), ['controller' => 'Unidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="desbravador index large-9 medium-8 columns content">
    <h3><?= __('Desbravador') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('idUnidades') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sobrenome_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cadastrado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel_desbravador') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($desbravador as $desbravador): ?>
            <tr>
                
                <td><?= $desbravador->has('unidade') ? $this->Html->link($desbravador->unidade->idUnidades, ['controller' => 'Unidades', 'action' => 'view', $desbravador->unidade->idUnidades]) : '' ?></td>
                <td><?= h($desbravador->nome_desbravador) ?></td>
                <td><?= h($desbravador->sobrenome_desbravador) ?></td>
                <td><?= $this->Number->format($desbravador->ativo_desbravador) ?></td>
                <td><?= h($desbravador->cadastrado_por) ?></td>
                <td><?= $this->Number->format($desbravador->nivel_desbravador) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $desbravador->idDesbravador]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $desbravador->idDesbravador]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $desbravador->idDesbravador], ['confirm' => __('Are you sure you want to delete # {0}?', $desbravador->idDesbravador)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
