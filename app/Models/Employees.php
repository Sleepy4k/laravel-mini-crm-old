<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Employees extends Model
{
    use LogsActivity;

    protected $table = "employees";
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'first_name', 'last_name', 'company', 'email', 'phone'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Employees')
            ->logOnly(['first_name', 'last_name', 'company', 'email', 'phone'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Model Employees has been {$eventName}")
            ->dontSubmitEmptyLogs()
        ;
    }
}
