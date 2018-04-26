<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 18 Apr 2018 14:38:38 +0000.
 */

namespace App;

use App\BaseModel as Eloquent;

/**
 * Class ClienteTag
 * 
 * @property int $Id
 * @property int $Id_cliente
 * @property int $Id_tag
 * @property string $tag
 * @property \Carbon\Carbon $inclusao
 * @property string $usuario_inclusao
 * @property \Carbon\Carbon $alteracao
 * @property string $usuario_alteracao
 * 
 * @property \App\Cliente $cliente
 *
 * @package App
 */
class ClienteTag extends Eloquent
{
	protected $table = 'cliente_tag';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'Id_cliente' => 'int',
		'Id_tag' => 'int'
	];

	protected $dates = [
		'inclusao',
		'alteracao'
	];

	protected $fillable = [
		'Id_cliente',
		'Id_tag',
		'tag',
		'inclusao',
		'usuario_inclusao',
		'alteracao',
		'usuario_alteracao'
	];

	public function cliente()
	{
		return $this->belongsTo(\App\Cliente::class, 'Id_cliente');
	}

	public function tag()
	{
		return $this->belongsTo(\App\Tag::class, 'Id_tag');
	}
}
