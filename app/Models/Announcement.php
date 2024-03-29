<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    public $guarded=[];
    public function admin()
    {
        return $this->belongsTo(Admin::class,'admin_id');
    }


    protected function photo(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => asset($value),
        );
    }
}
