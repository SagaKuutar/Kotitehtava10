<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotitehtava</title>

    <style> 
    body {
        text-align: center;
    }
    </style>
</head>
<body>
<header>
<div class="header">
    <?php include 'header.php'; ?>
</div> </header>
<br>
<main>
<div class="sisalto">
<h1> Sisältö </h1>

<form action="index.php" method="post">
    Tunnus: <br><input type="tekst" name="tunnus"> <br><br>
    Salasana: <br><input type="password" name="salasana"> <br><br>
<input type ="submit" value="Lähetä">
</form>
<?php 

if (empty($_POST)) {
    echo " ";
}
else {
    if ($_POST ["tunnus"]=="" and $_POST["salasana"]=="") {
        echo "<br>Et ole täyttänyt tarvittavia kohtia<br>";
    }
    elseif ($_POST ["tunnus"]=="hello" and $_POST["salasana"]=="world"){
        echo "<br><p>”– Kani on viisas, sanoi Puh mietteliäästi, – Ja hänellä on Älyä. <br>
        – Niin on, sanoi Nasu, – Kanilla on Älyä. <br><br>
        He olivat pitkään hiljaa... <br><br>
        – Siitä varmaan johtuu, sanoi Puh, – että hän ei koskaan ymmärrä mitään.” <br><br>
        <i>- Nalle Puh<i><br>";
    } 
    else {
        echo "<br>Salasana tai/ja tunnus on väärin";
    }}
 ?>
 </main>
 <br>

<footer>
<div class="footer">
    <?php include 'footer.php'; ?>
</div>
</footer>

</body>
</html>