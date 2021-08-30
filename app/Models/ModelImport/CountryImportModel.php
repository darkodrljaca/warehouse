<?php

namespace App\Models\ModelImport;

use App\Models\Country; 

class CountryImportModel extends Country
{

    protected $table = 'countries';

    protected $fillable = [
        'name',
        'user_id'        
    ]; 
    
    
}
