<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Instance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Representa um Setup / Instalação da Evolution API
 *
 * @property int $id
 * @property int $team_id
 * @property string $name
 * @property string $url
 * @property string $token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Setup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setup query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setup whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setup whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setup whereUrl($value)
 *
 * @mixin \Eloquent
 */
class Setup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'team_id',
        'name',
        'url',
        'token',
    ];

    /**
     * Get the team that the invitation belongs to.
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the instances the Setup.
     */
    public function instances(): HasMany
    {
        return $this->hasMany(Instance::class);
    }
}
