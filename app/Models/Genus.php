<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Genus
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Genus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genus query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int|null $family_id
 * @property int|null $from_suggestion
 * @property string $sci_name
 * @property string|null $common_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Genus whereCommonName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genus whereFamilyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genus whereFromSuggestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genus whereSciName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genus whereUserId($value)
 */
class Genus extends Model
{
    protected $guarded = [];
    use HasFactory;
}
