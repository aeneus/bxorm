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
	
	public function get_field_name() {
		return $this->field_name;
	}
	
	public function get_column_name() {
		return $this->column_name;
	}
	
}
?>