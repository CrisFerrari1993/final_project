<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Dish extends Model
{
    use HasFactory;

    // one to many relation
    public function restaurant(): BelongsTo
    {

        return $this -> belongsTo(Restaurant :: class);

    }

    // many to many relation
    public function orders(): BelongsToMany 
    {

        return $this -> belongsToMany(Order :: class);

    }
}
