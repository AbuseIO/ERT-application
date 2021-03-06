<?php namespace ReporterTool\EOKM\Models;

use Model;

/**
 * Model
 */
class Abusecontact_type extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'reportertool_eokm_abusecontact_type';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
