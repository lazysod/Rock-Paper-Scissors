<?php 


class game
{
	public function get_object($id)
	{
		$dbcon = new dbcon;
		$query = $dbcon->query("SELECT * FROM `object_compare` WHERE `source`='$id'");
		while($row = $query->fetch_assoc()){

			$obj  = array(
				
				'source' => e($row['source']),
				'beats' => e($row['beats']),
				'msg' => e($row['method']),
				);
		}
		return $obj;
	}

	public function play($p1)
	{
		$p2 = $this->roll();
		$p2_object = $this->get_object($p2);
		$p1_object = $this->get_object($p1);
		$data = array(
			'p1' => $p1_object,
			'p2' => $p2_object,
			);
		$res = $this->get_winner($data);
		$game_data = array(
			'result' => $res['status'],
			'p1' => $p1,
			'p2' => $p2,
			);
		return $game_data;
	}

	public function roll()
	{
		$num = rand(1,3);
		return $num;
	}

	public function get_winner($data)
	{
		
		if($data['p1']['source'] == $data['p2']['source']){
			return array('status'=>'draw',);
		}else if($data['p1']['beats'] == $data['p2']['source']){
			return array('status'=>'win');
		}else if($data['p2']['beats'] == $data['p1']['source']){
			return array('status'=>'loss');
		}else{
			return array('status' => 'ERROR',);
		}

	}

	public function get_item($id)
	{
		$dbcon = new dbcon;
		$query = $dbcon->query("SELECT * FROM `objects` WHERE `id`='$id'");
		while($row = $query->fetch_assoc()){
			$name = e($row['name']);
		}
		return $name;		
	}
}

?>