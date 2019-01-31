<?php
  class Hosxpuser_model extends CI_Model {
       
      public function __construct(){
      }
      
      //API call - get a patient record by cid and birthday
      public function getpatient($cid,$birthday){  
        $hosxp = $this->load->database('hosxp', TRUE); 

           $hosxp->select('hn,pname,fname,lname,birthday,cid');

           $hosxp->from('patient');

           $hosxp->where('cid',$cid);
           $hosxp->where('birthday',$birthday);

           $query = $hosxp->get();
           
           if($query->num_rows() == 1)
           {

               return $query->row();

           }
           else
           {

             return 0;

          }

      }


}