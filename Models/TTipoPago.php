<?php 
require_once("Libraries/Core/Mysql.php");
trait TTipoPago{
	private $con;

	public function getTiposPagoT(){
		$this->con = new Mysql();
		$sql = "SELECT * FROM tipopago WHERE status != 0";
		$request = $this->con->getall($sql);
		return $request;
	}
}

?>