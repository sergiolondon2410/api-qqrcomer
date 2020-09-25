<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Business extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'category',
        'email',
        'address',
        'contact',
        'web_page',
        'logo',
        'cover_image',
        'qr_code',
        'primary_color',
        'secondary_color',
        'note'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'category' => 'string',
        'email' => 'string',
        'address' => 'string',
        'contact' => 'string',
        'web_page' => 'string',
        'logo' => 'string',
        'cover_image' => 'string',
        'qr_code' => 'string',
        'primary_color' => 'string',
        'secondary_color' => 'string',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required'
    ];
}
