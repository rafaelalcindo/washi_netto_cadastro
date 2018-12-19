<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $classes
 */
    use Cake\ORM\TableRegistry;
    use App\Model\Entity\Desbravador;
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Class'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="classes index large-9 medium-8 columns content">
    <h3><?= __('Classes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idClasses') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idDesbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_classe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('instrutor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_conclusao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_cad') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($classes as $class): ?>
            <tr>
                <td><?= $this->Number->format($class->idClasses) ?></td>
                <td><?php 
                    $desbravador = TableRegistry::get('Desbravador')->find()->where(['idDesbravador' => $class->idDesbravador])->toList();
                ?>
                <?= $desbravador[0]->nome_desbravador ?>                
                </td>
                <td><?= h($class->nome_classe) ?></td>
                <td><?= h($class->instrutor) ?></td>
                <td><?= h($class->data_conclusao) ?></td>
                <td><?= h($class->data_cad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $class->idClasses]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $class->idClasses]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $class->idClasses], ['confirm' => __('Are you sure you want to delete # {0}?', $class->idClasses)]) ?>
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
