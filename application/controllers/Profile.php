<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Profile extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
	}

	public function index(){

		$this->load->view('profile_view');
		//echo "jong";
	}
	
	public function get_profile(){
		$profile = $this->db->query('SELECT person_id,cid,CONCAT(b.prename_name,fname," ",lname)AS fullname,a.sex_id FROM `hrd_person` a
		LEFT JOIN `hrd_prename` b ON a.prename_id = b.prename_id')->result();

		echo json_encode($profile);
	}
   
}//end controller