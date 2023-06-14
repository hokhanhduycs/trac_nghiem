<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TaiLieu
 * 
 * @property int $id
 * @property string|null $content
 * @property string|null $title
 * @property int $chuong_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Chuong $chuong
 *
 * @package App\Models
 */
class TaiLieu extends Model
{
	protected $table = 'tai_lieu';

	protected $casts = [
		'chuong_id' => 'int'
	];

	protected $fillable = [
		'content',
		'title',
		'chuong_id'
	];

	public function chuong()
	{
		return $this->belongsTo(Chuong::class);
	}
}
