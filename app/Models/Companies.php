<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Companies extends Model
{
    use LogsActivity;
    
    protected $table = "companies";
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'email', 'logo', 'website'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Companies')
            ->logOnly(['name', 'email', 'logo', 'website'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Model Companies has been {$eventName}")
            ->dontSubmitEmptyLogs()
        ;
    }
}
