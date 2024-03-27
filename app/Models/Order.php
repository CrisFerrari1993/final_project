<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    // Many to many relation
    public function dishes(): BelongsToMany
    {

        return $this -> belongsToMany(Dish :: class)
            ->withPivot('name', 'price', 'quantity');

    }
    
    //One to many relation
    public function restaurant(): BelongsTo
    {

        return $this -> belongsTo(Restaurant :: class);

    }
}
