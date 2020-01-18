<?php 

class Jobs extends DB_Object
{
	protected static $db_table = "tbljobs";
	protected static $db_table_fields = array(
		'id',
		'category_id',
		'company',
		'job_title',
		'description',
		'salary',
		'location',
		'contact_user',
		'contact_email',
		'post_date'
	);

	public $id;
	public $category_id;
	public $company;
	public $job_title;
	public $description;
	public $salary;
	public $location;
	public $contact_user;
	public $contact_email;
	public $post_date;

    public static function Search($search)
    {
        $search = preg_replace('#[^a-z 0-9?!]#i', '', $search);
        $the_result_array = static::find_by_query("SELECT * FROM " . static::$db_table . " WHERE job_title LIKE '%$search%'");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
}

?>


