<?
    include 'connect_db.php';

    $Log=$_POST["log"];
    $Pass=$_POST["pass"];

    try {
        $sql = "SELECT Login FROM Visits WHERE Login = '".$Log."' AND Password = '".$Pass."' ";
        $stmt= $dbh->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

    } catch (Exception $e)
    {
        return  $e->getMessage();
    }
    if (empty($result)) {
        echo 0;
    }
    else {
        echo 1;
    }

?>
