<?php




class Producttypes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var integer
     */
    public $name;
	
	public function initialize(){
		$this->hasMany("id", "Products", "product_types_id");
		$this->hasMany("product_types_id", "Products", "id");
	}     
}
