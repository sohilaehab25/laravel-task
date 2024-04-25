<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;


//capital letter and the table name must be end with "s"
class Student extends Model
{
    use HasFactory;
    #students 
    protected $table = 'student';
        //relationship with instractor
    public function user()
    {
        return $this->belongsTo(User::class);
    } 
    

    
    
    
}
