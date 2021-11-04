<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Species
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Species newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Species newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Species query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int|null $genus_id
 * @property int|null $from_suggestion
 * @property string $sci_name
 * @property string|null $common_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Species whereCommonName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Species whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Species whereFromSuggestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Species whereGenusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Species whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Species whereSciName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Species whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Species whereUserId($value)
 */
class Species extends Model
{
    protected $guarded = [];
    
    use HasFactory;
}
