<?php

namespace gmostafa\GraphQL\Tests\SchemaObject;

use gmostafa\GraphQL\SchemaObject\InputObject;

class WithMultipleScalarValuesInputObject extends InputObject
{
    protected $valOne;
    protected $val_two;

    public function setValOne($valOne)
    {
        $this->valOne = $valOne;

        return $this;
    }

    public function setValTwo($valTwo)
    {
        $this->val_two = $valTwo;

        return $this;
    }
}
