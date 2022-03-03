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
	
		function getaddlotauctiondetails() {			 
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
		
		
		function auctionlist() {			 
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
		
		
		
	


	public function get_adminforthlookalike($table, $col, $query, $date)
	{
		$this->db->from($table);
		$this->db->like($col, $query);
		$this->db->where('iauction_start >=', $date);
		$q = $this->db->get();
		return $q->result_array();
	}
	

	
	}



