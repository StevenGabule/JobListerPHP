<?php 

class Category extends DB_Object
{
	protected static $db_table = "tblcategories";
	protected static $db_table_fields = array(
		'category_id',
		'type'
	);

	public $category_id;
	public $type;
}

?>


