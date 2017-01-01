<?php

namespace Joli\Jane\OpenApi\Tests\Expected\Api1\Model;

class Body
{
    /**
     * @var string
     */
    protected $foo;

    /**
     * @return string
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * @param string $foo
     *
     * @return self
     */
    public function setFoo($foo = null)
    {
        $this->foo = $foo;

        return $this;
    }
}
