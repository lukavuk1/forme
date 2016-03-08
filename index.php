<!DOCTYPE html>
<html>
<head>

    <title>Forme</title>
    <meta charset="UTF-8">
</head>


<body>


<h1>Forme</h1>

<p>

<form>
    Ime:<br>
    <input type="text" name="ime"><br>
    Prezime:<br>
    <input type="text" name="prezime"><br>
    <input type="submit" value="Pošalji">
    </form>
<?php echo("Vaše ime je:" . htmlspecialchars($_GET['ime']) . "<br>");

    echo("Vaše prezime je:" . $_GET['prezime']);
?>








</p>





</body>

</html>
