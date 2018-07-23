<?php
namespace Diagnostic\Model;

/**
 * Question Entity
 *
 * @package Diagnostic\Model
 * @author Jerome De Almeida <jerome.dealmeida@vesperiagroup.com>
 */
class QuestionEntity
{
    /**
     * Id
     */
    public $id;

    /**
     * Category Id
     */
    public $category_id;

    /**
     * Category Translation Key
     */
    public $category_translation_key;

    /**
     * Translation Key
     */
    public $translation_key;

    /**
     * Translation Key Help
     */
    public $translation_key_help;

    /**
     * Threshold
     */
    public $threshold;

    /**
     * New
     */
    public $new = false;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return QuestionEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     * @return QuestionEntity
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryTranslationKey()
    {
        return $this->category_translation_key;
    }

    /**
     * @param mixed $category_translation_key
     * @return QuestionEntity
     */
    public function setCategoryTranslationKey($category_translation_key)
    {
        $this->category_translation_key = $category_translation_key;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTranslationKey()
    {
        return $this->translation_key;
    }

    /**
     * @param mixed $translation_key
     * @return QuestionEntity
     */
    public function setTranslationKey($translation_key)
    {
        $this->translation_key = $translation_key;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTranslationKeyHelp()
    {
        return $this->translation_key_help;
    }

    /**
     * @param mixed $translation_key_help
     * @return QuestionEntity
     */
    public function setTranslationKeyHelp($translation_key_help)
    {
        $this->translation_key_help = $translation_key_help;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * @param mixed $threshold
     * @return QuestionEntity
     */
    public function setThreshold($threshold)
    {
        $this->threshold = $threshold;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * @param mixed $new
     * @return QuestionEntity
     */
    public function setNew($new)
    {
        $this->new = $new;
        return $this;
    }

    /**
     * @param array $data
     */
    public function exchangeArray($data)
    {
        if (is_object($data)) {
            $data = (array)$data;
        }

        //id
        if (isset($data['id'])) {
            $this->id = $data['id'];
        } else {
            $this->id = null;
        }

        $this->category_id = (isset($data['category_id'])) ? $data['category_id'] : null;
        $this->category_translation_key = (isset($data['category_translation_key'])) ? $data['category_translation_key'] : null;
        $this->translation_key = (isset($data['translation_key'])) ? $data['translation_key'] : null;
        $this->translation_key_help = (isset($data['translation_key_help'])) ? $data['translation_key_help'] : null;
        $this->threshold = (isset($data['threshold'])) ? $data['threshold'] : null;
        $this->new = (isset($data['new'])) ? $data['new'] : false;
    }

    /**
     * Get Array Copy
     *
     * @return array
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}
