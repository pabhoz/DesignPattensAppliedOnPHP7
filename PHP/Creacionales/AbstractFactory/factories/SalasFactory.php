<?php

class SalasFactory implements SalasFactoryI{

  public function crearSalaVIP() : SalaVIP{
    return new SalaVIP();
  }

  public function crearSalaIMAX() : SalaIMAX{
    return new SalaIMAX();
  }

  public function crearSala(int $numero, array $sillas = []) : Sala{
    return new Sala($numero, $sillas);
  }
  
  public function crearSala4DX() : Sala4DX{
    return new Sala4DX();
  }

}

?>
