<?php

namespace Rb\Specification\Doctrine;

abstract class AbstractSpecification implements SpecificationInterface
{
    /**
     * @var string
     */
    protected $field;

    /**
     * @var string|null
     */
    protected $dqlAlias;

    /**
     * @param string      $field
     * @param string|null $dqlAlias
     */
    public function __construct($field, $dqlAlias = null)
    {
        $this->field    = $field;
        $this->dqlAlias = $dqlAlias;
    }

    /**
     * @param string $dqlAlias
     *
     * @return string
     */
    protected function createPropertyWithAlias($dqlAlias)
    {
        if (! empty($this->dqlAlias)) {
            $dqlAlias = $this->dqlAlias;
        }

        return sprintf('%s.%s', $dqlAlias, $this->field);
    }
}