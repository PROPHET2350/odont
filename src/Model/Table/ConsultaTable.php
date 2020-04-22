<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Consulta Model
 *
 * @method \App\Model\Entity\Consultum newEmptyEntity()
 * @method \App\Model\Entity\Consultum newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Consultum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Consultum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Consultum findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Consultum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Consultum[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Consultum|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultum saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultum[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Consultum[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Consultum[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Consultum[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ConsultaTable extends Table
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

        $this->setTable('consulta');
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
            ->integer('id_usuario')
            ->requirePresence('id_usuario', 'create')
            ->notEmptyString('id_usuario');

        $validator
            ->integer('id_empleado')
            ->requirePresence('id_empleado', 'create')
            ->notEmptyString('id_empleado');

        $validator
            ->decimal('precio')
            ->requirePresence('precio', 'create')
            ->notEmptyString('precio');

        $validator
            ->scalar('tratamiento')
            ->maxLength('tratamiento', 150)
            ->requirePresence('tratamiento', 'create')
            ->notEmptyString('tratamiento');

        $validator
            ->scalar('forma_pago')
            ->maxLength('forma_pago', 150)
            ->requirePresence('forma_pago', 'create')
            ->notEmptyString('forma_pago');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        return $validator;
    }
}
