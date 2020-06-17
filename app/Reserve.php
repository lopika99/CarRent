<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reserves';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
}
