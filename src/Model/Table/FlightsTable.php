<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flights Model
 *
 * @property \App\Model\Table\AirportsTable&\Cake\ORM\Association\BelongsTo $Airports
 * @property \App\Model\Table\AirportsTable&\Cake\ORM\Association\BelongsTo $Airports
 * @property \App\Model\Table\AirlinesTable&\Cake\ORM\Association\BelongsTo $Airlines
 * @property \App\Model\Table\AirportsTable&\Cake\ORM\Association\BelongsTo $Airports
 *
 * @method \App\Model\Entity\Flight newEmptyEntity()
 * @method \App\Model\Entity\Flight newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Flight[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Flight get($primaryKey, $options = [])
 * @method \App\Model\Entity\Flight findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Flight patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Flight[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Flight|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flight saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FlightsTable extends Table
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

        $this->setTable('flights');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Airports', [
            'foreignKey' => 'departing_airport_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Airports', [
            'foreignKey' => 'landing_airport_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Airlines', [
            'foreignKey' => 'airline_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Airports', [
            'foreignKey' => 'given_airport_id',
            'joinType' => 'INNER',
        ]);
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
            ->integer('departing_airport_id')
            ->requirePresence('departing_airport_id', 'create')
            ->notEmptyString('departing_airport_id');

        $validator
            ->integer('landing_airport_id')
            ->requirePresence('landing_airport_id', 'create')
            ->notEmptyString('landing_airport_id');

        $validator
            ->integer('airline_id')
            ->requirePresence('airline_id', 'create')
            ->notEmptyString('airline_id');

        $validator
            ->integer('given_airport_id')
            ->requirePresence('given_airport_id', 'create')
            ->notEmptyString('given_airport_id');
        
        $validator
            ->scalar('flight_num')
            ->maxLength('flight_num', 255)
            ->requirePresence('flight_num', 'create')
            ->notEmptyString('flight_num');


        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('departing_airport_id', 'Airports'), ['errorField' => 'departing_airport_id']);
        $rules->add($rules->existsIn('landing_airport_id', 'Airports'), ['errorField' => 'landing_airport_id']);
        $rules->add($rules->existsIn('airline_id', 'Airlines'), ['errorField' => 'airline_id']);
        $rules->add($rules->existsIn('given_airport_id', 'Airports'), ['errorField' => 'given_airport_id']);

        return $rules;
    }
}
