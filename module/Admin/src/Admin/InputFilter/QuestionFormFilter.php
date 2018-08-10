<?php
namespace Admin\InputFilter;

use Zend\InputFilter\InputFilter;
use Zend\Validator\Hostname;

/**
 * Question Form Filter
 *
 * @package Admin\Form
 * @author Jerome De Almeida <jerome.dealmeida@vesperiagroup.com>
 * @author Romain Desjardins
 */
class QuestionFormFilter extends InputFilter
{
    public function __construct($adapter)
    {
        $this->add([
            'name' => 'translation_key',
            'required' => true,
            'validators' => [
                [
                    'name' => 'StringLength',
                    'options' => [
                        'min' => 6
                    ],
                ],
            ],
        ]);

        $this->add([
            'name' => 'category_id',
            'required' => true,
            'validators' => [
                [
                    'name' => 'Db\RecordExists',
                    'options' => [
                        'table' => 'categories',
                        'field' => 'id',
                        'adapter' => $adapter
                    ],
                ],
            ],
        ]);

        $this->add([
            'name' => 'threat',
            'required' => true,
            'validators' => [
                [
                    'name' => 'Digits',
                ],
            ],
        ]);

        $this->add([
            'name' => 'weight',
            'required' => true,
            'validators' => [
                [
                    'name' => 'Digits',
                ],
            ],
        ]);
    }
}
