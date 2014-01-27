<?php




class Products extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var string
     */
    public $products_types_id;
     
    /**
     *
     * @var integer
     */
    public $name;
     
    /**
     *
     * @var string
     */
    public $price;
     
    /**
     *
     * @var string
     */
    public $active;
     
	public function initialize(){
		$this->belongsTo("product_types_id", "ProductTypes", "id");
	}
}
