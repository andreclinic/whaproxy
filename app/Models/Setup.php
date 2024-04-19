<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class Setup extends Model
{
    use HasFactory;
}
