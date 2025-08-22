<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator\Model;

use DevLancer\JPKGenerator\ParameterBag;

final class Podmiot1
{
    private ParameterBag $osobaFizyczna;

    public function __construct()
    {
        $this->osobaFizyczna = new ParameterBag(
            "OsobaFizyczna",
            OsobaFizyczna::class,
            [],
            "tns"
        );
    }

    public function getOsobaFizyczna(): ParameterBag
    {
        return $this->osobaFizyczna;
    }

    public function setOsobaFizyczna(ParameterBag $osobaFizyczna): static
    {
        $this->osobaFizyczna = $osobaFizyczna;
        return $this;
    }
}