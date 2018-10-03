<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function usersInfo($user_id)
	{
		$this->db->select('u.user_id, u.username, CONCAT(up.first_name ," ", up.last_name) as name, u.email, ph.phone_number, ar.role_name, u.banned, u.created_at, u.auth_level, ud.address_line_1, ud.address_line_2, ud.city, ud.state, ud.pincode, up.company_id as vendor_id, up.gender, up.dob, up.avatar, up.job_title, up.cover_image')
		->from('users as u')
		->join('user_phone as ph', 'u.user_id = ph.user_id', 'left')
		->join('app_roles as ar', 'ar.role_id = u.auth_level', 'left')
		->join('user_profile as up', 'u.user_id = up.user_id', 'left')
		->join('user_address as ud', 'u.user_id = ud.user_id', 'left');
		$this->db->where('u.user_id',$user_id);
		$results = $this->db->get()->result();		
		return $results;
	}   
}

?>