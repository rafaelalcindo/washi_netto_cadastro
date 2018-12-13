<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Desbravador Entity
 *
 * @property int $idDesbravador
 * @property int $idUnidades
 * @property string $nome_desbravador
 * @property string $sobrenome_desbravador
 * @property string|null $cep_desbravador
 * @property string $endereco_desbravador
 * @property string $completo_desbravador
 * @property int $cidade_desbravador
 * @property int $estado_desbravador
 * @property int $ativo_desbravador
 * @property string $login_desbravador
 * @property string $senha_desbravador
 * @property \Cake\I18n\FrozenDate|null $data_nasc_desbravador
 * @property string|null $cadastrado_por
 * @property string|null $rg_desbravador
 * @property string|null $orgao_expediente_desbravador
 * @property string $estado_civil_desbravador
 * @property string|null $tamanho_camisa_desbravador
 * @property string|null $cpf_desbravador
 * @property \Cake\I18n\FrozenTime|null $data_cad_desbravador
 * @property int|null $nivel_desbravador
 */
class Desbravador extends Entity
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
        'nome_desbravador' => true,
        'sobrenome_desbravador' => true,
        'cep_desbravador' => true,
        'endereco_desbravador' => true,
        'completo_desbravador' => true,
        'cidade_desbravador' => true,
        'estado_desbravador' => true,
        'ativo_desbravador' => true,
        'login_desbravador' => true,
        'senha_desbravador' => true,
        'data_nasc_desbravador' => true,
        'cadastrado_por' => true,
        'rg_desbravador' => true,
        'orgao_expediente_desbravador' => true,
        'estado_civil_desbravador' => true,
        'tamanho_camisa_desbravador' => true,
        'cpf_desbravador' => true,
        'data_cad_desbravador' => true,
        'nivel_desbravador' => true
    ];
}
