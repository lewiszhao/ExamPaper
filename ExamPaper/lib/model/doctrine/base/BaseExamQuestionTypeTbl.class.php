<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ExamQuestionTypeTbl', 'doctrine');

/**
 * BaseExamQuestionTypeTbl
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $qt_name
 * @property string $qt_abbr
 * @property integer $sequence
 * @property string $delete_flag
 * @property Doctrine_Collection $ExamPaperConfigTbl
 * @property Doctrine_Collection $ExamQuestionMasterTbl
 * 
 * @method integer             getId()                    Returns the current record's "id" value
 * @method string              getQtName()                Returns the current record's "qt_name" value
 * @method string              getQtAbbr()                Returns the current record's "qt_abbr" value
 * @method integer             getSequence()              Returns the current record's "sequence" value
 * @method string              getDeleteFlag()            Returns the current record's "delete_flag" value
 * @method Doctrine_Collection getExamPaperConfigTbl()    Returns the current record's "ExamPaperConfigTbl" collection
 * @method Doctrine_Collection getExamQuestionMasterTbl() Returns the current record's "ExamQuestionMasterTbl" collection
 * @method ExamQuestionTypeTbl setId()                    Sets the current record's "id" value
 * @method ExamQuestionTypeTbl setQtName()                Sets the current record's "qt_name" value
 * @method ExamQuestionTypeTbl setQtAbbr()                Sets the current record's "qt_abbr" value
 * @method ExamQuestionTypeTbl setSequence()              Sets the current record's "sequence" value
 * @method ExamQuestionTypeTbl setDeleteFlag()            Sets the current record's "delete_flag" value
 * @method ExamQuestionTypeTbl setExamPaperConfigTbl()    Sets the current record's "ExamPaperConfigTbl" collection
 * @method ExamQuestionTypeTbl setExamQuestionMasterTbl() Sets the current record's "ExamQuestionMasterTbl" collection
 * 
 * @package    ExamPaper
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseExamQuestionTypeTbl extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('exam_question_type_tbl');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('qt_name', 'string', 128, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 128,
             ));
        $this->hasColumn('qt_abbr', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('sequence', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('delete_flag', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ExamPaperConfigTbl', array(
             'local' => 'id',
             'foreign' => 'ep_ques_type_id'));

        $this->hasMany('ExamQuestionMasterTbl', array(
             'local' => 'id',
             'foreign' => 'ques_type_id'));
    }
}