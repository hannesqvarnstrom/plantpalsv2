<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Variety
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Variety newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Variety newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Variety query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int|null $species_id
 * @property int|null $from_suggestion
 * @property string $sci_name
 * @property string|null $common_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Variety whereCommonName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variety whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variety whereFromSuggestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variety whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variety whereSciName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variety whereSpeciesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variety whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Variety whereUserId($value)
 */
class Variety extends Model
{
    use HasFactory;
}
