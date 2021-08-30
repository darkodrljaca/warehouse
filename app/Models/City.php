<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class City extends Model
{
    use HasFactory, SoftDeletes, Sortable;

    protected $fillable = [
            'name', 
            'postal_code', 
            'user_id',
            'country_id'
    ];

    public $sortable = ['name', 'postal_code'];

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    
}
