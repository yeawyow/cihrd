<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Department extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
	}

	public function index(){

		$this->load->view('department_view');
		//echo "jong";
	}
	
	public function get_department(){
		$department = $this->db->query('SELECT hd.department_name,hd.department_id,
		concat(hp.fname," ",hp.lname) as head_department,
		hd.department_tel,hd.department_status,hd.last_update
		from hrd_department hd
		LEFT OUTER JOIN hrd_person hp on hp.cid=hd.cid')->result();

		echo json_encode($department);
	}
   
}//end controller