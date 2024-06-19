<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ict extends Model
{
    use HasFactory;
    protected $table = 'ict_devices';
    protected $fillable = [
            'department_id',
            'ict_category_id',
            'status_id',
            'ip_config_id',
            'end_user',
            'property_no',
            'ict_code',
            'brand',
            'model',
            'serial_no',
            'address',
            'floor',
            'manufactured_date',
    ];



    public function links() {
    // return 'text';
    }
}
