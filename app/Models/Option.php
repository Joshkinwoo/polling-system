<?php

// app/Option.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    // ... other model code
}