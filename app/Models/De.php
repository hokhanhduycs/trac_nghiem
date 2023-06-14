<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class De
 * 
 * @property int $de_id
 * @property string $mark
 * @property string $name
 * @property string $unit
 * @property Carbon $birth
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property PhongThi $phong_thi
 * @property Collection|DeCauhoi[] $de_cauhois
 *
 * @package App\Models
 */
class De extends Model
{
	protected $table = 'de';
	protected $primaryKey = 'de_id';

	protected $casts = [
		'id' => 'int'
	];

	protected $dates = [
		'birth'
	];

	protected $fillable = [
		'mark',
		'name',
		'unit',
		'start',
		'classification',
		'end',
		'birth',
		'id'
	];

	public function phong_thi()
	{
		return $this->belongsTo(PhongThi::class, 'id');
	}

	public function de_cauhois()
	{
		return $this->hasMany(DeCauhoi::class);
	}

	public function tra_lois()
	{
		return $this->hasMany(TraLoi::class);
	}

	public function tra_loi($de,$da,$ch)
	{
		return TraLoi::where('de_id',$de)->where('da_id',$da)->where('ch_id',$ch)->first();
	}
}
