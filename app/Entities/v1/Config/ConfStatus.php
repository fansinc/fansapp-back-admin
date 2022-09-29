<?php

namespace App\Entities\v1\Config;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class ConfStatus extends Model implements Auditable
{
    use AuditingAuditable, SoftDeletes;
    //
    protected $fillable = [
        'name',
        'created_by',
        'updated_by',

    ];
    
}
