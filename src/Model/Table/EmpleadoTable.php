<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empleado Model
 *
 * @method \App\Model\Entity\Empleado newEmptyEntity()
 * @method \App\Model\Entity\Empleado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Empleado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empleado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empleado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Empleado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmpleadoTable extends Table
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

        $this->setTable('empleado');
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
            ->scalar('nomb')
            ->maxLength('nomb', 150)
            ->requirePresence('nomb', 'create')
            ->notEmptyString('nomb');

        $validator
            ->scalar('apellido')
            ->maxLength('apellido', 150)
            ->requirePresence('apellido', 'create')
            ->notEmptyString('apellido');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 150)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('mail')
            ->maxLength('mail', 150)
            ->requirePresence('mail', 'create')
            ->notEmptyString('mail');

        return $validator;
    }
}
