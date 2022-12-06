<?php

namespace Nebula\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Nebula\Models\Product
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property float $cost
 * @property int $group_id
 * @property int $stock_amount
 * 
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'cost',
        'group_id',
        'stock_amount',
    ];
}
