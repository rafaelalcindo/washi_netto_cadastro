<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $class
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $class->idClasses],
                ['confirm' => __('Are you sure you want to delete # {0}?', $class->idClasses)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Classes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="classes form large-9 medium-8 columns content">
    <?= $this->Form->create($class) ?>
    <fieldset>
        <legend><?= __('Edit Class') ?></legend>
        <?php
            echo $this->Form->control('nome_classe');
            echo $this->Form->control('instrutor');
            echo $this->Form->control('data_conclusao');
            echo $this->Form->control('data_cad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
