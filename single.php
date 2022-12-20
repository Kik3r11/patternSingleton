<?php
class DB 
{
  private static $instance;
  private function __clone(){}
  private function __wakeup(){}
  private function __construct()
  {
    $this->connect = new mysqli("localhost", "root", "", "laba9pr");
  }
  static public function getInstance(){
    if(self::$instance === null)
    {
      self::$instance = new self();
    }
    return self::$instance->connect;
  }
}
$connect = DB::getInstance();
$query = $connect->query("SELECT * FROM `table1`");
$result = $query->fetch_all();
print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
</html>