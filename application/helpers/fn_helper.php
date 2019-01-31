<?php
    function AD ($birthdate){
        $d = substr($birthdate,0,2);
        $m = substr($birthdate,2,2);
        $y = substr($birthdate,4,4);
        $yy = intval($y)-543;
        $bce = $yy.'-'.$m.'-'.$d;
        return $bce;
    }

    function get_hospitalName() {
        $ci =& get_instance();
        $rs = $ci->db->get('sys_configs');
        return $rs->row()->hospname;
    }
?>