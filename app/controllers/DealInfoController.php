<?php

class DealInfoController extends ControllerBase
{
    public function indexAction()
    {
    	// Current page to show
    	// In a controller this can be:
    	// $this->request->getQuery('page', 'int'); // GET
    	// $this->request->getPost('page', 'int'); // POSo
    	
    	$offset = isset($_GET["page"])? (int) $_GET["page"] : 0;
    	$limit_count = 1000; // 9357최대개수
    	//$first_limit = !$currentPage?0:($currentPage-1)*10;
    	$limit = 10;
    	$per_page = 5;
    	$sql_where = 'deal_status = 0';
    	//The data set to paginate   
    	// $this->view->deals = $deals = DealInfo::find(array('deal_status = 0', 'order' => 'deal_id desc limit '.$first_limit.', '.$perpage));
    	//if(!$currentPage){$currentPage = 1;}
//     	$total_rows = DealInfo::count('deal_status = 0');

	//$frontCache = new Phalcon\Cache\Frontend\Data(array(
	//    "lifetime" => 60
	//));

	// Create the component that will cache "Data" to a "Memcached" backend

	// Memcached connection settings
//	$cache = new Phalcon\Cache\Backend\Memcache($frontCache, array(
//	    "host" => "www.jonamkwon.com",
//	    "port" => "11211"
//	));

	//$cache = new Phalcon\Cache\Backend\File($frontCache, array(
	//    "cacheDir" => "../app/cache/"
	//));
	
	// Try to get cached records
	// $cacheKey = 'page_deal_id.cache';
	// $page    = $cache->get($cacheKey);
	// if($page === null) {
	// 	// $robots is null because of cache expiration or data does not exist
    	// 	// Make the database call and populate the variable

    	// 	$page = DealInfo::find(array($sql_where, 'order' => 'deal_id desc limit '.$offset.', '.$per_page));
    	// 	// Store it in the cache
    	// 	$cache->save($cacheKey, $page);
	// }
    	
 	$page = DealInfo::find(array($sql_where, 'order' => 'deal_id desc limit '.$offset.', '.$per_page));
		// Create a Model paginator, show 10 rows by page starting from $currentPage
// 		$paginator = new \Phalcon\Paginator\Adapter\Model(
// 				array(
// 						"data" => $data,
// 						"limit"=> $limit,
// 						"page" => $currentPage
// 				)
// 		);

// 		$total_rows = count($data);
		
	// 페이징 시작 셋팅~!
	$config['total_rows'] = DealInfo::count($sql_where);	
	$config['base_url'] ='/dealinfo?page=';
	$config['per_page'] = $per_page;
	$config['num_links'] = 3;
	$config['page_query_string'] = FALSE;
	$config['cur_page'] = $offset;
	$config['full_tag_open'] = '<div id="pagination" align="center" style="margin-top: 10px;">';
	$config['full_tag_close'] = '</div>';
	
	ControllerBase::initialize($config);
	$this->view->data_pagination = ControllerBase::create_links();
	
	// Get the paginated results
	$this->view->page = $page;	
    }

    public function showAction($deal_id, $page=1)
    {
    	$deals = DealInfo::find(array('deal_id = ?0', 'bind' => array($deal_id)));
    	
    	$this->view->deals = $deals; 
    	$this->view->page = $page;
    }

    public function mailAction()
    {
		$to      = 'jonamkwon@wemakeprice.com';
		$subject = '송파사택 신고';
		$message = '안녕하세요. 송파사택에 사는 김동욱사원을 신고합니다.';
		$headers = 'From: jonamkwon@wemakeprice.com' . "\r\n" .
   	 				'Reply-To: jonamkwon@wemakeprice.com' . "\r\n" .
   	 				'X-Mailer: PHP/' . phpversion();
		$nam = mail($to, $subject, $message, $headers);
		if($nam){
			echo '보내기 성공';
		}else{
			echo '보내기 실패';
		}
		exit;
    }

}

?>
