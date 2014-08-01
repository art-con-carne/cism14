<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {


	public function __construct()
	{
	
	}
	
	public function get_news($id=0)
	{
		$request = "https://news.google.com/news/feeds?pz=1&cf=all&ned=us&hl=en&topic=s&output=rss";
		$response = file_get_contents($request);
		return simplexml_load_string($response);
		
		/*if((int)$id==0)
		{//id is 0 show all
			return $this->db->get('test_Customers');
		}else{//show 1 customer
			return $this->db->get_where('test_Customers',array('customerID'=>$id));
		}*/

	}#end get_customers

}
