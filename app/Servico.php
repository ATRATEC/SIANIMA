<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 23 Apr 2018 13:42:29 +0000.
 */

namespace App;

use App\BaseModel as Eloquent;

/**
 * Class Servico
 * 
 * @property int $id
 * @property string $descricao
 *
 * @package App
 */
class Servico extends Eloquent
{
	protected $table = 'servico';
	public $timestamps = false;

	protected $fillable = [
		'descricao'
	];
}
