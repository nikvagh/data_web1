<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'address', 'abn', 'agent_id' 
    ];

    protected $table = 'customer';
    
	 
}
