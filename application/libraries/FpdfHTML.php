<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
class FpdfHTML{
    public function __construct(){
        require_once APPPATH.'third_party/FPDF/html_table.php';

        $pdf = new PDF();
       // $pdf->AddPage();

        $CI =& get_instance();
        $CI->pdf = $pdf;
    }

}