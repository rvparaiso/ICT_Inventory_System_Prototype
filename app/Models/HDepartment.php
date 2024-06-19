<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HDepartment extends Model
{
    use HasFactory;
    protected $table = 'h_department';
    protected $fillable = [
        'name',
        'floor',

    ];

    public function links() {
    // return 'text';
    }
}
