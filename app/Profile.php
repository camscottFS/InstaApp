<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function followers()
    {
      return $this->BelongsToMany(User::class);
    }

    public function profileImage()
    {
      $imagePath = ($this->image) ? $this->image : 'profile/1pxfw2IxbbJhDVhb1r5YCv3IKLHHZ2wGTJsUO8zP.png';
      return '/storage/' . $imagePath;
    }
}
