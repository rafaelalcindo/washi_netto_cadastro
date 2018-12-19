<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $class
 */
use Cake\I18n\Time;
use Cake\ORM\TableRegistry;
use App\Model\Entity\Desbravador;

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Class'), ['action' => 'edit', $class->idClasses]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Class'), ['action' => 'delete', $class->idClasses], ['confirm' => __('Are you sure you want to delete # {0}?', $class->idClasses)]) ?> </li>
        <li><?= $this->Html->link(__('List Classes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Class'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="classes view large-9 medium-8 columns content">
    <h3><?= h($class->idClasses) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Classe') ?></th>
            <td><?= h($class->nome_classe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instrutor') ?></th>
            <td><?= h($class->instrutor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdClasses') ?></th>
            <td><?= $this->Number->format($class->idClasses) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desbracador') ?></th>
            <?php 
                    $desbravador = TableRegistry::get('Desbravador')->find()->where(['idDesbravador' => $class->idDesbravador])->toList();
                ?>
                
            <td><?=  $desbravador[0]->nome_desbravador   ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Conclusao') ?></th>
            <td><?php
                $tempo = new Time($class->data_conclusao);
                echo $tempo->i18nFormat('dd/MM/yyyy');
             ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Cad') ?></th>
            <td><?php
                $tempo = new Time($class->data_cad);
                echo $tempo->i18nFormat('dd/MM/yyyy');
             ?></td>
        </tr>
    </table>
</div>
