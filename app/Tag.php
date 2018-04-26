<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 18 Apr 2018 14:38:24 +0000.
 */

namespace App;

use App\BaseModel as Eloquent;

/**
 * Class Tag
 * 
 * @property int $Id
 * @property string $tag
 * @property \Carbon\Carbon $inclusao
 * @property string $usuario_inclusao
 * @property \Carbon\Carbon $alteracao
 * @property string $usuario_alteracao
 * 
 * @property \Illuminate\Database\Eloquent\Collection $clientes
 *
 * @package App
 */
class Tag extends Eloquent
{
	protected $table = 'tag';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $dates = [
		'inclusao',
		'alteracao'
	];

	protected $fillable = [
		'tag',
		'inclusao',
		'usuario_inclusao',
		'alteracao',
		'usuario_alteracao'
	];

	public function clientes()
	{
		return $this->belongsToMany(\App\Cliente::class, 'cliente_tag', 'Id_tag', 'Id_cliente')
					->withPivot('Id', 'tag', 'inclusao', 'usuario_inclusao', 'alteracao', 'usuario_alteracao');
	}
}
