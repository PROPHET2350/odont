<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NotificacionEmp Model
 *
 * @method \App\Model\Entity\NotificacionEmp newEmptyEntity()
 * @method \App\Model\Entity\NotificacionEmp newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\NotificacionEmp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NotificacionEmp get($primaryKey, $options = [])
 * @method \App\Model\Entity\NotificacionEmp findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\NotificacionEmp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\NotificacionEmp[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\NotificacionEmp|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NotificacionEmp saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NotificacionEmp[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\NotificacionEmp[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\NotificacionEmp[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\NotificacionEmp[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NotificacionEmpTable extends Table
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

        $this->setTable('notificacion_emp');
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
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 250)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->scalar('url')
            ->maxLength('url', 250)
            ->requirePresence('url', 'create')
            ->notEmptyString('url');

        $validator
            ->boolean('visto')
            ->requirePresence('visto', 'create')
            ->notEmptyString('visto');

        return $validator;
    }
}
