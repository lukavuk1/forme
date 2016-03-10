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

<form method="post">
    Ime:<br>
    <input type="text" name="ime"><br>
    Prezime:<br>
    <input type="text" name="prezime"><br>
    Spol:<br>
    <input type="radio" name="spol" value="M"> Muško<br>
    <input type="radio" name="spol" value="Ž"> Žensko<br>
    <input type="radio" name="spol" value="Ostalo"> Ostalo <br>

    <input type="submit" value="Pošalji">
    </form>
<?php
    if($_POST['spol'] == 'M')
    {
        echo("Vaše ime je:" . "<p class='musko'>" . htmlspecialchars($_POST['ime']) . "</p></br>");
    }
    elseif($_POST['spol'] == 'Ž')
    {
        echo("Vaše ime je:". "<p class='zensko'>" . htmlspecialchars($_POST['ime']) . "</p></br>");
    }
    else
    {
        echo("Vaše ime je:". "<p class='ostalo'>" . htmlspecialchars($_POST['ime']) . "</p></br>");
    }
    echo("Vaše prezime je:" .htmlspecialchars( $_POST['prezime']) . "<br>");


    echo("Vaš spol:" .htmlspecialchars( $_POST['spol'])."<br><br><br>");




if($_POST['spol'] == 'M')
{
    echo("Vi ste pravi muškarac");

}
elseif($_POST['spol'] =="Ž")
{
    echo("Vi ste prava žena");
}
elseif($_POST['spol']=="Ostalo")
{
    echo("A šta ste onda?");
}


?>








</p>





</body>

</html>
