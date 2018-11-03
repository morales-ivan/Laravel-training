<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded = [];

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function getImageAttribute($image)
	{
		if (!$image || starts_with($image, 'http')) {
			return $image;
		}

		return \Storage::disk('public')->url($image);
	}
}
