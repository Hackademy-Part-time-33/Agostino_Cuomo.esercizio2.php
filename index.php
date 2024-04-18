<!-- TRACCIA 1------------ -->
<?php
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Francesco', 'surname' => 'Cannone', 'gender' => 'M'],
    ['name' => 'Giada', 'surname' => 'Benedetto', 'gender' => 'F'],
   ];
   
   foreach($users as $persona){
    if ($persona['gender']== 'M') {
        echo 'Buongiorno signore'.' '.$persona['name'].' '.$persona['surname']. "\n" ;
     
    }else {
        echo 'Buongiorno signora'.' '.$persona['name'].' '.$persona['surname']. "\n"  ;
     
    }
};

 /*    TRACCIA 2------------- */
$numbers=[
    3,4,10,8,7,45,18,19,21,22,13,11,93,64,12
];
$somma=0;
$contatore=0;
foreach($numbers as $number){
    if($number%2==0){
        $somma+=$number;
        $contatore++;
    }
};
echo $somma/$contatore;
echo "\n" ;
 /*   TRACCIA 3----------- */
 for ($i=1; $i <= 100; $i++) { 
   if ($i%3 ==0 && $i%5==0) {
    echo 'HACKADEMY';
   }else if ($i%5 ==0) {
    echo 'JAVASCRIPT';
   }else if($i%3 ==0){
    echo 'PHP';
   }else {
    echo $i;
   }
 }
   
   ?>
