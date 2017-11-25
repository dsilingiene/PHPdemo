<?php
class Zmogus {
    public $vardas;
    public $pavarde;
    public $trimestras; // ['anglu' => 10, 'matematika'=> 8]

    function __construct ($a,$b, $trimestras) {
        $this ->vardas = $a;
        $this ->pavarde = $b;
        $this ->trimestras = $trimestras;
    }
    function vidurkis () {
        $suma = 0;
        foreach ($this ->trimestras as $balas) {
            $suma += $balas;
        }
        return $suma / count($this ->trimestras);
    }
}
    $zmones = [
    ['vardas'=>'Jonas'],    //vardas - indeksas, reikšmė - Jonas
    ['vardas'=>'Ona',]   
];

//array_push $zmones, ['vardas'=> 'Petras', 'pavarde' => 'Petraitis']);
//vietoj push galimes$zmones[] = 
$zmones[] = new Zmogus ('Petras','Petraitis');




foreach ($zmones as $z) {
    echo $z -> pavarde . "  " . $z ->vidurkis() .  '<br>';
}

for ($i=0; $i<count($zmones); $i++)
echo $zmones [$i] . vidurkis

// galim vietoj zmones i bla bla priskirti tarpini kintamaji pvz $z = $zmones[$i]
//tada echo $z ->pavarde . ' ' $z ->vidurkis().'<br>';
//objekto kvietimo metu $this igyja reiksme 
 echo $zmones[1]; //prie Ona objekto priejimas - spausdina viska apie Ona
 echo $zmones[1] ->vardas; //priejimas prie objekto vardo spausdina Ona
 //echo $zmones[1] ->vardas; //prie pavardes

var_dump ($zmones[1] -> trimestras); 

/*foreaches$zmones as $z) {
    echo $z['vardas'];
}
    var_dump($z);
var_dumes$zmones);*/


//eches$zmones[0][0] jei tik Joną norim atspausdint. 
//var_dumpes$zmones[0]) - parodys iki kur daėjom

// prie lauko prieiti - $this ->
//masyvo reiksme paimam per []
//galima idet koeficienta, pvz vidurki padidint 10 proc zr foto


function naujasVardas($vardas)
    $this ->vardas = $vardas //keiciam varda


    function naujasPavarde($pavarde)
    $this ->pavarde = $pavarde //keiciam pavarde
?>