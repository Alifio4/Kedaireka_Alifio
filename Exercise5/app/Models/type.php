<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    protected $table = 'type';
    protected $fillable = ["name","description"];

    public function items(){
        return $this -> hasMany(item::class, "type_id", "id");
    }
}
