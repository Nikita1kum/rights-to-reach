<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory; //was not

    protected $fillable = [
        'title',
        'description',
        'status',
        'user_id',
        'assigned_to',
    ];


    public function user(){
        return $this->belongsTo(User::class);}
}
