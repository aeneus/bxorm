<?
class BXField {
	
	protected $name;
	protected $key;
	
	public function __construct($name, $key) {
		$this->name = $name;
		$this->key = $key;
	}
	
	public function get_name() {
		return $this->name;
	}
	
	public function get_key() {
		return $this->key;
	}
	
}
?>