<?
require_once dirname(__FILE__) . '/class.BXColumn.php';

class BXDatamap {
	
	protected $columns;
	
	/**
	 * add new column to datamap
	 *
	 * @param BXColumn $column
	 */
	public function add_column(BXColumn $column) {
		if (array_key_exists($column->get_field_name(), $this->columns)) {
			throw new Exception();
		}
		$this->columns[$column->get_field_name()] = $column;
	}
	
}
?>