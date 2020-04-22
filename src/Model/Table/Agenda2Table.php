<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agenda2 Model
 *
 * @method \App\Model\Entity\Agenda2 newEmptyEntity()
 * @method \App\Model\Entity\Agenda2 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Agenda2[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agenda2 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agenda2 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Agenda2 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agenda2[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agenda2|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agenda2 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agenda2[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agenda2[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agenda2[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agenda2[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Agenda2Table extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('agenda2');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('hora')
            ->maxLength('hora', 150)
            ->requirePresence('hora', 'create')
            ->notEmptyString('hora');

        $validator
            ->scalar('fecha')
            ->maxLength('fecha', 150)
            ->requirePresence('fecha', 'create')
            ->notEmptyString('fecha');

        $validator
            ->decimal('precio')
            ->requirePresence('precio', 'create')
            ->notEmptyString('precio');

        $validator
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->notEmptyString('id_user');

        return $validator;
    }
}
