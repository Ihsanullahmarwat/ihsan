
<?php 
  class Post{
  	private $conn;
  	private $table='posts'

  	// Post properties

  	public $item_id;
  	public $hotel_id;
  	public $item_name;
  	public $price;
  	public $description;
  	public $presence;
 

 // Constructor with DB
  	public function __construct($db){
  		$this->conn=$db;
  	}
  	//Get Posts

  	public function read(){
  		// Create query
  		$query='SELECT'
  	}
  }

 ?>