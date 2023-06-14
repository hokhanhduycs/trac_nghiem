<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PhongThi
 * 
 * @property int $id
 * @property string $name
 * @property Carbon $start
 * @property Carbon $end
 * @property string $password
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|De[] $des
 *
 * @package App\Models
 */
class PhongThi extends Model
{
	protected $table = 'phong_thi';

	protected $dates = [
		'start',
		'end'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'start',
		'end',
		'password'
	];

	public function des()
	{
		return $this->hasMany(De::class, 'id');
	}
}
