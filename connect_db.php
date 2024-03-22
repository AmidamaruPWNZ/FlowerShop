<?
// Имя сервера MySQL-server
$sdb_name = "localhost"; 
$user_name="root"; 
$user_pass = "";
$db_name = "Flowers_shop";   

//Проверка соединения с сервером

try {
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db_name .'', $user_name, $user_pass);
}
catch (PDOException $e){
    return  $e->getMessage();
}
?>
