<?php

namespace App\Models\Admin;

use App\Models\Upcoming;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    /**
     * Get the upcoming that owns the Enrollment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function upcoming()
    {
        return $this->belongsTo(Upcoming::class);
    }
}
