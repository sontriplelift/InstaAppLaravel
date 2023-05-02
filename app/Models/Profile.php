<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getProfileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/lJCnQlXFa3IrZQdewz6o7dYrx7MQD8S6rOddD9vW.jpg';
        return '/storage/' . $imagePath;
    }

    /**
     * Get the user that owns the Profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
