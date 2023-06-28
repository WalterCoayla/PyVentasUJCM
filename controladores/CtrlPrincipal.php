<?php
require_once "./core/Controlador.php";
class CtrlPrincipal extends Controlador{
    public function index(){
        $this->mostrar('principal.php');
    }
}