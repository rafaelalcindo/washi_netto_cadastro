<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DesbravadorFixture
 *
 */
class DesbravadorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'desbravador';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idDesbravador' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'idUnidades' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nome_desbravador' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'sobrenome_desbravador' => ['type' => 'string', 'length' => 170, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cep_desbravador' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'endereco_desbravador' => ['type' => 'string', 'length' => 160, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'completo_desbravador' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cidade_desbravador' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estado_desbravador' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ativo_desbravador' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'login_desbravador' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'senha_desbravador' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'data_nasc_desbravador' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'cadastrado_por' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'rg_desbravador' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'orgao_expediente_desbravador' => ['type' => 'string', 'length' => 120, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'estado_civil_desbravador' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tamanho_camisa_desbravador' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cpf_desbravador' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'data_cad_desbravador' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'nivel_desbravador' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Desbravador_Unidades1_idx' => ['type' => 'index', 'columns' => ['idUnidades'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idDesbravador', 'idUnidades'], 'length' => []],
            'login_desbravador_UNIQUE' => ['type' => 'unique', 'columns' => ['login_desbravador'], 'length' => []],
            'fk_Desbravador_Unidades1' => ['type' => 'foreign', 'columns' => ['idUnidades'], 'references' => ['unidades', 'idUnidades'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'idDesbravador' => 1,
                'idUnidades' => 1,
                'nome_desbravador' => 'Lorem ipsum dolor sit amet',
                'sobrenome_desbravador' => 'Lorem ipsum dolor sit amet',
                'cep_desbravador' => 'Lorem ipsum dolor ',
                'endereco_desbravador' => 'Lorem ipsum dolor sit amet',
                'completo_desbravador' => 'Lorem ipsum dolor sit amet',
                'cidade_desbravador' => 1,
                'estado_desbravador' => 1,
                'ativo_desbravador' => 1,
                'login_desbravador' => 'Lorem ipsum dolor sit amet',
                'senha_desbravador' => 'Lorem ipsum dolor sit amet',
                'data_nasc_desbravador' => '2018-12-13',
                'cadastrado_por' => 'Lorem ipsum dolor sit amet',
                'rg_desbravador' => 'Lorem ipsum dolor sit amet',
                'orgao_expediente_desbravador' => 'Lorem ipsum dolor sit amet',
                'estado_civil_desbravador' => 'Lorem ipsum dolor sit amet',
                'tamanho_camisa_desbravador' => 'Lorem ipsum dolor sit amet',
                'cpf_desbravador' => 'Lorem ipsum dolor sit amet',
                'data_cad_desbravador' => 1544661487,
                'nivel_desbravador' => 1
            ],
        ];
        parent::init();
    }
}
