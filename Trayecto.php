<?php
class Trayecto {
    var $name;
    var $trayecto;
    var $direccion;
    var $hora;
    var $precio;
    var $plazas;
        
    function rellenarObjeto($p1, $p2, $p3, $p4, $p5, $p6) {
        $this->name = $p1;
        $this->trayecto = $p2;
        $this->direccion = $p3;
        $this->hora = $p4;
        $this->precio = $p5;
        $this->plazas = $p6;
    }
}
?>