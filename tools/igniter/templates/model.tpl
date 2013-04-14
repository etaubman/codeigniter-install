<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class {{Name}} extends DataMapper {
	/**
	 * Define Relations
	 */
	public $table = '';
	public $created_field = 'created_date';
	public $updated_field = 'modified_date';
	
	public function __construct ($id)
	{
		parent::__construct($id);
	}
}

/* End of file {{name}}.php */
/* Location: ./application/models/{{name}}.php */