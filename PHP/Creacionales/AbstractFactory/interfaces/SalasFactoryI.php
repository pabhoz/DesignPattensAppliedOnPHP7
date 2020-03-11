<?php interface SalasFactoryI{

  public function crearSalaVIP(): SalaVIP;
  public function crearSalaIMAX(): SalaIMAX;
  public function crearSala(int $numero, array $sillas): Sala;
  public function crearSala4DX(): Sala4DX;

}
?>
