<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Desbravador $desbravador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Desbravador'), ['action' => 'edit', $desbravador->idDesbravador]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Desbravador'), ['action' => 'delete', $desbravador->idDesbravador], ['confirm' => __('Are you sure you want to delete # {0}?', $desbravador->idDesbravador)]) ?> </li>
        <li><?= $this->Html->link(__('List Desbravador'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Desbravador'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Unidades'), ['controller' => 'Unidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unidade'), ['controller' => 'Unidades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="desbravador view large-9 medium-8 columns content">
    <h3><?= h($desbravador->nome_desbravador) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Unidade') ?></th>
            <td><?= $desbravador->has('unidade') ? $this->Html->link($desbravador->unidade->idUnidades, ['controller' => 'Unidades', 'action' => 'view', $desbravador->unidade->idUnidades]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Desbravador') ?></th>
            <td><?= h($desbravador->nome_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sobrenome Desbravador') ?></th>
            <td><?= h($desbravador->sobrenome_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep Desbravador') ?></th>
            <td><?= h($desbravador->cep_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco Desbravador') ?></th>
            <td><?= h($desbravador->endereco_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Completo Desbravador') ?></th>
            <td><?= h($desbravador->completo_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login Desbravador') ?></th>
            <td><?= h($desbravador->login_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha Desbravador') ?></th>
            <td><?= h($desbravador->senha_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cadastrado Por') ?></th>
            <td><?= h($desbravador->cadastrado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg Desbravador') ?></th>
            <td><?= h($desbravador->rg_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Orgao Expediente Desbravador') ?></th>
            <td><?= h($desbravador->orgao_expediente_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado Civil Desbravador') ?></th>
            <td><?= h($desbravador->estado_civil_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tamanho Camisa Desbravador') ?></th>
            <td><?= h($desbravador->tamanho_camisa_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf Desbravador') ?></th>
            <td><?= h($desbravador->cpf_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdDesbravador') ?></th>
            <td><?= $this->Number->format($desbravador->idDesbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade Desbravador') ?></th>
            <td><?= $this->Number->format($desbravador->cidade_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado Desbravador') ?></th>
            <td><?= $this->Number->format($desbravador->estado_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo Desbravador') ?></th>
            <td><?= $this->Number->format($desbravador->ativo_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel Desbravador') ?></th>
            <td><?= $this->Number->format($desbravador->nivel_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Nasc Desbravador') ?></th>
            <td><?= h($desbravador->data_nasc_desbravador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Cad Desbravador') ?></th>
            <td><?= h($desbravador->data_cad_desbravador) ?></td>
        </tr>
    </table>
</div>
