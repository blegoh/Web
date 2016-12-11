<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 09/12/15
 * Time: 10:11
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Petugas';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'PetugasID';

    public $timestamps = false;
}