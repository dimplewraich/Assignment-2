<?php 
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class ContactForm extends Form
{var $_price;

    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('email', ['type' => 'string']);
    }

    protected function _buildValidator(Validator $validator)
    {
       return $validator->add('email', 'format', [
                'rule' => 'email',
                'message' => 'A valid email address is required',
            ])->notEmpty('forename')->notEmpty('surname')->notEmpty('address')->notEmpty('city')->notEmpty('province')->notEmpty('forename')->notEmpty('postalcode')->notEmpty('telephonenumber')->notEmpty('numberofpizzas')->notEmpty('radiosize')->notEmpty('crusttype')->notEmpty('toppings') ;
 
    }

    protected function _execute(array $data)
    { 
	
	 
$k="";
$price="";
$price += count($data['toppings'])* 0.5-0.5;

$k =  implode(" ",$data['toppings']);
 
 
 $data['toppings']=$k;

 $price +=($data['radiosize']=="small")?5:0;
 $price +=($data['radiosize']=="large")?10:0;
 $price +=($data['radiosize']=="medium")?15:0;
  $price +=($data['radiosize']=="Extralarge")?20:0;
  
  
  $price +=($data['crusttype']=="StuffedCrust")?2:0;
  
  
 
 $data['price']=$price;

 
file_put_contents( 'people.txt',implode(" ",$data )     , FILE_APPEND | LOCK_EX);


 $this->_price=$price;


 
        return true;
    }

	public function setErrors($errors)
{
    $this->_errors = $errors;
}

	public function getPrice(){return $this->_price;}
}
?>