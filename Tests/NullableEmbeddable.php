<?php

namespace Tarifhaus\Tests\Doctrine\ORM;

use Tarifhaus\Doctrine\ORM\NullableEmbeddableInterface;

final class NullableEmbeddable implements NullableEmbeddableInterface
{
    /**
     * @var bool
     */
    private $isNull;

    /**
     * @param bool $isNull
     */
    public function __construct($isNull)
    {
        $this->isNull = $isNull;
    }

    /**
     * @inheritdoc
     */
    public function isNull()
    {
        return $this->isNull;
    }
}
