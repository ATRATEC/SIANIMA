<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 18 Apr 2018 14:35:37 +0000.
 */

namespace App;

use App\BaseModel as Eloquent;

/**
 * Class Cliente
 * 
 * @property int $Id
 * @property int $codigo_cliente_omie
 * @property string $codigo_cliente_integracao
 * @property string $cnpj_cpf
 * @property string $razao_social
 * @property string $nome_fantasia
 * @property string $logradouro
 * @property string $endereco
 * @property string $endereco_numero
 * @property string $complemento
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $cep
 * @property string $codigo_pais
 * @property \Carbon\Carbon $nascimento
 * @property string $contato
 * @property string $telefone1_ddd
 * @property string $telefone1_numero
 * @property string $telefone2_ddd
 * @property string $telefone2_numero
 * @property string $fax_ddd
 * @property string $fax_numero
 * @property string $email
 * @property string $homepage
 * @property string $observacao
 * @property string $inscricao_municipal
 * @property string $inscricao_estadual
 * @property string $inscricao_suframa
 * @property string $pessoa_fisica
 * @property string $optante_simples_nacional
 * @property string $bloqueado
 * @property string $importado_api
 * @property string $cnae
 * @property string $obsEndereco
 * @property string $obsTelefonesEmail
 * @property \Carbon\Carbon $inclusao
 * @property string $usuario_inclusao
 * @property \Carbon\Carbon $alteracao
 * @property string $usuario_alteracao
 * @property string $sincronizar
 * @property int $Id_empresa
 * @property int $Id_filial
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tags
 *
 * @package App
 */
class Cliente extends Eloquent
{
	protected $table = 'cliente';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'codigo_cliente_omie' => 'int',
		'Id_empresa' => 'int',
		'Id_filial' => 'int'
	];

	protected $dates = [
		'nascimento',
		'inclusao',
		'alteracao'
	];

	protected $fillable = [
		'codigo_cliente_omie',
		'codigo_cliente_integracao',
		'cnpj_cpf',
		'razao_social',
		'nome_fantasia',
		'logradouro',
		'endereco',
		'endereco_numero',
		'complemento',
		'bairro',
		'cidade',
		'estado',
		'cep',
		'codigo_pais',
		'nascimento',
		'contato',
		'telefone1_ddd',
		'telefone1_numero',
		'telefone2_ddd',
		'telefone2_numero',
		'fax_ddd',
		'fax_numero',
		'email',
		'homepage',
		'observacao',
		'inscricao_municipal',
		'inscricao_estadual',
		'inscricao_suframa',
		'pessoa_fisica',
		'optante_simples_nacional',
		'bloqueado',
		'importado_api',
		'cnae',
		'obsEndereco',
		'obsTelefonesEmail',
		'inclusao',
		'usuario_inclusao',
		'alteracao',
		'usuario_alteracao',
		'sincronizar',
		'Id_empresa',
		'Id_filial'
	];

	public function tags()
	{
		return $this->belongsToMany(\App\Tag::class, 'cliente_tag', 'Id_cliente', 'Id_tag')
					->withPivot('Id', 'tag', 'inclusao', 'usuario_inclusao', 'alteracao', 'usuario_alteracao');
	}
}
