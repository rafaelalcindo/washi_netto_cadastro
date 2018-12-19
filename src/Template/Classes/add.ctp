<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $class
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista de Classes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="classes form large-9 medium-8 columns content">
    <?= $this->Form->create($class) ?>

    <fieldset>
        <legend><?= __('Add Class') ?></legend>
        <?php
            
            echo $this->Form->control('nome_classe');
            echo $this->Form->control('instrutor');
            echo $this->Form->select(
                'idDesbravador',
                $desbravadores,
                [
                    'value' => $desbravadores
                ]
            );
            echo $this->Form->control('data_conclusao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
