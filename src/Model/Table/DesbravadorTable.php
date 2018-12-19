<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Desbravador Model
 *
 * @method \App\Model\Entity\Desbravador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Desbravador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Desbravador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Desbravador|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Desbravador|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Desbravador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Desbravador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Desbravador findOrCreate($search, callable $callback = null, $options = [])
 */
class DesbravadorTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('desbravador');
        $this->setDisplayField('nome_desbravador');
        $this->setPrimaryKey(['idDesbravador']);

        $this->belongsTo('Unidades',[
            'foreignKey' => 'idUnidades',
            'joinType' => 'INNER'
        ]);

        $this->hasMany('Classes',[
            'foreignKey' => 'idDesbravador'
        ]);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idDesbravador')
            ->allowEmpty('idDesbravador', 'create');

        $validator
            ->integer('idUnidades')
            ->allowEmpty('idUnidades', 'create');

        $validator
            ->scalar('nome_desbravador')
            ->maxLength('nome_desbravador', 150)
            ->requirePresence('nome_desbravador', 'create')
            ->notEmpty('nome_desbravador');

        $validator
            ->scalar('sobrenome_desbravador')
            ->maxLength('sobrenome_desbravador', 170)
            ->requirePresence('sobrenome_desbravador', 'create')
            ->notEmpty('sobrenome_desbravador');

        $validator
            ->scalar('cep_desbravador')
            ->maxLength('cep_desbravador', 20)
            ->allowEmpty('cep_desbravador');

        $validator
            ->scalar('endereco_desbravador')
            ->maxLength('endereco_desbravador', 160)
            ->requirePresence('endereco_desbravador', 'create')
            ->notEmpty('endereco_desbravador');

        $validator
            ->scalar('completo_desbravador')
            ->maxLength('completo_desbravador', 200)
            ->requirePresence('completo_desbravador', 'create')
            ->notEmpty('completo_desbravador');

        $validator
            ->integer('cidade_desbravador')
            ->requirePresence('cidade_desbravador', 'create')
            ->notEmpty('cidade_desbravador');

        $validator
            ->integer('estado_desbravador')
            ->requirePresence('estado_desbravador', 'create')
            ->notEmpty('estado_desbravador');

        $validator
            ->requirePresence('ativo_desbravador', 'create')
            ->notEmpty('ativo_desbravador');

        $validator
            ->scalar('login_desbravador')
            ->maxLength('login_desbravador', 100)
            ->requirePresence('login_desbravador', 'create')
            ->notEmpty('login_desbravador')
            ->add('login_desbravador', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('senha_desbravador')
            ->maxLength('senha_desbravador', 100)
            ->requirePresence('senha_desbravador', 'create')
            ->notEmpty('senha_desbravador');

        $validator
            ->date('data_nasc_desbravador')
            ->allowEmpty('data_nasc_desbravador');

        $validator
            ->scalar('cadastrado_por')
            ->maxLength('cadastrado_por', 45)
            ->allowEmpty('cadastrado_por');

        $validator
            ->scalar('rg_desbravador')
            ->maxLength('rg_desbravador', 45)
            ->allowEmpty('rg_desbravador');

        $validator
            ->scalar('orgao_expediente_desbravador')
            ->maxLength('orgao_expediente_desbravador', 120)
            ->allowEmpty('orgao_expediente_desbravador');

        $validator
            ->scalar('estado_civil_desbravador')
            ->maxLength('estado_civil_desbravador', 50)
            ->requirePresence('estado_civil_desbravador', 'create')
            ->notEmpty('estado_civil_desbravador');

        $validator
            ->scalar('tamanho_camisa_desbravador')
            ->maxLength('tamanho_camisa_desbravador', 45)
            ->allowEmpty('tamanho_camisa_desbravador');

        $validator
            ->scalar('cpf_desbravador')
            ->maxLength('cpf_desbravador', 45)
            ->allowEmpty('cpf_desbravador');

        $validator
            ->dateTime('data_cad_desbravador')
            ->allowEmpty('data_cad_desbravador');

        $validator
            ->integer('nivel_desbravador')
            ->allowEmpty('nivel_desbravador');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['login_desbravador']));

        return $rules;
    }
}
