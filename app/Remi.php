<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remi extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'remis';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['denomasi', 'jumlah', 'total', 'keterangan'];
}
