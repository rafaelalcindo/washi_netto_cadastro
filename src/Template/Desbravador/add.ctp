<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Desbravador $desbravador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Desbravador'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Unidades'), ['controller' => 'Unidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unidade'), ['controller' => 'Unidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="desbravador form large-9 medium-8 columns content">
    <?= $this->Form->create($desbravador) ?>
    <fieldset>
        <legend><?= __('Add Desbravador') ?></legend>
        <?php
            echo $this->Form->control('idUnidades', ['options' => $unidades]);
            echo $this->Form->control('nome_desbravador');
            echo $this->Form->control('sobrenome_desbravador');
            echo $this->Form->control('cep_desbravador');
            echo $this->Form->control('endereco_desbravador');
            echo $this->Form->control('completo_desbravador');
            echo $this->Form->control('cidade_desbravador');
            echo $this->Form->control('estado_desbravador');
            echo $this->Form->control('ativo_desbravador');
            echo $this->Form->control('login_desbravador');
            echo $this->Form->control('senha_desbravador');
            echo $this->Form->control('data_nasc_desbravador', ['empty' => true]);
            echo $this->Form->control('cadastrado_por');
            echo $this->Form->control('rg_desbravador');
            echo $this->Form->control('orgao_expediente_desbravador');
            echo $this->Form->control('estado_civil_desbravador');
            echo $this->Form->control('tamanho_camisa_desbravador');
            echo $this->Form->control('cpf_desbravador');
            echo $this->Form->control('data_cad_desbravador');
            echo $this->Form->control('nivel_desbravador');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
