<?php
    $date = date('Y-m-d');
  while (date('w', strtotime($date)) != 1) {
    $tmp = strtotime('-1 day', strtotime($date));
    $date = date('Y-m-d', $tmp);
  }

  $week = date('W', strtotime($date));
  $weekto = $week +1;
     $year =  getdate();
     $weekday =  $year['mday'] +7;
      $yearnow  = "week".$weekto.":".$year['year'] ." / " .$year['mon']." /".$week ;
     echo $yearnow;
?>