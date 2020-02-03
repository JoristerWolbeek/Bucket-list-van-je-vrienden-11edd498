<?php
echo("Hoeveel mensen?");
$AantalMensen = readline();
$personen =[];




if(is_numeric($AantalMensen)){
    for($x=0;$x<$AantalMensen;$x++){
        echo("wie?");
        $persoon = readline();
        echo("wat?");
        $droom = readline();
        $personen[$persoon]=$droom;
    }
}else{
    echo($AantalMensen." is geen getal");
}

foreach($personen as $key=>$val){
    echo("De droom van ".$key." is: ".$val).PHP_EOL;
}
