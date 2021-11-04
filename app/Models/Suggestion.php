<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

/**
 * App\Models\Suggestion
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion query()
 * @mixin \Eloquent
 * @property int $id
 * @property string|null $taxon_type
 * @property string $sci_name
 * @property string $message
 * @property int $approved
 * @property int $user_id
 * @property int|null $approved_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereApprovedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereSciName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereTaxonType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereUserId($value)
 */
class Suggestion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function scopeToBeApproved(Builder $q)
    {
        return $q->with('user:name,id')->where('approved', 0);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function approve(User $user)
    {
        $this->approved = true;
        $this->approved_by = $user->id;
        $this->approved_at = now();
        $this->save();
        $attributes = ['sci_name' => $this->sci_name, 'user_id' => $user->id];


        switch ($this->taxon_type) {
            case 'Family':
                return Family::create($attributes);
            case 'Genus':
                return Genus::create($attributes);
            case 'Species':
                return Species::create($attributes);
            case 'Variety':
                return Variety::create($attributes);
            default:
                abort(401, 'Taxon type not valid');
                break;
        }
    }
}
