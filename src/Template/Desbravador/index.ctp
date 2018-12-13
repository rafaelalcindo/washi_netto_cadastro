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
                <th scope="col"><?= $this->Paginator->sort('idDesbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idUnidades') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sobrenome_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('completo_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidade_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('senha_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_nasc_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cadastrado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('orgao_expediente_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_civil_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tamanho_camisa_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_cad_desbravador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel_desbravador') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($desbravador as $desbravador): ?>
            <tr>
                <td><?= $this->Number->format($desbravador->idDesbravador) ?></td>
                <td><?= $desbravador->has('unidade') ? $this->Html->link($desbravador->unidade->idUnidades, ['controller' => 'Unidades', 'action' => 'view', $desbravador->unidade->idUnidades]) : '' ?></td>
                <td><?= h($desbravador->nome_desbravador) ?></td>
                <td><?= h($desbravador->sobrenome_desbravador) ?></td>
                <td><?= h($desbravador->cep_desbravador) ?></td>
                <td><?= h($desbravador->endereco_desbravador) ?></td>
                <td><?= h($desbravador->completo_desbravador) ?></td>
                <td><?= $this->Number->format($desbravador->cidade_desbravador) ?></td>
                <td><?= $this->Number->format($desbravador->estado_desbravador) ?></td>
                <td><?= $this->Number->format($desbravador->ativo_desbravador) ?></td>
                <td><?= h($desbravador->login_desbravador) ?></td>
                <td><?= h($desbravador->senha_desbravador) ?></td>
                <td><?= h($desbravador->data_nasc_desbravador) ?></td>
                <td><?= h($desbravador->cadastrado_por) ?></td>
                <td><?= h($desbravador->rg_desbravador) ?></td>
                <td><?= h($desbravador->orgao_expediente_desbravador) ?></td>
                <td><?= h($desbravador->estado_civil_desbravador) ?></td>
                <td><?= h($desbravador->tamanho_camisa_desbravador) ?></td>
                <td><?= h($desbravador->cpf_desbravador) ?></td>
                <td><?= h($desbravador->data_cad_desbravador) ?></td>
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
