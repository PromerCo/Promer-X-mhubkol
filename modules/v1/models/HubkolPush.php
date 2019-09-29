<?php
namespace mhubkol\modules\v1\models;

/**
 * This is the model class for table "hubkol_push".
 *
 * @property integer $id
 * @property integer $hub_id
 * @property string $platform
 * @property string $tags
 * @property string $follow_level
 * @property string $describe
 * @property string $type
 * @property integer $convene
 * @property array $bystander
 * @property integer $bystander_number
 * @property array $enroll
 * @property integer $enroll_number
 * @property string $expire_time
 * @property string $create_date
 * @property string $update_time
 */
class HubkolPush extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hubkol_push';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hub_id', 'platform', 'tags', 'follow_level','describe','convene','expire_time'], 'required'],
            [['hub_id'], 'integer'],
            [['bystander', 'enroll'], 'string'],
            [['expire_time', 'create_date', 'update_time'], 'safe'],
            [['platform', 'tags'], 'string', 'max' => 30],
            [['follow_level', 'type'], 'string', 'max' => 6],
            [['convene', 'bystander_number', 'enroll_number'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hub_id' => 'Hub ID',
            'platform' => 'Platform',
            'tags' => 'Tags',
            'follow_level' => 'Follow Level',
            'describe' => 'Describe',
            'type' => 'Type',
            'convene' => 'Convene',
            'bystander' => 'Bystander',
            'bystander_number' => 'Bystander Number',
            'enroll' => 'Enroll',
            'enroll_number' => 'Enroll Number',
            'expire_time' => 'Expire Time',
            'create_date' => 'Create Date',
            'update_time' => 'Update Time',
        ];
    }

  /**
     * 返回数据库字段信息，仅在生成CRUD时使用，如不需要生成CRUD，请注释或删除该getTableColumnInfo()代码
     * COLUMN_COMMENT可用key如下:
     * label - 显示的label
     * inputType 控件类型, 暂时只支持text,hidden  // select,checkbox,radio,file,password,
     * isEdit   是否允许编辑，如果允许编辑将在添加和修改时输入
     * isSearch 是否允许搜索
     * isDisplay 是否在列表中显示
     * isOrder 是否排序
     * udc - udc code，inputtype为select,checkbox,radio三个值时用到。
     * 特别字段：
     * id：主键。必须含有主键，统一都是id
     * create_date: 创建时间。生成的代码自动赋值
     * update_date: 修改时间。生成的代码自动赋值
     */
    public function getTableColumnInfo(){
        return array(
        'id' => array(
                        'name' => 'id',
                        'allowNull' => false,
//                         'autoIncrement' => true,
//                         'comment' => 'ID',
//                         'dbType' => "int(11) unsigned",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => true,
                        'phpType' => 'integer',
                        'precision' => '11',
                        'scale' => '',
                        'size' => '11',
                        'type' => 'integer',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('id'),
                        'inputType' => 'hidden',
                        'isEdit' => true,
                        'isSearch' => true,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'hub_id' => array(
                        'name' => 'hub_id',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => 'Hub ID',
//                         'dbType' => "int(11) unsigned",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '11',
                        'scale' => '',
                        'size' => '11',
                        'type' => 'integer',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('hub_id'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'platform' => array(
                        'name' => 'platform',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '平台',
//                         'dbType' => "varchar(30)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '30',
                        'scale' => '',
                        'size' => '30',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('platform'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'tags' => array(
                        'name' => 'tags',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '领域',
//                         'dbType' => "varchar(30)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '30',
                        'scale' => '',
                        'size' => '30',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('tags'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'follow_level' => array(
                        'name' => 'follow_level',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '粉丝量级',
//                         'dbType' => "char(6)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '6',
                        'scale' => '',
                        'size' => '6',
                        'type' => 'char',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('follow_level'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'describe' => array(
                        'name' => 'describe',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '描述',
//                         'dbType' => "varchar(100)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '100',
                        'scale' => '',
                        'size' => '100',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('describe'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'type' => array(
                        'name' => 'type',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '类型',
//                         'dbType' => "char(6)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '6',
                        'scale' => '',
                        'size' => '6',
                        'type' => 'char',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('type'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'convene' => array(
                        'name' => 'convene',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '召集人数',
//                         'dbType' => "tinyint(5) unsigned",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '5',
                        'scale' => '',
                        'size' => '5',
                        'type' => 'tinyint',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('convene'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'bystander' => array(
                        'name' => 'bystander',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '围观人',
//                         'dbType' => "json",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'array',
                        'precision' => '',
                        'scale' => '',
                        'size' => '',
                        'type' => 'json',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('bystander'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'bystander_number' => array(
                        'name' => 'bystander_number',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '围观人数',
//                         'dbType' => "tinyint(5) unsigned",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '5',
                        'scale' => '',
                        'size' => '5',
                        'type' => 'tinyint',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('bystander_number'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'enroll' => array(
                        'name' => 'enroll',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '入伍人',
//                         'dbType' => "json",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'array',
                        'precision' => '',
                        'scale' => '',
                        'size' => '',
                        'type' => 'json',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('enroll'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'enroll_number' => array(
                        'name' => 'enroll_number',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '入伍人数',
//                         'dbType' => "tinyint(5) unsigned",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '5',
                        'scale' => '',
                        'size' => '5',
                        'type' => 'tinyint',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('enroll_number'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'expire_time' => array(
                        'name' => 'expire_time',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '过期时间',
//                         'dbType' => "timestamp",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '',
                        'scale' => '',
                        'size' => '',
                        'type' => 'timestamp',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('expire_time'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'create_date' => array(
                        'name' => 'create_date',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '创建时间',
//                         'dbType' => "timestamp",
                        'defaultValue' => 'CURRENT_TIMESTAMP',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '',
                        'scale' => '',
                        'size' => '',
                        'type' => 'timestamp',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('create_date'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'update_time' => array(
                        'name' => 'update_time',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '更新时间',
//                         'dbType' => "timestamp",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '',
                        'scale' => '',
                        'size' => '',
                        'type' => 'timestamp',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('update_time'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		        );

    }

}
