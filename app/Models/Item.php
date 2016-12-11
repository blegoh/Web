<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 03/12/15
 * Time: 3:33
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Items';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ItemID';

    public $timestamps = false;

    public function book()
    {
        return $this->belongsTo('app\Models\Book','BookID');
    }
}