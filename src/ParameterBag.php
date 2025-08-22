<?php declare(strict_types=1);

/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator;

//todo doadj ustawianie <T> które oznaczy typ
class ParameterBag
{
    private string $tagName;
    private string $typeValue;
    private bool $nullable;
    private mixed $value = null;
    private array $attributesList;
    private array $attributes = [];

    public function __construct(string $tagName, string $typeValue, bool $nullable = true, array $attributesList = [])
    {
        $this->tagName = $tagName;
        $this->typeValue = $typeValue;
        $this->nullable = $nullable;
        $this->attributesList = $attributesList;
    }

    public function setValue($value): self
    {
        if ($value === null && !$this->nullable) {
            //todo error
        } elseif (get_debug_type($value) != $this->typeValue) { //todo sprawdz czy dobrze to działa dla: int, string, float oraz konkretne obiekty
            //todo error
        }

        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

    public function getAttributesList(): array
    {
        return $this->attributesList;
    }

    public function setAttribute(string $name, $value): self
    {
        if (in_array($name, $this->attributesList)) {
            //todo error
        }

        $this->attributes[$name] = $value;
        return $this;
    }

    public function getAttribute(string $name)
    {
        if (!isset($this->attributes[$name])) {
            //todo error
        }

        return $this->attributes[$name];
    }

    public function getTagName(): string
    {
        return $this->tagName;
    }
}