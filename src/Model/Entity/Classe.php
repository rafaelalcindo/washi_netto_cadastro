<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Class Entity
 *
 * @property int $idClasses
 * @property int $idDesbravador
 * @property string $nome_classe
 * @property string|null $instrutor
 * @property \Cake\I18n\FrozenDate $data_conclusao
 * @property \Cake\I18n\FrozenTime|null $data_cad
 */
class Classe extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome_classe' => true,
        'idDesbravador' => true,
        'instrutor' => true,
        'data_conclusao' => true,
        'data_cad' => true
    ];
}
