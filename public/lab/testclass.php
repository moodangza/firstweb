<?
class helloworld {

	public function myPublicFunc (){
		return "I am Public!";
	}

	private function myPrivateFunc (){
		return "I am Private!";
	}

	protected function myProtectedFunc (){
		return "I am Private!";
	}

	function output (){
		echo "Public Function: ".$this->myPublicFunc()."<br/>";
		echo "Private Function: ".$this->myPrivateFunc()."<br/>";
		echo "Protected Function: ".$this->myProtectedFunc()."<br/>";
	}
}

class hellomars extends helloworld {
	function __construct(){
		echo "Public Function: ".$this->myPublicFunc()."<br/>";
		echo "Protected Function: ".$this->myProtectedFunc()."<br/>";
		echo "Private Function: ".$this->myPrivateFunc()."<br/>";
	}
}
?>