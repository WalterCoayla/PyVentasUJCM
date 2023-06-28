<?php
require_once "./core/Controlador.php";
require_once "./modelos/Producto.php";
class CtrlProducto extends Controlador
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

        $obj = new Producto($id);
        $obj = $obj->getBy('idproductos',$id);

        $datos = array(
            'datos'=>$obj['data'][0]
        );
        $this->mostrar('productos/formNuevo.php',$datos);
    }

    public function guardar(){
        $id = $_POST['id'];
        $nombre= $_POST['nombre'];
        $descripcion= $_POST['descripcion'];
        $pu= $_POST['pu'];
        $stock= $_POST['stock'];
        $imagen= $_POST['imagen'];
        $idMarca= $_POST['idmarcas'];

        $op = $_POST['op'];
        $obj = new Producto($id, $nombre, $descripcion, $pu, $stock, $imagen, $idMarca);
        if ($op ==0){
            $obj->guardar();  //Guardar Nuevo
        } else {
            $obj->actualizar();// Editar (UPDATE)
        }
        
        $this->select();
    }

    public function nuevo(){
        $this->mostrar('productos/formNuevo.php');
    }

    public function eliminar(){
        $id = $_GET['id'];
        $obj = new Producto($id);
        $obj->eliminar();
        # var_dump($obj->eliminar()); exit;
        $this->select();
    }

    public function select(){
        $obj = new Producto();
        $objs= $obj->getAll();
        $datos = array(
            'datos'=>$objs['data']
        );

        $this->mostrar('productos/mostrar.php',$datos);
    }
}