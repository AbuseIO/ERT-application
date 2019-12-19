<?php namespace ReporterTool\EOKM\Models;

use BackendAuth;
use reportertool\eokm\classes\ertModel;

/**
 * Model
 */
class Input_status extends ertModel
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'reportertool_eokm_input_status';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
