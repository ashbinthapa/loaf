<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;


class Home extends Model
{
    use HasFactory, SoftDeletes;

    const EXCERPT_LENGTH = 100;

    protected $fillable = [
        'user_id',
        'content',
    ];}
