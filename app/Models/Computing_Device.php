<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computing_Devices extends Model
{
    use HasFactory;
    protected $table = 'computing_devices';
    protected $fillable = [
            'computing_device_id',
            'ict_id',
            'operating_system',
            'ram_',
            'memory_capacity',
            'processor_desc',
            'has_video_card',
            'other_desc',
            
           
    ];



    public function links() {
    // return 'text';
    }
}
