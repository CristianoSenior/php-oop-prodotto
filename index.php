<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


      class Botella{


        public $peso;
        public $provenienza;
        public $scadenza;

        public function __construct($peso,$provenienza,$scadenza){

         $this -> peso = $peso;
         $this -> provenienza = $provenienza;
         $this -> scadenza = $scadenza;

        }

        public function prezzoDefinitivo(){

          return $this -> peso * 2;

        }
        public function printBotella(){
          echo "il prezzo del liquore è: ". $this -> prezzoDefinitivo()." € ". "<br>"  . "il peso è: ". $this -> peso ." kg "."<br>"." paese di provenienza: " . $this -> provenienza .  "<br>--------------------------------<br>" ;
        }


      }

      class detersivo extends Botella{

        public function printBotella(){
          echo "il detetersivo costa : ". $this -> prezzoDefinitivo()." € ". "<br>"  . "il peso è: ". $this -> peso ." kg "."<br>"." paese di provenienza: " . $this -> provenienza .  "<br>--------------------------------<br>" ;
        }
        }
        $deters1 = new detersivo(5,"Srylanka","Gennaio2099");
        $deters1 -> printBotella();

        $deters2 = new detersivo(7,"Aci S.Filippo","Luglio2077");
        $deters2 -> printBotella();






      $bott1 = new Botella(4,"Colombia","Gennaio2021");
      // $bott1 -> prezzo = ;
      // $bott1 -> peso = ;
      // $bott1 -> provenienza = ;
      // $bott1 -> scadenza = ;
      $bott1 -> printBotella();



      $bott2 = new Botella(3,"Argentina","Marzo2021");
      // $bott2 -> prezzo = ;
      // $bott2 -> peso = ;
      // $bott2 -> provenienza = ;
      // $bott2 -> scadenza = ;
      $bott2 -> printBotella();

     ?>
  </body>
</html>
