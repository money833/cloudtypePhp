<? 
// $host = 'db-4jmpf.pub-cdb.ntruss.com:3306';
// $user = 'swc4th';
// $password = 'swc4ck!@#';

$host = 'svc.sel3.cloudtype.app:30360';
$user = 'root';
$password = '1111';
$database = 'swc_base';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
echo 'Connected successfully';


?>
