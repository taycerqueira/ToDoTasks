<?php

/**
 * This is the model class for table "tarefa".
 *
 * The followings are the available columns in table 'tarefa':
 * @property integer $id
 * @property string $titulo
 * @property string $descricao
 * @property string $dataCriacao
 * @property string $dataConclusao
 * @property integer $isPublic
 * @property integer $criadorId
 * @property integer $tipoTarefaId
 *
 * The followings are the available model relations:
 * @property Usuario $criador
 * @property TipoTarefa $tipoTarefa
 * @property Tag[] $tags
 * @property Usuario[] $usuarios
 */
class Tarefa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tarefa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, dataCriacao, dataConclusao, isPublic, criadorId, tipoTarefaId', 'required'),
			array('isPublic, criadorId, tipoTarefaId', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>50),
			array('descricao', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, titulo, descricao, dataCriacao, dataConclusao, isPublic, criadorId, tipoTarefaId', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'criador' => array(self::BELONGS_TO, 'Usuario', 'criadorId'),
			'tipoTarefa' => array(self::BELONGS_TO, 'TipoTarefa', 'tipoTarefaId'),
			'tags' => array(self::MANY_MANY, 'Tag', 'tarefa_tag(tarefaId, tagId)'),
			'usuarios' => array(self::MANY_MANY, 'Usuario', 'usuario_tarefa(tarefaId, usuarioId)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'titulo' => 'Titulo',
			'descricao' => 'Descricao',
			'dataCriacao' => 'Data de Criacao',
			'dataConclusao' => 'Data de Conclusao',
			'isPublic' => 'Publica',
			'criadorId' => 'Criador',
			'tipoTarefaId' => 'Tipo da Tarefa',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('dataCriacao',$this->dataCriacao,true);
		$criteria->compare('dataConclusao',$this->dataConclusao,true);
		$criteria->compare('isPublic',$this->isPublic);
		$criteria->compare('criadorId',$this->criadorId);
		$criteria->compare('tipoTarefaId',$this->tipoTarefaId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tarefa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
