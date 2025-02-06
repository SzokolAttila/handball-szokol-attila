<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "country",
        "city",
        "stadium",
        "stadium_size",
    ];
    public function players() : BelongsToMany 
    {
        return $this->belongsToMany(Player::class);
    }
    public function currentPlayers()
    {
        $this->players()->wherePivot("team_id", $this->id)->get();
    }
}
