<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public $timestamps = true;
    protected $dates = ['deleted_at','created_at','updated_at'];
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = ['tweet'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
