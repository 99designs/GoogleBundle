<?php

namespace AntiMattr\GoogleBundle\Adwords;

class Conversion
{
    private $id;
    private $label;
    private $value;
    private $isRemarketingOnly;

    public function __construct($id, $label, $value, $isRemarketingOnly)
    {
        $this->id = $id;
        $this->label = $label;
        $this->value = $value;
        $this->isRemarketingOnly = $isRemarketingOnly;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function isRemarketingOnly()
    {
        return $this->isRemarketingOnly ? 'true' : 'false';
    }
}
