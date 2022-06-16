<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Employees extends Model
{

    protected static $logAttributes = ['first_name', 'last_name', 'company', 'email', 'phone'];

    protected static $logOnlyDirty = true;

    protected static $logName = 'employees';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "model employees successfully {$eventName}";
    }

    protected $table = "employees";
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'first_name', 'last_name', 'company', 'email', 'phone'];
}
