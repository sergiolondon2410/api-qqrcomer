<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'business_id',
        'name',
        'description',
        'price',
        'category',
        'preparation_time',
        'note',
        'image'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'business_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'price' => 'float',
        'category' => 'string',
        'preparation_time' => 'string',
        'note' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'business_id' => 'required',
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'image' => 'required'
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
