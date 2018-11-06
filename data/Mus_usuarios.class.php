<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mus_usuarios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mus_usuarios
{
     /**
     * conexion de bases de datos.
     */
     var $connection;
     /**
     * recurso de base de datos
     */
     var $consult;
     
	/**
	* Metodo constructor de la clase
	* @author SpyroFrameWork
	*/
 function Mus_usuarios()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }

 
		/**
	* Metodo para Inciar la Transaccion en la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return int
	*/
 function existMus_usuarios($USU_ID)
 {
   $sql = "SELECT * FROM mus_usuarios WHERE USU_ID=$USU_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(USU_ID) as id FROM mus_usuarios ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }

 
 	/**
	* Metodo para adicionar un registro a la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addMus_usuarios($USU_ID,$USU_NOMBRE,$USU_APELLIDO,$USU_FECHA_NACI,$USU_DIRECCION,$USU_EMAIL,$USU_CELULAR,$USU_CONTRASENA,$SUB_SEXO,$ROL_ID)
 {
   $sql="INSERT INTO mus_usuarios VALUES($USU_ID,'$USU_NOMBRE','$USU_APELLIDO','$USU_FECHA_NACI','$USU_DIRECCION','$USU_EMAIL','$USU_CELULAR','$USU_CONTRASENA',$SUB_SEXO,$ROL_ID)";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }
 
 	/**
	* Metodo para actualizar un registro de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateMus_usuarios($USU_ID,$USU_NOMBRE,$USU_APELLIDO,$USU_FECHA_NACI,$USU_DIRECCION,$USU_EMAIL,$USU_CELULAR,$USU_CONTRASENA,$SUB_SEXO,$ROL_ID)
 {
  $sql="UPDATE mus_usuarios SET USU_NOMBRE='$USU_NOMBRE',USU_APELLIDO='$USU_APELLIDO',USU_FECHA_NACI='$USU_FECHA_NACI',USU_DIRECCION='$USU_DIRECCION',USU_EMAIL='$USU_EMAIL',USU_CELULAR='$USU_CELULAR',USU_CONTRASENA='$USU_CONTRASENA',SUB_SEXO=$SUB_SEXO,ROL_ID=$ROL_ID WHERE USU_ID=$USU_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteMus_usuarios($USU_ID)
 {
  $sql="DELETE FROM mus_usuarios WHERE USU_ID=$USU_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdMus_usuarios($USU_ID)
 {
  $sql="SELECT * FROM mus_usuarios WHERE USU_ID=$USU_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllMus_usuarios()
 {
  $sql="SELECT * FROM mus_usuarios";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mus_usuarios
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {
  
  $sql="SELECT * FROM mus_usuarios WHERE ";

  switch ($condiction) {


		case "=": //Equal
   $condiction_sql ="$field = '$keyword'"; 
   break;

		case "!=": //Different  
   $condiction_sql ="$field !='$keyword'"; 
   break;  
   
		case "_%": //Begin With
   $condiction_sql ="$field like '$keyword%'";
   break;  

		case "%_": //End With
   $condiction_sql ="$field like '%$keyword' "; 
   break;  
   
		case "%": //End Content
   $condiction_sql ="$field like '%$keyword%' "; 
   break; 						 
   
 }
 $sql .= $condiction_sql;  
 
 return $this->connection->GetAll($sql);
}	

	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USU_ID de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return array
	*/
 function getUSU_ID($USU_ID)
 {
  $sql="SELECT USU_ID FROM mus_usuarios WHERE USU_ID=$USU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USU_NOMBRE de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return array
	*/
 function getUSU_NOMBRE($USU_ID)
 {
  $sql="SELECT USU_NOMBRE FROM mus_usuarios WHERE USU_ID=$USU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USU_APELLIDO de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return array
	*/
 function getUSU_APELLIDO($USU_ID)
 {
  $sql="SELECT USU_APELLIDO FROM mus_usuarios WHERE USU_ID=$USU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USU_FECHA_NACI de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return array
	*/
 function getUSU_FECHA_NACI($USU_ID)
 {
  $sql="SELECT USU_FECHA_NACI FROM mus_usuarios WHERE USU_ID=$USU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USU_DIRECCION de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return array
	*/
 function getUSU_DIRECCION($USU_ID)
 {
  $sql="SELECT USU_DIRECCION FROM mus_usuarios WHERE USU_ID=$USU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USU_EMAIL de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return array
	*/
 function getUSU_EMAIL($USU_ID)
 {
  $sql="SELECT USU_EMAIL FROM mus_usuarios WHERE USU_ID=$USU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USU_CELULAR de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return array
	*/
 function getUSU_CELULAR($USU_ID)
 {
  $sql="SELECT USU_CELULAR FROM mus_usuarios WHERE USU_ID=$USU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USU_CONTRASENA de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return array
	*/
 function getUSU_CONTRASENA($USU_ID)
 {
  $sql="SELECT USU_CONTRASENA FROM mus_usuarios WHERE USU_ID=$USU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_SEXO de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return array
	*/
 function getSUB_SEXO($USU_ID)
 {
  $sql="SELECT SUB_SEXO FROM mus_usuarios WHERE USU_ID=$USU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna ROL_ID de la tabla: mus_usuarios
	* @author SpyroFrameWork
	* @return array
	*/
 function getROL_ID($USU_ID)
 {
  $sql="SELECT ROL_ID FROM mus_usuarios WHERE USU_ID=$USU_ID";
  return $this->connection->GetAll($sql);
}


}?>