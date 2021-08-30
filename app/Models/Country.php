<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; 
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Country extends Model
{
    use HasFactory, SoftDeletes, Sortable;

    protected $fillable = [
        'name'        
    ]; 
    
    public $sortable = ['name'];

    public function user() {

        return $this->belongsTo(User::class);

    }
    
}
