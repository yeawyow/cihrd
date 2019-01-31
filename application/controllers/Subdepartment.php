<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Subdepartment extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
	}

	public function index(){

		$this->load->view('subdepartment_view');
		//echo "jong";
	}
	
	public function get_subdepartment(){
		$subdepartment = $this->db->query('SELECT 
        hds.department_sub_id,
        hds.department_sub_name,
        hd.department_name,
        concat(hp.fname," ",hp.lname) as department_head,
        hds.department_sub_tel,
        hds.department_sub_status,
        hds.last_update
        from hrd_department_sub hds
        LEFT OUTER JOIN hrd_person hp on hp.cid=hds.cid
        LEFT OUTER JOIN hrd_department hd on hd.department_id=hds.department_id')->result();

		echo json_encode($subdepartment);
	}
   
}//end controller