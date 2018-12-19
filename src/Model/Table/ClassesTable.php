<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classes Model
 *
 * @method \App\Model\Entity\Classe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Classe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Classe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Classe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classe|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Classe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Classe findOrCreate($search, callable $callback = null, $options = [])
 */
class ClassesTable extends Table
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

        $this->setTable('classes');
        $this->setDisplayField('nome_classe');
        $this->setPrimaryKey(['idClasses']);

        $this->belongsTo('Desbravador',[
            'foreignKey' => 'idDesbravador',
            'joinType' => 'INNER'
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
            ->integer('idClasses')
            ->allowEmpty('idClasses', 'create');

        $validator
            ->integer('idDesbravador')
            ->allowEmpty('idDesbravador', 'create');

        $validator
            ->scalar('nome_classe')
            ->maxLength('nome_classe', 80)
            ->requirePresence('nome_classe', 'create')
            ->notEmpty('nome_classe');

        $validator
            ->scalar('instrutor')
            ->maxLength('instrutor', 120)
            ->allowEmpty('instrutor');

        $validator
            ->date('data_conclusao')
            ->requirePresence('data_conclusao', 'create')
            ->notEmpty('data_conclusao');

        $validator
            ->dateTime('data_cad')
            ->allowEmpty('data_cad');

        return $validator;
    }
}
