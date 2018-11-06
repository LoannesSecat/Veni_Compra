<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: detalleinventa
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Detalleinventa
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
  function Detalleinventa()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }


		/**
	* Metodo para Inciar la Transaccion en la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return int
	*/
 function existDetalleinventa($DIN_ID)
 {
   $sql = "SELECT * FROM detalleinventa WHERE DIN_ID=$DIN_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(DIN_ID) as id FROM detalleinventa ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }


 	/**
	* Metodo para adicionar un registro a la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addDetalleinventa($DIN_ID,$PDU_ID,$INV_ID,$DIN_LOTE,$DIN_CANTIDAD,$DIN_PRECIOVENTA,$DIN_FECHA_CADU,$DIN_EXIS_BIEN,$DIN_EXIS_MAL,$DIN_DEVOL_COMP,$DIN_DEVOL_VENT)
 {
   $sql="INSERT INTO detalleinventa VALUES($DIN_ID,$PDU_ID,$INV_ID,'$DIN_LOTE',$DIN_CANTIDAD,$DIN_PRECIOVENTA,'$DIN_FECHA_CADU',$DIN_EXIS_BIEN,$DIN_EXIS_MAL,$DIN_DEVOL_COMP,$DIN_DEVOL_VENT)";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }

 	/**
	* Metodo para actualizar un registro de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateDetalleinventa($DIN_ID,$PDU_ID,$INV_ID,$DIN_LOTE,$DIN_CANTIDAD,$DIN_PRECIOVENTA,$DIN_FECHA_CADU,$DIN_EXIS_BIEN,$DIN_EXIS_MAL,$DIN_DEVOL_COMP,$DIN_DEVOL_VENT)
 {
  $sql="UPDATE detalleinventa SET PDU_ID=$PDU_ID,INV_ID=$INV_ID,DIN_LOTE='$DIN_LOTE',DIN_CANTIDAD=$DIN_CANTIDAD,DIN_PRECIOVENTA=$DIN_PRECIOVENTA,DIN_FECHA_CADU='$DIN_FECHA_CADU',DIN_EXIS_BIEN=$DIN_EXIS_BIEN,DIN_EXIS_MAL=$DIN_EXIS_MAL,DIN_DEVOL_COMP=$DIN_DEVOL_COMP,DIN_DEVOL_VENT=$DIN_DEVOL_VENT WHERE DIN_ID=$DIN_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteDetalleinventa($DIN_ID)
 {
  $sql="DELETE FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdDetalleinventa($DIN_ID)
 {
  $sql="SELECT * FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllDetalleinventa()
 {
  $sql="SELECT * FROM detalleinventa";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla detalleinventa
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {

  $sql="SELECT * FROM detalleinventa WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DIN_ID de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getDIN_ID($DIN_ID)
 {
  $sql="SELECT DIN_ID FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PDU_ID de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getPDU_ID($DIN_ID)
 {
  $sql="SELECT PDU_ID FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna INV_ID de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getINV_ID($DIN_ID)
 {
  $sql="SELECT INV_ID FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DIN_LOTE de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getDIN_LOTE($DIN_ID)
 {
  $sql="SELECT DIN_LOTE FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DIN_CANTIDAD de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getDIN_CANTIDAD($DIN_ID)
 {
  $sql="SELECT DIN_CANTIDAD FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DIN_PRECIOVENTA de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getDIN_PRECIOVENTA($DIN_ID)
 {
  $sql="SELECT DIN_PRECIOVENTA FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DIN_FECHA_CADU de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getDIN_FECHA_CADU($DIN_ID)
 {
  $sql="SELECT DIN_FECHA_CADU FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DIN_EXIS_BIEN de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getDIN_EXIS_BIEN($DIN_ID)
 {
  $sql="SELECT DIN_EXIS_BIEN FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DIN_EXIS_MAL de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getDIN_EXIS_MAL($DIN_ID)
 {
  $sql="SELECT DIN_EXIS_MAL FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DIN_DEVOL_COMP de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getDIN_DEVOL_COMP($DIN_ID)
 {
  $sql="SELECT DIN_DEVOL_COMP FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DIN_DEVOL_VENT de la tabla: detalleinventa
	* @author SpyroFrameWork
	* @return array
	*/
 function getDIN_DEVOL_VENT($DIN_ID)
 {
  $sql="SELECT DIN_DEVOL_VENT FROM detalleinventa WHERE DIN_ID=$DIN_ID";
  return $this->connection->GetAll($sql);
}


}?>