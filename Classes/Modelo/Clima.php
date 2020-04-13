<?php

namespace Classes\Modelo;

class Clima {
    public $codCidade;
    public $cidade;
    public $temperatura;
    public $velocidadeVento;
    public $nascerDoSol;
    public $porDoSol;
    public $humidade;
    public $pressao;
    public $descricao;
    public $icone;

    //Converte de KELVIN para CELCIUS
    public function getTemperaturaCelcius(): float{
     return $this->temperatura- 273.15;  
   }
   //Converte de KELVIN para FAHRENHEIT
   public function getTemperaturaFahrenheit(): float{
     return ($this->temperatura- 273.15)*9/5+32;  
   }
    public function getVelocidadeVento(): float{
     return ($this->velocidadeVento *3.6); 
   }   
   public function getPressaoAtm(): float{
     return $this->pressao /1013; 
   }  
   
}

?>

