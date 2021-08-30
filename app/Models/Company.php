<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\City; 
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Company extends Model
{
    use HasFactory, SoftDeletes, Sortable;

    protected $fillable = [
        'name',
        'maticni_broj',
        'pib',
        'sifra_delatnosti',
        'user_id',
        'city_id'
    ]; 
    
    public $sortable = ['name'];

    public function user() {

        return $this->belongsTo(User::class);

    }

    public function city() {

        return $this->belongsTo(City::class);

    }
    
}
