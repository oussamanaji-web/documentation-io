<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    protected $table = 'documentation_sections';

    protected $fillable = [
        'title',
        'content',
        'parent',
        'url',
        'apiMethode',
        'apiParamètre',
        'apiName',
        'apiDescription',
        'casDescription',
        'casTitle',
        'frontTitle',
        'frontDescription',
        'frontSourceCode',
        'frontEdition',
        'backTitle',
        'backDescription',
        'backSourceCode'
    ];

}
