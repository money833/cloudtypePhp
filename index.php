<? 
$host = 'svc.sel3.cloudtype.app:30360';
$user = 'swc4ch';
$password = 'swc4ck!@#$';
$database = 'swc_base';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
echo 'Connected successfully';


?>
