<?php




class DealInfoOption extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $option_id;
     
    /**
     *
     * @var string
     */
    public $parent_id;
     
    /**
     *
     * @var integer
     */
    public $deal_id;
     
    /**
     *
     * @var string
     */
    public $option_kind;
     
    /**
     *
     * @var string
     */
    public $option_value;
     
    /**
     *
     * @var integer
     */
    public $option_cnt;
     
    /**
     *
     * @var integer
     */
    public $used_cnt;
     
    /**
     *
     * @var integer
     */
    public $option_price;
     
    /**
     *
     * @var double
     */
    public $option_commission;
     
    /**
     *
     * @var integer
     */
    public $option_commission_flag;
     
    /**
     *
     * @var integer
     */
    public $option_commission_price_flag;
     
    /**
     *
     * @var integer
     */
    public $option_commission_price;
     
    /**
     *
     * @var integer
     */
    public $option_standard_commission_flag;
     
    /**
     *
     * @var string
     */
    public $company_sub_code;
     
    /**
     *
     * @var integer
     */
    public $option_price_sale;
     
    /**
     *
     * @var integer
     */
    public $option_price_org;
     
    /**
     *
     * @var integer
     */
    public $dc_rate;
     
    /**
     *
     * @var integer
     */
    public $option_group_id;
	
	/**
	 * Initializer method for model.
	 */
	public function initialize(){
		$this->hasMany("deal_id", "deal_info", "deal_info_option_deal_id");
		$this->hasMany("deal_info_option_deal_id", "deal_info", "deal_id");
	}
     
}
