<?php

// app/Vote.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    // ... other model code
}

