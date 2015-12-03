<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 02/12/15
 * Time: 23:04
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Categories';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'CategoryID';

    public $timestamps = false;
}