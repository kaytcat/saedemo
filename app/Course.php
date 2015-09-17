<?php

namespace SaeDemo;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $table = 'courses';

	protected $fillable = ['title', 'description'];

	// protected $guarded = ['id', 'created_at', 'updated_at'];

}
