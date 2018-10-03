
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_dropdown extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function userDropdown()
	{
		$this->db->select('user_id, username');
		$this->db->from('users');
		$results  		= $this->db->get()->result();
		$options		=	array();
		$options[''] 	= 	lang("label_select_dropdown");
		foreach ($results as $item) 
		{
			$options[$item->user_id]	=	$item->username;
		}
		return $options;
	}	

	public function moduleDropdown()
	{
		$this->db->select('category_id, category_code');
		$this->db->from('acl_categories');		
		$results 		= $this->db->get()->result();
		$options		=	array();
		$options[''] 	= 	lang("label_select_dropdown");
		foreach ($results as $item) 
		{
			$options[$item->category_id]	=	$item->category_code;
		}
		return $options;
	}

	public function departmentBasedUsers($dirArr = '')
	{
		$sqlQuery = "SELECT DISTINCT `da`. `user_id`,CONCAT(`up`.`first_name`, ' ', `up`. `last_name`) as userName FROM `directory_access` as `da`LEFT JOIN `user_profile` as `up` ON `up`.`user_id` = `da`.`user_id` WHERE `directory_id` IN ('".$dirArr."')";

		$results 		=	$this->db->query($sqlQuery)->result();
		$options		=	array();
		$options[''] 	= 	'--Select--';
		foreach ($results as $item) 
		{
			$options[$item->user_id]	=	$item->userName;
		}
		return $options;
	}
}