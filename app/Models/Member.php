<?php
/**
 * Created by PhpStorm.
 * User: gis
 * Date: 08/12/15
 * Time: 14:41
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Members';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'MemberID';

    public $timestamps = false;

    public function pinjams()
    {
        return $this->hasMany('app\Models\Peminjaman','MemberID');
    }

}