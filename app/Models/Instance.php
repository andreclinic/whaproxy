<?php

namespace App\Models;


use App\Models\Team;
use App\Models\Setup;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Representa uma instancia da Evolution API
 *
 * @property int $id
 * @property int $team_id
 * @property int $setup_id
 * @property string $name
 * @property string $token
 * @property int|null $is_active
 * @property int|null $is_connected
 * @property string|null $last_connected
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Instance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Instance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Instance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereIsConnected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereLastConnected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereSetupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instance whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Instance extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'team_id',
        'setup_id',
        'name',
        'token',
        'is_active',
        'is_connected',
        'last_connected',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'is_connected' => 'boolean',
            'last_connected' => 'datatime',
        ];
    }

    /**
     * Get the team that the invitation belongs to.
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the team that the invitation belongs to.
     */
    public function setup(): BelongsTo
    {
        return $this->belongsTo(Setup::class);
    }
}
