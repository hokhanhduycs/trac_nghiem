<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DeCauhoi
 * 
 * @property int $de_cauhoi_id
 * @property int $de_id
 * @property int $ch_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CauHoi $cau_hoi
 * @property De $de
 *
 * @package App\Models
 */
class DeCauhoi extends Model
{
	protected $table = 'de_cauhoi';
	protected $primaryKey = 'de_cauhoi_id';

	protected $casts = [
		'de_id' => 'int',
		'ch_id' => 'int'
	];

	protected $fillable = [
		'de_id',
		'ch_id'
	];

	public function cau_hoi()
	{
		return $this->belongsTo(CauHoi::class, 'ch_id');
	}

	public function de()
	{
		return $this->belongsTo(De::class);
	}
}
