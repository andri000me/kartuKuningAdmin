<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Etc
 *
 * @author Sigit Suryono
 */
class Etc extends CI_Model {

    //put your code here

    function diffDate($date1, $date2) {
        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

//        return "$years years, $months months, $days days\n";
        return $days;
    }

    function addDate($date, $var, $type) {
        return date('Y-m-d H:i:s', strtotime($date . " + $var $type"));
    }
    
    function dateCrate($date, $format){
        return date_format(date_create($date), $format);
    }
    function dateIndonesia($date) {
        return date_format(date_create($date),"d F Y");
    }
    
    private function arrayDate($ind) {
        $month = array();
        $month[0] = "Januari";
        $month[1] = "Februari";
        $month[2] = "Maret";
        $month[3] = "April";
        $month[4] = "Mei";
        $month[5] = "Juni";
        $month[6] = "Juli";
        $month[7] = "Agustus";
        $month[8] = "September";
        $month[9] = "Oktober";
        $month[10] = "November";
        $month[11] = "Desember";
        
        return $month[$ind];
    }

}
