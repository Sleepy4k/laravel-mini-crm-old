<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Companies extends Model
{

    protected static $logAttributes = ['name', 'email', 'logo', 'website'];

    protected static $logOnlyDirty = true;

    protected static $logName = 'companies';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "model companies successfully {$eventName}";
    }

    protected $table = "companies";
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'email', 'logo', 'website'];
}
