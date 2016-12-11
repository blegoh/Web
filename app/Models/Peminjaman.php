<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 23/12/15
 * Time: 5:10
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Peminjaman';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'PeminjamanID';

    public function item()
    {
        return $this->belongsTo('app\Models\Item','ItemID');
    }

    public function member()
    {
        return $this->belongsTo('app\Models\Item','MemberID');
    }

    public $timestamps = false;
}