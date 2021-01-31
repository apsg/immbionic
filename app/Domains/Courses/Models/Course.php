<?php
namespace App\Domains\Courses\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int         id
 * @property string      title
 * @property string      description
 * @property string|null header_image
 * @property string|null thumb_image
 * @property int         price
 * @property Carbon      date
 * @property Carbon      created_at
 * @property Carbon      updated_at
 *
 * @property-read string price_formatted
 *
 * @method static Builder future()
 */
class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'header_image',
        'thumb_image',
        'price',
        'date',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function getPriceFormattedAttribute() : string
    {
        return ($this->price / 100) . ' PLN';
    }

    public function scopeFuture(Builder $builder)
    {
        return $builder->where('date', '>', now());
    }
}
