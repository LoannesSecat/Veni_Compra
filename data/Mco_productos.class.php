<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mco_productos
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mco_productos
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
 function Mco_productos()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }


		/**
	* Metodo para Inciar la Transaccion en la tabla: mco_productos
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: mco_productos
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: mco_productos
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: mco_productos
	* @author SpyroFrameWork
	* @return int
	*/
 function existMco_productos($PDU_ID)
 {
   $sql = "SELECT * FROM mco_productos WHERE PDU_ID=$PDU_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(PDU_ID) as id FROM mco_productos ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }


 	/**
	* Metodo para adicionar un registro a la tabla: mco_productos
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addMco_productos($PDU_ID,$PDU_NOMBRE,$PDU_DESCRIPCION,$PDU_IMAGENPRODU,$PDU_STOCKMINIMO,$SUB_NOMBRECAT,$SUB_UNIMEDIDA,$SUB_TALLA,$SUB_GENERO,$SUB_ESTADO)
 {
   $sql="INSERT INTO mco_productos VALUES($PDU_ID,'$PDU_NOMBRE','$PDU_DESCRIPCION','$PDU_IMAGENPRODU',$PDU_STOCKMINIMO,$SUB_NOMBRECAT,$SUB_UNIMEDIDA,$SUB_TALLA,$SUB_GENERO,$SUB_ESTADO)";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }

 	/**
	* Metodo para actualizar un registro de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateMco_productos($PDU_ID,$PDU_NOMBRE,$PDU_DESCRIPCION,$PDU_IMAGENPRODU,$PDU_STOCKMINIMO,$SUB_NOMBRECAT,$SUB_UNIMEDIDA,$SUB_TALLA,$SUB_GENERO,$SUB_ESTADO)
 {
  $sql="UPDATE mco_productos SET PDU_NOMBRE='$PDU_NOMBRE',PDU_DESCRIPCION='$PDU_DESCRIPCION',PDU_IMAGENPRODU='$PDU_IMAGENPRODU',PDU_STOCKMINIMO=$PDU_STOCKMINIMO,SUB_NOMBRECAT=$SUB_NOMBRECAT,SUB_UNIMEDIDA=$SUB_UNIMEDIDA,SUB_TALLA=$SUB_TALLA,SUB_GENERO=$SUB_GENERO,SUB_ESTADO=$SUB_ESTADO WHERE PDU_ID=$PDU_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteMco_productos($PDU_ID)
 {
  $sql="DELETE FROM mco_productos WHERE PDU_ID=$PDU_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdMco_productos($PDU_ID)
 {
  $sql="SELECT * FROM mco_productos WHERE PDU_ID=$PDU_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllMco_productos()
 {
  $sql="SELECT * FROM mco_productos";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mco_productos
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {

  $sql="SELECT * FROM mco_productos WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PDU_ID de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return array
	*/
 function getPDU_ID($PDU_ID)
 {
  $sql="SELECT PDU_ID FROM mco_productos WHERE PDU_ID=$PDU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PDU_NOMBRE de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return array
	*/
 function getPDU_NOMBRE($PDU_ID)
 {
  $sql="SELECT PDU_NOMBRE FROM mco_productos WHERE PDU_ID=$PDU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PDU_DESCRIPCION de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return array
	*/
 function getPDU_DESCRIPCION($PDU_ID)
 {
  $sql="SELECT PDU_DESCRIPCION FROM mco_productos WHERE PDU_ID=$PDU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PDU_IMAGENPRODU de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return array
	*/
 function getPDU_IMAGENPRODU($PDU_ID)
 {
  $sql="SELECT PDU_IMAGENPRODU FROM mco_productos WHERE PDU_ID=$PDU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PDU_STOCKMINIMO de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return array
	*/
 function getPDU_STOCKMINIMO($PDU_ID)
 {
  $sql="SELECT PDU_STOCKMINIMO FROM mco_productos WHERE PDU_ID=$PDU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_NOMBRECAT de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return array
	*/
 function getSUB_NOMBRECAT($PDU_ID)
 {
  $sql="SELECT SUB_NOMBRECAT FROM mco_productos WHERE PDU_ID=$PDU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_UNIMEDIDA de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return array
	*/
 function getSUB_UNIMEDIDA($PDU_ID)
 {
  $sql="SELECT SUB_UNIMEDIDA FROM mco_productos WHERE PDU_ID=$PDU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_TALLA de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return array
	*/
 function getSUB_TALLA($PDU_ID)
 {
  $sql="SELECT SUB_TALLA FROM mco_productos WHERE PDU_ID=$PDU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_GENERO de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return array
	*/
 function getSUB_GENERO($PDU_ID)
 {
  $sql="SELECT SUB_GENERO FROM mco_productos WHERE PDU_ID=$PDU_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_ESTADO de la tabla: mco_productos
	* @author SpyroFrameWork
	* @return array
	*/
 function getSUB_ESTADO($PDU_ID)
 {
  $sql="SELECT SUB_ESTADO FROM mco_productos WHERE PDU_ID=$PDU_ID";
  return $this->connection->GetAll($sql);
}


}?>