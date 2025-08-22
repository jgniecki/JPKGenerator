<?php declare(strict_types=1);

namespace DevLancer\JPKGenerator;

use DOMDocument;
use DOMElement;
use ReflectionClass;
use DateTimeInterface;

final class XmlGenerator
{
    private const DEFAULT_PREFIX = 'tns';
    /**
     * Mapping of element names to namespace prefixes
     * @var array<string,string>
     */
    private array $prefixMap;

    public function __construct(array $prefixMap = [])
    {
        // default mapping for elements that should use 'etd' prefix
        $this->prefixMap = $prefixMap + [
            'NIP' => 'etd',
            'ImiePierwsze' => 'etd',
            'Nazwisko' => 'etd',
            'DataUrodzenia' => 'etd',
        ];
    }

    public function generate(Document $document): string
    {
        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->formatOutput = true;

        $rootBag = $document->getJpk();
        $rootElement = $this->createElement($dom, $rootBag);
        if ($rootElement !== null) {
            $dom->appendChild($rootElement);
        }

        return $dom->documentElement !== null
            ? $dom->saveXML($dom->documentElement) ?: ''
            : '';
    }

    private function createElement(DOMDocument $dom, ParameterBag $bag): ?DOMElement
    {
        $value = $bag->getValue();
        if ($value === null) {
            return null;
        }

        $tagName = $this->resolveTagName($bag->getTagName(), $bag->getPrefix());
        $element = $dom->createElement($tagName);

        foreach ($bag->getAttributesList() as $attr) {
            if ($bag->hasAttribute($attr)) {
                $element->setAttribute($attr, (string) $bag->getAttribute($attr));
            }
        }

        if (is_object($value)) {
            $ref = new ReflectionClass($value);
            foreach ($ref->getProperties() as $property) {
                $property->setAccessible(true);
                $childValue = $property->getValue($value);

                if ($childValue instanceof ParameterBag) {
                    $childElement = $this->createElement($dom, $childValue);
                    if ($childElement !== null) {
                        $element->appendChild($childElement);
                    }
                } elseif (is_array($childValue)) {
                    foreach ($childValue as $childBag) {
                        if ($childBag instanceof ParameterBag) {
                            $childElement = $this->createElement($dom, $childBag);
                            if ($childElement !== null) {
                                $element->appendChild($childElement);
                            }
                        }
                    }
                }
            }
        } else {
            $element->nodeValue = $this->scalarValue($value);
        }

        return $element;
    }

    private function resolveTagName(string $name, ?string $prefix = null): string
    {
        $prefix = $prefix ?? ($this->prefixMap[$name] ?? self::DEFAULT_PREFIX);
        return $prefix !== '' ? $prefix . ':' . $name : $name;
    }

    private function scalarValue(mixed $value): string
    {
        if ($value instanceof DateTimeInterface) {
            return $value->format('Y-m-d\TH:i:s\Z');
        }
        return (string) $value;
    }
}
