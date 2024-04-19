<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class Instance extends Model
{
    use HasFactory;
}
