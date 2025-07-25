<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{

    protected $fillable = [
        'name',
        'course_id',
        'details',
        'status',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
        'course_id' => 'integer',
    ];
    /**
     * Get the course that owns the batch.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
