<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';  // Table name if it’s not the plural form of the model name
    protected $primaryKey = 'id';  // Primary key if it's not the default "id"
    //protected $fillable = ['name', 'description', 'price'];  // Fillable fields

    
    protected $fillable = ['name', 'description', 'user_id'];

    // Define the relationship: A service belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

