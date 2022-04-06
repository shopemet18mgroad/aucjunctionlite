<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert($table, $data)
	{
		if ($this->db->insert($table, $data)) {
			return true;
		}
	}
	public function check($table, $data)
	{
		$query = $this->db->get_where($table, $data);
		if ($query->num_rows() == 0) {
			return FALSE;
		} else {
			return TRUE;
		}
	}
	public function getdatafromtable($table, $data)
	{
		$query = $this->db->get_where($table, $data);
		return $query->result();
	}
	public function update_custom($table,$data,$colname,$comp) { 
			 $this->db->set($data); 
			 $this->db->where($colname, $comp);
			 $this->db->update($table, $data); 
		  } 
	public function get_lookalike($table, $col, $query)
		{
			$this->db->from($table);
			$this->db->like($col, $query);
			$q = $this->db->get();
			return $q->result_array();
		}
	public function delete_data($table, $data)
		{
			if ($this->db->delete($table, $data)) {
				return true;
			}
		}
		
		
	
		
	
	public function getaddlotauctiondetails() {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->where('a.aoption',false);
					
					
									 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					 
					$result = $query->result();				
					return $result;
		
			}
		
		
	public function get_auctionlist($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);					 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}
		
	public function get_count($table) {
        return $this->db->count_all($table);
    }
	public function get_count_cat($table,$cat) {
		$this->db->from($table);
		$this->db->where('icategory=',$cat);
		$q = $this->db->get();
        return count($q->result_array());
    }
		
	public function get_auction_today($date){
		$this->db->from('auction');
		$this->db->where('DATE(iauction_start)', $date);
		$q = $this->db->get();
		return $q->result_array();
	}
	public function get_auctionlist_today($limit, $start, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
		
	
	// 1.In buyer only to pull cartegory of car of particular days auction.
	
	public function get_auctionlist_todaycar($limit, $start, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Car');
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//2.In buyer only to pull cartegory of car of particular All Auction.
	
	public function get_auctionlistcar($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Car');
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}
	//1.In buyer only to pull cartegory of TV of particular days auction.
	
	public function get_auctionlist_todaytv($limit, $start, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','TV');
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//2.In buyer only to pull cartegory of TV of particular All Auction.
	
	public function get_auctionlisttv($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','TV');
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}
	
	
			//In buyer only to pull cartegory of Camera of particular days auction.
	
	public function get_auctionlist_todaycamera($limit, $start, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Camera');
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//In buyer only to pull cartegory of Camera of particular All Auction.
	
	public function get_auctionlistcamera($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Camera');
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}
	
	
				//In buyer only to pull cartegory of Fridge of particular days auction.
	
	public function get_auctionlist_todayfridge($limit, $start, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Fridge');
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//In buyer only to pull cartegory of Fridge of particular All Auction.
	
	public function get_auctionlistfridge($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Fridge');
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}
	
		
				//In buyer only to pull cartegory of Mobile of particular days auction.
	
	public function get_auctionlist_todaymobile($limit, $start, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Mobile');
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//In buyer only to pull cartegory of Mobile of particular All Auction.
	
	public function get_auctionlistmobile($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Mobile');
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}
	
	
	
	
			//In buyer only to pull cartegory of Mobile of particular days auction.
	
	public function get_auctionlist_todaybike($limit, $start, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Bike');
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//In buyer only to pull cartegory of Mobile of particular All Auction.
	
	public function get_auctionlistbike($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Bike');
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}
	
	
	
	
	
	
			//In buyer only to pull cartegory of Mobile of particular days auction.
	
	public function get_auctionlist_todaytoys($limit, $start, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Toys');
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//In buyer only to pull cartegory of Mobile of particular All Auction.
	
	public function get_auctionlisttoys($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Toys');
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}
	
		
	
		
//In buyer only to pull cartegory of Laptop of particular days auction.
	
	public function get_auctionlist_todayfashion($limit, $start,$date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Fashion');
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//In buyer only to pull cartegory of Laptop of particular All Auction.
	
	public function get_auctionlistfashion($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Fashion');
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}

	
	
	
//In buyer only to pull cartegory of Laptop of particular days auction.
	
	public function get_auctionlist_todaylaptop($limit, $start, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Laptop');
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//In buyer only to pull cartegory of Laptop of particular All Auction.
	
	public function get_auctionlistlaptop($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Laptop');
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}
	
	//In buyer only to pull cartegory of Washing Machine of particular days auction.
	
	public function get_auctionlist_todaywashingmachine($limit, $start, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Washing machine');
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//In buyer only to pull cartegory of Washing Machine of particular All Auction.
	
	public function get_auctionlistwashingmachine($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Washing machine');
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}
	
		//In buyer only to pull cartegory of Furniture of particular days auction.
	
	public function get_auctionlist_todayfurniture($limit, $start, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Furniture');
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//In buyer only to pull cartegory of Furniture of particular All Auction.
	
	public function get_auctionlistfurniture($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Furniture');
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}
	
	
	
			//In buyer only to pull cartegory of Furniture of particular days auction.
	
	public function get_auctionlist_todayproperties($limit, $start, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Furniture');
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//In buyer only to pull cartegory of Properties of particular All Auction.
	
	public function get_auctionlistproperties($limit, $start) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);	
					$this->db->where('b.isubcategory=','Properties');
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}
	
	
	
	
	
	
	

	public function get_adminforthlookalike($table, $col, $query, $date)
	{
		$this->db->from($table);
		$this->db->like($col, $query);
		$this->db->where('iauction_start >=', $date);
		$q = $this->db->get();
		return $q->result_array();
	}
	public function get_singleauction($auctionid, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->where('a.aoption',true);
					$this->db->where('a.iauctionid',$auctionid);
					$this->db->where('a.iauction_start >=',$date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					 
					$result = $query->result();				
					return $result;
	}
	public function get_singleauction_nd($aucid){
		$this->db->select('
					a.*,
					b.*');
					$this->db->where('a.aoption',true);
					$this->db->where('a.iauctionid',$aucid);
									 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					 
					$result = $query->result();				
					return $result;
	}
	
	public function get_singleauction_live($auctionid, $date){
		$this->db->select('
					a.*,
					b.*');
					$this->db->where('a.aoption',true);
					$this->db->where('a.iauctionid',$auctionid);
					$this->db->where('a.iauction_start <=',$date);
					$this->db->where('a.iauction_end >',$date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");	 
					$result = $query->result();				
					return $result;
	}
	
	public function get_singleauction_live_3t($auctionid, $username, $date){
		$this->db->select('*');
					$this->db->where('a.aoption',true);
					$this->db->where('a.iauctionid',$auctionid);
					$this->db->where('a.iauction_start <=',$date);
					$this->db->where('a.iauction_end >',$date);	
					$this->db->where('c.user_email',$username);
					$this->db->where('c.auction_id',$auctionid); 			 			
					$this->db->from('auction a'); 
					$this->db->join('addlot b', 'b.iauctionid=a.iauctionid', 'left');
					$this->db->join('cart_payment c', 'c.auction_id=a.iauctionid', 'left');   
					$query = $this->db->get();	 
					$result = $query->result();				
					return $result;
	}
	public function auctionlist() {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->where('a.aoption',true);
										 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					 
					$result = $query->result();				
					return $result;
		
			}
    public function get_all_cart_user($uid){
		$data = array('user_email'=>$uid, 'cart'=>true);
		$query = $this->db->get_where('cart_payment', $data);
		return $query->result();

	}	
	public function get_all_wishlist_user($uid){
		$data = array('user_email'=>$uid, 'wishlist'=>true);
		$query = $this->db->get_where('cart_payment', $data);
		return $query->result();
	}	
	public function get_all_auctions_user($uid){
		$data = array('user_email'=>$uid, 'auction'=>true);
		$query = $this->db->get_where('cart_payment', $data);
		return $query->result();
	}	
	
	
	
	
	// search in buyer is used 
	
	
	
	
	  public function get_lookalike_search($table,$col,$col2,$query){			  
			$this->db->from($table);
			$this->db->like($col,$query);
			$this->db->or_like($col2,$query);
			//$this->db->where('comapprove',1);
			$q = $this->db->get();
			return $q->result_array();
		  

	
	}

	  // search in buyer is used 
	  
 public function get_lookalike_search2($table,$col,$query){
            $this->db->from($table);
			$this->db->like($col,$query);
		    $q = $this->db->get();
			return $q->result_array();
		}  
 
 
 
 	public function get_count_product($table,$cat) {
		$this->db->from($table);
		$this->db->where('iproductname=',$cat);
		$q = $this->db->get();
        return count($q->result_array());
    }
		
	public function get_auction_todayproduct($date){
		$this->db->from('auction');
		$this->db->where('DATE(iauction_start)', $date);
		$q = $this->db->get();
		return $q->result_array();
	}
 
 
 
 
 
 
 
	  
		
			//In buyer only to pull cartegory of todaysearch of particular days auction.
	
public function get_auctionlist_todaysearch($limit,$start,$date,$iproductname){
		$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					$this->db->where('a.aoption',true);
                    $this->db->where('b.iproductname=',$iproductname);
				
					$this->db->where('DATE(a.iauction_start)', $date);				 			
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
	}
	
	//In buyer only to pull cartegory of todaysearch of particular All Auction.
	
		public function get_auctionlistsearch($limit, $start,$iproductname) {			 
			$this->db->select('
					a.*,
					b.*');
					$this->db->limit($limit, $start);
					
					$this->db->where('a.aoption',true);	
					$this->db->where('b.iproductname=',$iproductname);
					$this->db->join('addlot b','a.iauctionid=b.iauctionid',
					'left outer');			   
					$query = $this->db->get("auction a");
					$result = $query->result();				
					return $result;
		
	}	 
		 
		 
		 
		 
		 
		 
		 
	  
	  
	  
	  
	  

	public function UpdateLive($username, $auctionid)
		{
			$this->db->select('*');
			$this->db->from('auction a'); 
			$this->db->join('addlot b', 'b.iauctionid=a.iauctionid', 'left');
			$this->db->join('cart_payment c', 'c.auction_id=a.iauctionid', 'left');
			$this->db->where('c.user_email',$username);
			$this->db->where('c.auction_id',$auctionid);       
			$query = $this->db->get(); 
			if($query->num_rows() != 0)
			{
				return $query->result_array();
			}
			else
			{
				return false;
			}
		}


	  }

