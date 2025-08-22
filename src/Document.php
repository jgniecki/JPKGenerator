<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator;

use DevLancer\JPKGenerator\Model\JPK;

class Document
{
    private ParameterBag $jpk;

    public function __construct()
    {
        $this->jpk = new ParameterBag(
            "JPK",
            JPK::class,
            [
                'xmlns:etd', 'xmlns:tns'
            ]
        );
    }

    public function getJpk(): ParameterBag
    {
        return $this->jpk;
    }

    public function setJpk(ParameterBag $jpk): static
    {
        $this->jpk = $jpk;
        return $this;
    }
}