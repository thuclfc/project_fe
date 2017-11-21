<?php 
class Database{
   
   //Khai bao thong tin DB
   private $config = array(
      'host' => 'localhost',
      'db_name' => 'website_dogo',
      'user' => 'root',
      'password' => '27021992',
   );
   //Doi voi class nay thi khi khoi tao no se tạo connect den DB 
   // Thong tin DB minh khai bao o tren 
   //Ham khoi tao khi goi class
   public function __construct(){
      $link = mysql_connect($this->config['host'],$this->config['user'],$this->config['password']);
      mysql_set_charset('utf8',$link);
      mysql_select_db($this->config['db_name']);
   }
   
   /**
    * Ham tra ve 1 record dau tien
   */
   public function find($sql){
      $result = mysql_query($sql);
      return mysql_fetch_assoc($result);
   }
   
   /**
    * Ham tra ve tat ca cac ban ghi cua cau truy van
   */
   public function findAll($sql){
      $result = mysql_query($sql);
      $list = array();
      while($temp = mysql_fetch_assoc($result)){
         $list[] = $temp;
      }
      return $list;
   }
   
   /**
    * Ham thuc hien 1 cau truy van nhu INSERT,UPDATE,DELETE....
    * Tra ve so ban ghi bi tac dong
   */
   public function excute($sql){
      $result = mysql_query($sql);
      return mysql_affected_rows();
   }
   
   /**
    * Ham dem so ban ghi cua 1 table
   */
   public function countByTable($table){
      $sql = "SELECT count(*) as total FROM $table";
      $result = $this->find($sql);
      return $result['total'];
   }
}

?>