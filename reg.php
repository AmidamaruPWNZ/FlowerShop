<?
    include 'connect_db.php';

    $Log=$_POST["log"];
    $Pass=$_POST["pass"];
    $date = date("Y-m-d");

    $login_check = 0;

    //Проверка логина

    try {
        $sth = $dbh->prepare("SELECT Login FROM Visits WHERE Login = '".$Log."' ");
        $sth->execute();
        $result = $sth->fetchAll();

    } catch (Exception $e)
    {
        return  $e->getMessage();
    }

    if (empty($result)) {
        try {
            $sql = "INSERT INTO Visits (`id`, `Login`, `Password`, `Date`) VALUES (NULL, '$Log', '$Pass', '$date')";
            $stmt= $dbh->prepare($sql);
            $stmt->execute();
            
            $login_check = 0;
        }
        catch (Exception $e)
        {
            return  $e->getMessage();
        }
    }
    else{
        $login_check = 1;
    }
    echo $login_check;
?>
