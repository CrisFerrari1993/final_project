<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
    use HasFactory;

    // One to one relation
    public function user(): BelongsTo 
    {

        return $this -> belongsTo(User :: class);

    }
    // One to many relation
    public function dishes(): HasMany 
    {

        return $this -> hasMany(Dish :: class);

    }
    public function orders(): HasMany 
    {

        return $this -> hasMany(Order :: class);

    }
    // Many to many relation
    public function categories(): BelonsToMany
    {

        return $this -> belongsToMany(Category :: class);

    }
}
