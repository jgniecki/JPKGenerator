<?php declare(strict_types=1);

/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator;

/**
 * @template T
 */
class ParameterBag
{
    private string $tagName;
    private string $typeValue;
    private bool $nullable;
    /**
     * @var T|null
     */
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

    /**
     * @param T|null $value
     * @return self<T>
     */
    public function setValue($value): self
    {
        if ($value === null) {
            if (!$this->nullable) {
                throw new \InvalidArgumentException(sprintf('%s cannot be null', $this->tagName));
            }
        } else {
            if (class_exists($this->typeValue) || interface_exists($this->typeValue)) {
                if (!($value instanceof $this->typeValue)) {
                    throw new \InvalidArgumentException(
                        sprintf('Expected instance of %s for %s, got %s', $this->typeValue, $this->tagName, get_debug_type($value))
                    );
                }
            } elseif (get_debug_type($value) !== $this->typeValue) {
                throw new \InvalidArgumentException(
                    sprintf('Expected type %s for %s, got %s', $this->typeValue, $this->tagName, get_debug_type($value))
                );
            }
        }

        $this->value = $value;
        return $this;
    }

    /**
     * @return T|null
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

    /**
     * @return string[]
     */
    public function getAttributesList(): array
    {
        return $this->attributesList;
    }

    public function setAttribute(string $name, $value): self
    {
        if (!in_array($name, $this->attributesList, true)) {
            throw new \InvalidArgumentException(sprintf('Attribute %s is not allowed', $name));
        }

        $this->attributes[$name] = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttribute(string $name)
    {
        if (!array_key_exists($name, $this->attributes)) {
            throw new \InvalidArgumentException(sprintf('Attribute %s does not exist', $name));
        }

        return $this->attributes[$name];
    }

    public function getTagName(): string
    {
        return $this->tagName;
    }
}