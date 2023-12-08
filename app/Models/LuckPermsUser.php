<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuckPermsUser extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection ='minecraft_luckperms';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'luckperms_players';
}
