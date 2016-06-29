<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coupure6 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'coupure6s';

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
    protected $fillable = ['nama_kantor', 'keping', 'besaruang'];
}
