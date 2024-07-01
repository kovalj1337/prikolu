<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Добавки</h1>
    <form action="index.php" method="POST">
        <input type="checkbox" name="caxap" value="caxap">
        <label for="caxap">cukor</label>
        <input type="checkbox" name="mendalj" value="mendalj">
        <label for="mendalj">mendalj</label>
        <input type="checkbox" name="prikolu" value="prikolu">
        <label for="prikolu">prikoli</label>
        <input type="checkbox" name="lol" value="lolyamba">
        <label for="lol">lolyamba</label>
        <input type="submit" name="" id="">
    <?php
    session_start();
    // session_destroy();
    if($_POST){
        echo("вибирай");
        $dobavki = $_SESSION["dobavki"];
        if(isset($_POST["vidalenya"])){
            $ind = $_POST["vidalenya"];
            array_splice($dobavki,$ind,1);
        }
        if(isset($_POST["caxap"])){
            $caxap = $_SESSION["caxap"] =$_POST["caxap"];
            array_push($dobavki,$caxap);
        }
        if(isset($_POST["mendalj"])){
            $mendalj = $_SESSION["mendalj"] = $_POST["mendalj"];
            array_push($dobavki,$mendalj);
        }
        if(isset($_POST["prikolu"])){
            $prikolu = $_SESSION["prikolu"] = $_POST["prikolu"];
            array_push($dobavki,$prikolu);
        }
        if(isset($_POST["lol"])){
            $lolyamba = $_SESSION["lol"] = $_POST["lol"];
            array_push($dobavki,$lolyamba);
        }
        $_SESSION["dobavki"] = $dobavki;
        for($i = 0 , $j = 1; $i < count($dobavki); $i++ , $j++){
            echo "<p>$j \n $dobavki[$i] <button type='submit' name='vidalenya' value='$i'>-</button></p>";
        }
        var_dump($_SESSION);
    }
    ?>
    </form>
</body>
</html>