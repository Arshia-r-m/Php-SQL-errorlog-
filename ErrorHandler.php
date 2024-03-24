<?php 
class LogHandler{
    public function Errorloggg($connection){
      $logfile = fopen('./log_viewer.txt','a');
      fseek($logfile,-SEEK_END);
      date_default_timezone_set('Asia/Tehran');
      $date = date('m/d/Y h:i:s a', time());
      fwrite($logfile,'| Date and Time: '.$date.' | ERROR: '.mysqli_error($connection).'|ERRORNO: '.mysqli_errno($connection)."\r\n");
      fclose($logfile);
    }
}
?>
