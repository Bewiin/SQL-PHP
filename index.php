<?php
$prixht = 10;
$nrb_article = 1;
$tva = 5.5;

$total = ($nrb_article*$prixht)+($prixht*($tva)/100);

echo $prixht."&nbsp&nbsp&nbsp&nbsp".$nrb_article." &nbsp&nbsp&nbsp&nbsp&nbsp".$tva."<br>";
echo $total;

function calcul1(int $a, int $b):int{
    return $a-$b;
};
echo "<br>".calcul1(5,3).'<br>';

function calcul2(float $c):float{
    return round($c, 2);
}

echo calcul2(7.18999);

function calcul3(...$a):int{
    $sum = 0;
    foreach($a as $value){
        $sum += $value;
    }
    return $sum;
}
echo "<br>".calcul3(2,2,2,5,6);

function calcul4(array $a):int{
    return array_sum($a)/count($a);
}

echo "<br>".calcul4([6,6,6]);


function calcul5(...$a){
   $valeur = $a[0];
   for($i = 0; $i < count($a); $i++){
        if($a[$i] < $valeur){
            $valeur = $a[$i];
        };
   };
   return $valeur;
}
echo "<br>".calcul5(7,3,6,7,8,2);

function calcul6(...$a){
   $valeur = 0;
   for($i = 0; $i < count($a); $i++){
        if($a[$i] < $a[$i+1]){
            $valeur = $a[$i];
        };
   };
   return $valeur;
}
echo "<br>".calcul5(7,3,6,7,8,2,5,1,2);

function calcul7(int   $a){
    switch (true) {
        case $a >= 6 && $a <= 7 :
            echo "Poussin";
            break;
        case $a >= 8 && $a <= 9 :
            echo "Pupille";
            break;
        case $a >= 10 && $a <= 11 :
            echo "Minime";
            break;
        case $a >=12:
            echo "Cadet";
            break;
        default:
            echo "On peut pas l'inscrire ton gamin";
            break;
    };
};

calcul7(12);

?>