<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agenda1 Model
 *
 * @method \App\Model\Entity\Agenda1 newEmptyEntity()
 * @method \App\Model\Entity\Agenda1 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Agenda1[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agenda1 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agenda1 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Agenda1 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agenda1[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agenda1|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agenda1 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agenda1[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agenda1[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agenda1[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agenda1[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Agenda1Table extends Table
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

        $this->setTable('agenda1');
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
            ->maxLength('hora', 10)
            ->requirePresence('hora', 'create')
            ->notEmptyString('hora');

        $validator
            ->scalar('fecha')
            ->maxLength('fecha', 10)
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
