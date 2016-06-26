<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selisih_remi extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'selisih_remis';

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
    protected $fillable = ['nama_kantor', 'uang_tunai', 'uang_non_tunai', 'jumlah_uang_non_tunai', 'jumlah_uang_tunai'];
}
