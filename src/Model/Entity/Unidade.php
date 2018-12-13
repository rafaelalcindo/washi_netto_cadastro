<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Unidade Entity
 *
 * @property int $idUnidades
 * @property string $nome_unidade
 * @property int|null $pontuacao_unidade
 * @property string|null $equipamentos
 */
class Unidade extends Entity
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
        'nome_unidade' => true,
        'pontuacao_unidade' => true,
        'equipamentos' => true
    ];
}
