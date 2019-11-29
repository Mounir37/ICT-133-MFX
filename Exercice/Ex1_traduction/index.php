
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    index.php
 *Date:     21.11.2019
 *Version:
 */
$a = 20;
$b = 3;

for ($i = 0; $i<10;$i++){
    if ($a >= 30){
        echo "le nombre vaut $a<br>" ;
    }else{
        echo "le nombre est trop petit <br>";
    }
    $a+=$b;
}
?>
</body>
</html>