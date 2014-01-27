<?php




class DealInfo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $deal_id;
     
    /**
     *
     * @var integer
     */
    public $parent_id;
     
    /**
     *
     * @var string
     */
    public $company_id;
     
    /**
     *
     * @var integer
     */
    public $theme_id;
     
    /**
     *
     * @var string
     */
    public $sale_type;
     
    /**
     *
     * @var integer
     */
    public $price;
     
    /**
     *
     * @var integer
     */
    public $price_org;
     
    /**
     *
     * @var integer
     */
    public $price_org_type;
     
    /**
     *
     * @var integer
     */
    public $price_org_time;
     
    /**
     *
     * @var integer
     */
    public $ship_price_type;
     
    /**
     *
     * @var integer
     */
    public $price_ship;
     
    /**
     *
     * @var integer
     */
    public $qty_free_ship;
     
    /**
     *
     * @var integer
     */
    public $price_free_ship;
     
    /**
     *
     * @var integer
     */
    public $qty_ship_limit;
     
    /**
     *
     * @var integer
     */
    public $price_coupon;
     
    /**
     *
     * @var integer
     */
    public $price_supply;
     
    /**
     *
     * @var integer
     */
    public $price_limit;
     
    /**
     *
     * @var integer
     */
    public $dc_rate;
     
    /**
     *
     * @var string
     */
    public $commission;
     
    /**
     *
     * @var string
     */
    public $point;
     
    /**
     *
     * @var integer
     */
    public $qty_min;
     
    /**
     *
     * @var integer
     */
    public $qty_max;
     
    /**
     *
     * @var integer
     */
    public $qty_sale_quota;
     
    /**
     *
     * @var integer
     */
    public $qty_token_limit;
     
    /**
     *
     * @var integer
     */
    public $qty_point_limit;
     
    /**
     *
     * @var integer
     */
    public $deal_status;
     
    /**
     *
     * @var integer
     */
    public $min_sale_unit;
     
    /**
     *
     * @var string
     */
    public $md_id;
     
    /**
     *
     * @var integer
     */
    public $sale_start_time;
     
    /**
     *
     * @var integer
     */
    public $sale_end_time;
     
    /**
     *
     * @var integer
     */
    public $teaser_start_time;
     
    /**
     *
     * @var integer
     */
    public $teaser_end_time;
     
    /**
     *
     * @var integer
     */
    public $valid_start_time;
     
    /**
     *
     * @var integer
     */
    public $valid_end_time;
     
    /**
     *
     * @var integer
     */
    public $refund_duration;
     
    /**
     *
     * @var integer
     */
    public $usable_today;
     
    /**
     *
     * @var integer
     */
    public $usable_trade;
     
    /**
     *
     * @var integer
     */
    public $usable_token_code;
     
    /**
     *
     * @var integer
     */
    public $usable_book;
     
    /**
     *
     * @var integer
     */
    public $goods_type;
     
    /**
     *
     * @var string
     */
    public $addr_latitude;
     
    /**
     *
     * @var string
     */
    public $addr_longitude;
     
    /**
     *
     * @var string
     */
    public $addr_naver;
     
    /**
     *
     * @var string
     */
    public $addr_daum;
     
    /**
     *
     * @var string
     */
    public $addr_google;
     
    /**
     *
     * @var integer
     */
    public $reg_time;
     
    /**
     *
     * @var integer
     */
    public $dupl_limit;
     
    /**
     *
     * @var string
     */
    public $courier_company;
     
    /**
     *
     * @var string
     */
    public $deal_check_point;
     
    /**
     *
     * @var integer
     */
    public $qrcode_flag;
     
    /**
     *
     * @var integer
     */
    public $barcode_flag;
     
    /**
     *
     * @var integer
     */
    public $auto_open_flag;
     
    /**
     *
     * @var integer
     */
    public $independ_flag;
     
    /**
     *
     * @var integer
     */
    public $main_flag;
     
    /**
     *
     * @var integer
     */
    public $issue_flag;
     
    /**
     *
     * @var integer
     */
    public $printable_flag;
     
    /**
     *
     * @var integer
     */
    public $display_order;
     
    /**
     *
     * @var integer
     */
    public $coupon_code_flag;
     
    /**
     *
     * @var integer
     */
    public $coupon_type;
     
    /**
     *
     * @var string
     */
    public $aff_deal_id;
     
    /**
     *
     * @var integer
     */
    public $deal_type;
     
    /**
     *
     * @var string
     */
    public $department_id;
     
    /**
     *
     * @var string
     */
    public $team_id;
     
    /**
     *
     * @var string
     */
    public $editor_id;
     
    /**
     *
     * @var integer
     */
    public $editor_department_id;
     
    /**
     *
     * @var string
     */
    public $photographer_id;
     
    /**
     *
     * @var integer
     */
    public $designer_department_id;
     
    /**
     *
     * @var string
     */
    public $designer_id;
     
    /**
     *
     * @var integer
     */
    public $option_flag;
     
    /**
     *
     * @var integer
     */
    public $contract_start_date;
     
    /**
     *
     * @var integer
     */
    public $contract_end_date;
     
    /**
     *
     * @var string
     */
    public $refund_condition;
     
    /**
     *
     * @var string
     */
    public $service_qty_memo;
     
    /**
     *
     * @var integer
     */
    public $contribute_flag;
     
    /**
     *
     * @var integer
     */
    public $contribute_price;
     
    /**
     *
     * @var integer
     */
    public $point_flag;
     
    /**
     *
     * @var integer
     */
    public $event_flag;
     
    /**
     *
     * @var integer
     */
    public $coupon_length;
     
    /**
     *
     * @var integer
     */
    public $coupon_sms_type;
     
    /**
     *
     * @var string
     */
    public $business_time_memo;
     
    /**
     *
     * @var string
     */
    public $book_memo;
     
    /**
     *
     * @var string
     */
    public $parking_memo;
     
    /**
     *
     * @var integer
     */
    public $num_admit_customer;
     
    /**
     *
     * @var string
     */
    public $use_limit_memo;
     
    /**
     *
     * @var integer
     */
    public $ship_start_date;
     
    /**
     *
     * @var integer
     */
    public $ship_end_date;
     
    /**
     *
     * @var string
     */
    public $ship_memo;
     
    /**
     *
     * @var integer
     */
    public $bundle_ship_flag;
     
    /**
     *
     * @var integer
     */
    public $loc_expose_flag;
     
    /**
     *
     * @var string
     */
    public $business_time;
     
    /**
     *
     * @var integer
     */
    public $qty_use_quota;
     
    /**
     *
     * @var integer
     */
    public $blind_flag;
     
    /**
     *
     * @var string
     */
    public $deal_level;
     
    /**
     *
     * @var integer
     */
    public $approval_status;
     
    /**
     *
     * @var integer
     */
    public $update_time;
     
    /**
     *
     * @var string
     */
    public $reg_user_id;
     
    /**
     *
     * @var string
     */
    public $update_user_id;
     
    /**
     *
     * @var integer
     */
    public $md_event_flag;
     
    /**
     *
     * @var integer
     */
    public $manual_issue_type;
     
    /**
     *
     * @var integer
     */
    public $service_type;
     
    /**
     *
     * @var integer
     */
    public $present_flag;
     
    /**
     *
     * @var integer
     */
    public $payment_card_flag;
     
    /**
     *
     * @var integer
     */
    public $payment_direct_flag;
     
    /**
     *
     * @var integer
     */
    public $payment_mobile_flag;
     
    /**
     *
     * @var integer
     */
    public $delete_flag;
     
    /**
     *
     * @var string
     */
    public $sale_acting_company_id;
     
    /**
     *
     * @var integer
     */
    public $contents_type;
     
    /**
     *
     * @var integer
     */
    public $ssn_flag;
     
    /**
     *
     * @var integer
     */
    public $option_depth;
     
    /**
     *
     * @var integer
     */
    public $security_ship_flag;
     
    /**
     *
     * @var integer
     */
    public $deal_group_id;
     
    /**
     *
     * @var integer
     */
    public $branch_display_flag;
     
    /**
     *
     * @var integer
     */
    public $now_flag;
     
    /**
     *
     * @var string
     */
    public $onecut_sticker_type;
     
    /**
     *
     * @var integer
     */
    public $ship_type;
     
    /**
     *
     * @var integer
     */
    public $quick_ship_time;
     
    /**
     *
     * @var integer
     */
    public $agreement_type;
     
    /**
     *
     * @var string
     */
    public $circulation_id;
     
    /**
     *
     * @var integer
     */
    public $category_code;
     
    /**
     *
     * @var string
     */
    public $manager_id;
     
    /**
     *
     * @var integer
     */
    public $map_status;
     
    /**
     *
     * @var integer
     */
    public $refund_price_type;
     
    /**
     *
     * @var integer
     */
    public $refund_price_ship;
     
    /**
     *
     * @var integer
     */
    public $exchange_price_type;
     
    /**
     *
     * @var integer
     */
    public $exchange_price_ship;
     
    /**
     *
     * @var integer
     */
    public $sale_coupon_partner_ship;
     
    /**
     *
     * @var integer
     */
    public $tax_flag;
	
    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'deal_id' => 'deal_id', 
            'parent_id' => 'parent_id', 
            'company_id' => 'company_id', 
            'theme_id' => 'theme_id', 
            'sale_type' => 'sale_type', 
            'price' => 'price', 
            'price_org' => 'price_org', 
            'price_org_type' => 'price_org_type', 
            'price_org_time' => 'price_org_time', 
            'ship_price_type' => 'ship_price_type', 
            'price_ship' => 'price_ship', 
            'qty_free_ship' => 'qty_free_ship', 
            'price_free_ship' => 'price_free_ship', 
            'qty_ship_limit' => 'qty_ship_limit', 
            'price_coupon' => 'price_coupon', 
            'price_supply' => 'price_supply', 
            'price_limit' => 'price_limit', 
            'dc_rate' => 'dc_rate', 
            'commission' => 'commission', 
            'point' => 'point', 
            'qty_min' => 'qty_min', 
            'qty_max' => 'qty_max', 
            'qty_sale_quota' => 'qty_sale_quota', 
            'qty_token_limit' => 'qty_token_limit', 
            'qty_point_limit' => 'qty_point_limit', 
            'deal_status' => 'deal_status', 
            'min_sale_unit' => 'min_sale_unit', 
            'md_id' => 'md_id', 
            'sale_start_time' => 'sale_start_time', 
            'sale_end_time' => 'sale_end_time', 
            'teaser_start_time' => 'teaser_start_time', 
            'teaser_end_time' => 'teaser_end_time', 
            'valid_start_time' => 'valid_start_time', 
            'valid_end_time' => 'valid_end_time', 
            'refund_duration' => 'refund_duration', 
            'usable_today' => 'usable_today', 
            'usable_trade' => 'usable_trade', 
            'usable_token_code' => 'usable_token_code', 
            'usable_book' => 'usable_book', 
            'goods_type' => 'goods_type', 
            'addr_latitude' => 'addr_latitude', 
            'addr_longitude' => 'addr_longitude', 
            'addr_naver' => 'addr_naver', 
            'addr_daum' => 'addr_daum', 
            'addr_google' => 'addr_google', 
            'reg_time' => 'reg_time', 
            'dupl_limit' => 'dupl_limit', 
            'courier_company' => 'courier_company', 
            'deal_check_point' => 'deal_check_point', 
            'qrcode_flag' => 'qrcode_flag', 
            'barcode_flag' => 'barcode_flag', 
            'auto_open_flag' => 'auto_open_flag', 
            'independ_flag' => 'independ_flag', 
            'main_flag' => 'main_flag', 
            'issue_flag' => 'issue_flag', 
            'printable_flag' => 'printable_flag', 
            'display_order' => 'display_order', 
            'coupon_code_flag' => 'coupon_code_flag', 
            'coupon_type' => 'coupon_type', 
            'aff_deal_id' => 'aff_deal_id', 
            'deal_type' => 'deal_type', 
            'department_id' => 'department_id', 
            'team_id' => 'team_id', 
            'editor_id' => 'editor_id', 
            'editor_department_id' => 'editor_department_id', 
            'photographer_id' => 'photographer_id', 
            'designer_department_id' => 'designer_department_id', 
            'designer_id' => 'designer_id', 
            'option_flag' => 'option_flag', 
            'contract_start_date' => 'contract_start_date', 
            'contract_end_date' => 'contract_end_date', 
            'refund_condition' => 'refund_condition', 
            'service_qty_memo' => 'service_qty_memo', 
            'contribute_flag' => 'contribute_flag', 
            'contribute_price' => 'contribute_price', 
            'point_flag' => 'point_flag', 
            'event_flag' => 'event_flag', 
            'coupon_length' => 'coupon_length', 
            'coupon_sms_type' => 'coupon_sms_type', 
            'business_time_memo' => 'business_time_memo', 
            'book_memo' => 'book_memo', 
            'parking_memo' => 'parking_memo', 
            'num_admit_customer' => 'num_admit_customer', 
            'use_limit_memo' => 'use_limit_memo', 
            'ship_start_date' => 'ship_start_date', 
            'ship_end_date' => 'ship_end_date', 
            'ship_memo' => 'ship_memo', 
            'bundle_ship_flag' => 'bundle_ship_flag', 
            'loc_expose_flag' => 'loc_expose_flag', 
            'business_time' => 'business_time', 
            'qty_use_quota' => 'qty_use_quota', 
            'blind_flag' => 'blind_flag', 
            'deal_level' => 'deal_level', 
            'approval_status' => 'approval_status', 
            'update_time' => 'update_time', 
            'reg_user_id' => 'reg_user_id', 
            'update_user_id' => 'update_user_id', 
            'md_event_flag' => 'md_event_flag', 
            'manual_issue_type' => 'manual_issue_type', 
            'service_type' => 'service_type', 
            'present_flag' => 'present_flag', 
            'payment_card_flag' => 'payment_card_flag', 
            'payment_direct_flag' => 'payment_direct_flag', 
            'payment_mobile_flag' => 'payment_mobile_flag', 
            'delete_flag' => 'delete_flag', 
            'sale_acting_company_id' => 'sale_acting_company_id', 
            'contents_type' => 'contents_type', 
            'ssn_flag' => 'ssn_flag', 
            'option_depth' => 'option_depth', 
            'security_ship_flag' => 'security_ship_flag', 
            'deal_group_id' => 'deal_group_id', 
            'branch_display_flag' => 'branch_display_flag', 
            'now_flag' => 'now_flag', 
            'onecut_sticker_type' => 'onecut_sticker_type', 
            'ship_type' => 'ship_type', 
            'quick_ship_time' => 'quick_ship_time', 
            'agreement_type' => 'agreement_type', 
            'circulation_id' => 'circulation_id', 
            'category_code' => 'category_code', 
            'manager_id' => 'manager_id', 
            'map_status' => 'map_status', 
            'refund_price_type' => 'refund_price_type', 
            'refund_price_ship' => 'refund_price_ship', 
            'exchange_price_type' => 'exchange_price_type', 
            'exchange_price_ship' => 'exchange_price_ship', 
            'sale_coupon_partner_ship' => 'sale_coupon_partner_ship', 
            'tax_flag' => 'tax_flag'
        );
    }

}
