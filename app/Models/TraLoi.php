<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TraLoi
 * 
 * @property int $id
 * @property int $de_id
 * @property int $da_id
 * @property int $ch_id
 * 
 * @property CauHoi $cau_hoi
 * @property DapAn $dap_an
 * @property De $de
 *
 * @package App\Models
 */
class TraLoi extends Model
{
	protected $table = 'tra_loi';
	public $timestamps = false;

	protected $casts = [
		'de_id' => 'int',
		'da_id' => 'int',
		'ch_id' => 'int'
	];

	protected $fillable = [
		'de_id',
		'da_id',
		'ch_id'
	];

	public function cau_hoi()
	{
		return $this->belongsTo(CauHoi::class, 'ch_id');
	}

	public function dap_an()
	{
		return $this->belongsTo(DapAn::class, 'da_id');
	}

	public function de()
	{
		return $this->belongsTo(De::class);
	}
}
