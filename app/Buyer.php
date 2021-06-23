<?php

namespace App;

class Buyer extends User
{
    // un buyer a beaucoup de transactions
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
