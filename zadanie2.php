<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Jan Walczak Zadanie</title>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9"
 crossorigin="anonymous">
<link rel="stylesheet" href="style1.css">
 

</head>
<body>
 
 <div class="login">
<h1>waluta</h1>
<form method = "POST">
<div class="text">
    <i class="fas fa-money-bill-alt"></i>
        <input type=number placeholder="kwota"  name="number" step = "0.001">
</div>

<div class="text">
    <i class="fas fa-euro-sign"></i>
        <input class=" currency" type="number" placeholder="kurs" name="value" step = "0.001">
</div>

<div class="text">
    <i class="fas fa-flag"></i>
        <select name = choose >
        <optgroup>
            <option >PLN</option>
            <option >EURO</option>
        </optgroup>
        </select>
</div>
<input class="btn" type="submit" value="WYŚLIJ ">

</form>
 </div>
 
 
 <?php


$kwota=$_POST['number'];
$kurs=$_POST['value'];
$waluta=$_POST['choose'];


function euro2pln ($kwota, $kurs,$waluta){
    if($waluta == "PLN"){
    $wynik=$kwota*$kurs;
     return $wynik;
    }
    else{
        $wynik = $kwota/$kurs;
        return $wynik;
    }

}

echo euro2pln($kwota, $kurs,$waluta);

?>


    
</body>
</html>