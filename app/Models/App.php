<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function documentation(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Documentation::class, 'documentation_sections_apps', 'documentation_section_id', 'app_id');
    }
}
