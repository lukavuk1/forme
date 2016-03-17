<?php require ('db.php'); ?>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="forme.css">
    <title>Forme</title>
    <meta charset="UTF-8">
</head>


<body>


<h1>Forme</h1>
<p>
<?php


$conn->query("INSERT INTO students (name, surname) VALUES ('". $_POST['ime']."',' ". $_POST['prezime']. "');");




$result = $conn->query("SELECT * FROM students order by surname");
if($result){

    while ($row = $result->fetch_object()){
        //print_r($row);
        echo('Ime i prezime: '.$row->name ."  ".$row->surname .'<br>');
    }

    $result->close();
    $conn->next_result();
}




if ($result = $conn->query("SELECT * FROM students")) {
    printf("Select returned %d rows.\n", $result->num_rows);
    $result->close();
}

    if($_POST['spol'] == 'M')
    {
        echo("<p class='musko'>"."Vaše ime je:" . htmlspecialchars($_POST['ime']) . "</p></br>");
    }
    elseif($_POST['spol'] == 'Ž')
    {
        echo("<p class='zensko'>"."Vaše ime je:"  . htmlspecialchars($_POST['ime']) . "</p></br>");
    }
    else
    {
        echo( "<p class='ostalo'>" ."Vaše ime je:". htmlspecialchars($_POST['ime']) . "</p></br>");
    }
    echo("Vaše prezime je:" .htmlspecialchars( $_POST['prezime']) . "<br>");


    echo("Vaš spol:" .htmlspecialchars( $_POST['spol'])."<br><br><br>");




if($_POST['spol'] == 'M')
{
    echo("Vi ste pravi muškarac"."<br>");

}
elseif($_POST['spol'] =="Ž")
{
    echo("Vi ste prava žena"."<br>");
}
elseif($_POST['spol']=="Ostalo")
{
    echo("A šta ste onda? "."<br>");
}


?>

    <a href="index.php">Ponovni unos</a>
</p>
</body>

</html>
