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
		$this->columns[$column->get_field_name()] = $column;
	}
	
}
?>