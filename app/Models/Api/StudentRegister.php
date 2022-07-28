<?php

namespace App\Models\Api;

use App\Models\Upcoming;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegister extends Model
{
    use HasFactory;

    /**
     * Get the upcoming that owns the StudentRegister
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function upcoming()
    {
        return $this->belongsTo(Upcoming::class);
    }
}
