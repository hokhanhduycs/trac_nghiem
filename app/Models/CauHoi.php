<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CauHoi
 * 
 * @property int $ch_id
 * @property string $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|DapAn[] $dap_ans
 * @property Collection|DeCauhoi[] $de_cauhois
 *
 * @package App\Models
 */
class CauHoi extends Model
{
	protected $table = 'cau_hoi';
	protected $primaryKey = 'ch_id';

	protected $fillable = [
		'content'
	];

	public function dap_ans()
	{
		return $this->hasMany(DapAn::class, 'ch_id');
	}

	public function de_cauhois()
	{
		return $this->hasMany(DeCauhoi::class, 'ch_id');
	}
}
