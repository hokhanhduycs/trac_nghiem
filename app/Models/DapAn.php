<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DapAn
 * 
 * @property int $id
 * @property string $content
 * @property int $status
 * @property int $ch_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CauHoi $cau_hoi
 *
 * @package App\Models
 */
class DapAn extends Model
{
	protected $table = 'dap_an';

	protected $casts = [
		'status' => 'int',
		'ch_id' => 'int'
	];

	protected $fillable = [
		'content',
		'status',
		'ch_id'
	];

	public function cau_hoi()
	{
		return $this->belongsTo(CauHoi::class, 'ch_id');
	}

	public function tra_loi($de,$da,$ch)
	{
		return TraLoi::where('de_id',$de)->where('da_id',$da)->where('ch_id',$ch)->first();
	}
}
