<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Chuong
 * 
 * @property int $id
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|TaiLieu[] $tai_lieus
 *
 * @package App\Models
 */
class Chuong extends Model
{
	protected $table = 'chuong';

	protected $fillable = [
		'title'
	];

	public function tai_lieus()
	{
		return $this->hasMany(TaiLieu::class);
	}
}
