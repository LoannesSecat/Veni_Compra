<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: subdominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Subdominios
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
 function Subdominios()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }


		/**
	* Metodo para Inciar la Transaccion en la tabla: subdominios
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: subdominios
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: subdominios
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: subdominios
	* @author SpyroFrameWork
	* @return int
	*/
 function existSubdominios($SUB_ID)
 {
   $sql = "SELECT * FROM subdominios WHERE SUB_ID=$SUB_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: subdominios
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(SUB_ID) as id FROM subdominios ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }


 	/**
	* Metodo para adicionar un registro a la tabla: subdominios
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addSubdominios($SUB_ID,$DOMINIOS_DOM_ID,$SUB_VALOR,$SUB_DESCRIPCION,$SUB_AUX1,$SUB_AUX2)
 {
   $sql="INSERT INTO subdominios VALUES($SUB_ID,$DOMINIOS_DOM_ID,'$SUB_VALOR','$SUB_DESCRIPCION','$SUB_AUX1','$SUB_AUX2')";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }

 	/**
	* Metodo para actualizar un registro de la tabla: subdominios
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateSubdominios($SUB_ID,$DOMINIOS_DOM_ID,$SUB_VALOR,$SUB_DESCRIPCION,$SUB_AUX1,$SUB_AUX2)
 {
  $sql="UPDATE subdominios SET DOMINIOS_DOM_ID=$DOMINIOS_DOM_ID,SUB_VALOR='$SUB_VALOR',SUB_DESCRIPCION='$SUB_DESCRIPCION',SUB_AUX1='$SUB_AUX1',SUB_AUX2='$SUB_AUX2' WHERE SUB_ID=$SUB_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: subdominios
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteSubdominios($SUB_ID)
 {
  $sql="DELETE FROM subdominios WHERE SUB_ID=$SUB_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: subdominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdSubdominios($SUB_ID)
 {
  $sql="SELECT * FROM subdominios WHERE SUB_ID=$SUB_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: subdominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllSubdominios()
 {
  $sql="SELECT * FROM subdominios";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla subdominios
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {

  $sql="SELECT * FROM subdominios WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_ID de la tabla: subdominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getSUB_ID($SUB_ID)
 {
  $sql="SELECT SUB_ID FROM subdominios WHERE SUB_ID=$SUB_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DOMINIOS_DOM_ID de la tabla: subdominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getDOMINIOS_DOM_ID($SUB_ID)
 {
  $sql="SELECT DOMINIOS_DOM_ID FROM subdominios WHERE SUB_ID=$SUB_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_VALOR de la tabla: subdominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getSUB_VALOR($SUB_ID)
 {
  $sql="SELECT SUB_VALOR FROM subdominios WHERE SUB_ID=$SUB_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_DESCRIPCION de la tabla: subdominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getSUB_DESCRIPCION($SUB_ID)
 {
  $sql="SELECT SUB_DESCRIPCION FROM subdominios WHERE SUB_ID=$SUB_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_AUX1 de la tabla: subdominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getSUB_AUX1($SUB_ID)
 {
  $sql="SELECT SUB_AUX1 FROM subdominios WHERE SUB_ID=$SUB_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_AUX2 de la tabla: subdominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getSUB_AUX2($SUB_ID)
 {
  $sql="SELECT SUB_AUX2 FROM subdominios WHERE SUB_ID=$SUB_ID";
  return $this->connection->GetAll($sql);
}


}?>