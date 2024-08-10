<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $fillable = [
        'name', 'phone', 'email', 'planet', 'message', 'result', 'privacy'
    ];
}

?>