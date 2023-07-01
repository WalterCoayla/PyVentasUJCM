<?php
require_once "./core/Modelo.php";
class Empleado extends Modelo
{
    private $_id;
    private $_nombre;
    private $_apellido;
    private $_fechaNacimiento;
    private $_DNI;
    private $_fechaAlta;
    private $_tipo;
    private $_login;
    private $_password;

    private $_tabla = 'empleados';
    private $_vista = 'v_empleados';

    public function __construct($id=null, $nombre=null, 
                        $apellido=null, $fechaNacimiento=null, $DNI=0, $fechaAlta=null,$tipo=null){
        $this->_id = $id;
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
        $this->_fechaNacimiento = $fechaNacimiento;
        $this->_DNI = $DNI;
        $this->_fechaAlta = $fechaAlta;
        $this->_tipo = $tipo;

        parent::__construct($this->_tabla);

    }
    public function getAll(){
        parent::setTabla($this->_vista);
        return parent::getAll();
    }
    public function getBy($columna,$valor){
        parent::setTabla($this->_vista);
        return parent::getBy($columna,$valor);
    }
    public function eliminar(){
        
        return $this->deleteBy('idproductos',$this->_id);
    }
    public function guardar(){
        $datos = array(
            'idproductos'=>$this->_id,
            'nombre'=>"'$this->_nombre'",
            'descripcion'=>"'$this->_descripcion'",
            'precio_unitario'=>"$this->_pu",
            'stock'=>"'$this->_stock'",
            'imagen'=>"'$this->_imagen'",
            'idmarcas'=>$this->_marca
            // 'idmarcas'=>$this->_marca->getId()
        );
        
        return $this->insert($datos);
    }

    public function actualizar(){
        $datos = array(
            'nombre'=>"'$this->_nombre'",
            'descripcion'=>"'$this->_descripcion'",
            'precio_unitario'=>"$this->_pu",
            'stock'=>"'$this->_stock'",
            'imagen'=>"'$this->_imagen'",
            'idmarcas'=>$this->_marca
            // 'idmarcas'=>$this->_marca->getId()
        );
        $wh="idproductos=$this->_id";
        
        return $this->update($wh, $datos);
    }
    public function login($login, $clave){
        $this->_login = $login;
        $this->_password = $clave;

        $this->_sql->addWhere("`login`='$login'");
        $this->_sql->addWhere("`password`='$clave'");
        // echo $this->_sql;exit;
        return $this->_bd->ejecutar($this->_sql);
    }
    
}