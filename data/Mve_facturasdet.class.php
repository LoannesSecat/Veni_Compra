<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mve_facturasdet
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mve_facturasdet
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
 function Mve_facturasdet()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }

 
		/**
	* Metodo para Inciar la Transaccion en la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return int
	*/
 function existMve_facturasdet($FDE_ID)
 {
   $sql = "SELECT * FROM mve_facturasdet WHERE FDE_ID=$FDE_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(FDE_ID) as id FROM mve_facturasdet ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }

 
 	/**
	* Metodo para adicionar un registro a la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addMve_facturasdet($FDE_ID,$FDE_CANTIDAD,$FDE_PRECIOUNITA,$FAC_ID,$PDU_ID,$PPM_ID)
 {
   $sql="INSERT INTO mve_facturasdet VALUES($FDE_ID,$FDE_CANTIDAD,$FDE_PRECIOUNITA,$FAC_ID,$PDU_ID,$PPM_ID)";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }
 
 	/**
	* Metodo para actualizar un registro de la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateMve_facturasdet($FDE_ID,$FDE_CANTIDAD,$FDE_PRECIOUNITA,$FAC_ID,$PDU_ID,$PPM_ID)
 {
  $sql="UPDATE mve_facturasdet SET FDE_CANTIDAD=$FDE_CANTIDAD,FDE_PRECIOUNITA=$FDE_PRECIOUNITA,FAC_ID=$FAC_ID,PDU_ID=$PDU_ID,PPM_ID=$PPM_ID WHERE FDE_ID=$FDE_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteMve_facturasdet($FDE_ID)
 {
  $sql="DELETE FROM mve_facturasdet WHERE FDE_ID=$FDE_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdMve_facturasdet($FDE_ID)
 {
  $sql="SELECT * FROM mve_facturasdet WHERE FDE_ID=$FDE_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllMve_facturasdet()
 {
  $sql="SELECT * FROM mve_facturasdet";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mve_facturasdet
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {
  
  $sql="SELECT * FROM mve_facturasdet WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna FDE_ID de la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return array
	*/
 function getFDE_ID($FDE_ID)
 {
  $sql="SELECT FDE_ID FROM mve_facturasdet WHERE FDE_ID=$FDE_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna FDE_CANTIDAD de la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return array
	*/
 function getFDE_CANTIDAD($FDE_ID)
 {
  $sql="SELECT FDE_CANTIDAD FROM mve_facturasdet WHERE FDE_ID=$FDE_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna FDE_PRECIOUNITA de la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return array
	*/
 function getFDE_PRECIOUNITA($FDE_ID)
 {
  $sql="SELECT FDE_PRECIOUNITA FROM mve_facturasdet WHERE FDE_ID=$FDE_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna FAC_ID de la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return array
	*/
 function getFAC_ID($FDE_ID)
 {
  $sql="SELECT FAC_ID FROM mve_facturasdet WHERE FDE_ID=$FDE_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PDU_ID de la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return array
	*/
 function getPDU_ID($FDE_ID)
 {
  $sql="SELECT PDU_ID FROM mve_facturasdet WHERE FDE_ID=$FDE_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PPM_ID de la tabla: mve_facturasdet
	* @author SpyroFrameWork
	* @return array
	*/
 function getPPM_ID($FDE_ID)
 {
  $sql="SELECT PPM_ID FROM mve_facturasdet WHERE FDE_ID=$FDE_ID";
  return $this->connection->GetAll($sql);
}


}?>