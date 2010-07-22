<?
class BXField {
	
	/**
	 * Name of field in Bitrix scheme
	 *
	 * @var string
	 */
	protected $column_name;
	
	/**
	 * Name of field in domain layer
	 *
	 * @var string
	 */
	protected $field_name;
	
	public function __construct($field_name, $column_name) {
		$this->field_name = $field_name;
		$this->column_name = $column_name;
	}
	
	public function get_name() {
		return $this->name;
	}
	
	public function get_key() {
		return $this->key;
	}
	
}
?>