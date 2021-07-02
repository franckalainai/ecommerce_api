<?php

namespace App;

use App\Scopes\BuyerScope;

class Buyer extends User
{
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new BuyerScope);
    }

    // un buyer a beaucoup de transactions
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
