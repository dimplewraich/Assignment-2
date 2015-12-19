<?php 
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class OrdersTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
	
	
	public function validationDefault(Validator $validator)
    {
        $validator
		 ->notEmpty('forename')
            ->requirePresence('forename')
            ->notEmpty('surname')
            ->requirePresence('surname')
			 ->notEmpty('address')
            ->requirePresence('address')
            ->notEmpty('city')
            ->requirePresence('city')
			 ->notEmpty('province')
            ->requirePresence('province')
            ->notEmpty('postalcode')
            ->requirePresence('postalcode')
			 ->notEmpty('telephonenumber')
            ->requirePresence('telephonenumber')
            ->notEmpty('numberofpizzas')
            ->requirePresence('numberofpizzas')
            ->notEmpty('email')
            ->requirePresence('email')
            ->notEmpty('radiosize')
            ->requirePresence('radiosize')
			 ->notEmpty('crusttype')
            ->requirePresence('crusttype')
            ->notEmpty('toppings')
            ->requirePresence('toppings');

        return $validator;
    }
	
}
?>