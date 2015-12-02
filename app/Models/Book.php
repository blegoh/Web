<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 01/11/15
 * Time: 10:43
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Books';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'BookID';
}