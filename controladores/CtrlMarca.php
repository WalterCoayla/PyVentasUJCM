<?php
require_once "./core/Controlador.php";
require_once "./modelos/Marca.php";
class CtrlMarca extends Controlador
{
    public function index(){
        $accion = isset ($_GET['accion'])?$_GET['accion']:'mostrar';

        switch ($accion) {
            case 'nuevo':
                $this->nuevo();
                break;
            case 'editar':
                $this->editar();
                break;
            case 'eliminar':
                $this->eliminar();
                break;
            case 'guardar':
                $this->guardar();
                break;
            
            default:
                $this->select();
                break;
        }
        
    }
    public function editar(){
        $id = $_GET['id'];

        $m = new Marca($id);
        $marca = $m->getBy('idmarcas',$id);

        $datos = array(
            'datos'=>$marca['data'][0]
        );
        $this->mostrar('marcas/formNuevo.php',$datos);
    }

    public function guardar(){
        $id = $_POST['id'];
        $marca= $_POST['marca'];

        $op = $_POST['op'];
        $m = new Marca($id,$marca);
        if ($op ==0){
            $m->guardar();  //Guardar Nuevo
        } else {
            $m->actualizar();// Editar (UPDATE)
        }
        
        $this->select();
    }

    public function nuevo(){
        $this->mostrar('marcas/formNuevo.php');
    }

    public function eliminar(){
        $id = $_GET['id'];
        $m = new Marca($id);
        $m->eliminar();
        # var_dump($m->eliminar()); exit;
        $this->select();
    }

    public function select(){
        $m = new Marca('marcas');
        $marcas= $m->getAll();
        $datos = array(
            'datos'=>$marcas['data']
        );

        $this->mostrar('marcas/mostrar.php',$datos);
    }
}