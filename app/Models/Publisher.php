<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 02/12/15
 * Time: 23:25
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Publishers';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'PublisherID';

    public $timestamps = false;
}