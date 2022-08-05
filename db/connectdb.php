<?


$servername = "localhost";
$dbname = "db_php_project";
$username = "root";
$password = "";
try
{
    $connectdb = new PDO("mysql:host=$servername; dbname=$dbname",$username, $password);
    $connectdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h2>Bazaga muvaffaqiyatli ulandi!</h2>";
} catch(PDOException $e) {
    echo $e->getMessage();
}

$connectdb=null;






?>