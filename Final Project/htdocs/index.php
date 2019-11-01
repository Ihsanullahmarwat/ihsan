<?php 

 require_once __DIR__ .'/config.php';
 class API{
 	function Select(){
 		$db=new Connect;
 		$menu=array();
 		$data=$db->prepare('SELECT * FROM menu ORDER BY item_id');
 		$data->execute();
 		while($OutputData=$data->fetch(PDO::FETCH_ASSOC)){
 			$menu[$OutputData['item_id']]=array(
            'item_id'=>    $OutputData['item_id'],
            'hotel_id'=>   $OutputData['hotel_id'],
            'item_name'=>  $OutputData['item_name'],

            'price'=>      $OutputData['price'],
            'description'=>$OutputData['description'],
            'presence'=>   $OutputData['presence']


 			);
 		}

 		return json_encode($menu);
 	}
 }

   $API =new API;
   header('Content-Type: Code Scanner App/json');
   echo $API->Select();
 ?>