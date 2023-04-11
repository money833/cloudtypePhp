<? 
$host = 'db-4jmpf.pub-cdb.ntruss.com:3306';
$user = 'swc4th';
$password = 'swc4ck!@#';
$database = 'swc_base';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
echo 'Connected successfully';


?>
