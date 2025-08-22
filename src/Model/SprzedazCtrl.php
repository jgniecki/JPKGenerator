<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator\Model;

use DevLancer\JPKGenerator\ParameterBag;

final class SprzedazCtrl
{
    private ParameterBag $liczbaWierszySprzedazy;
    private ParameterBag $podatekNalezny;

    public function __construct()
    {
        $this->liczbaWierszySprzedazy = new ParameterBag(
            "LiczbaWierszySprzedaz",
            "int",
            [],
            "tns"
        );

        $this->podatekNalezny = new ParameterBag(
            "PodatekNalezny",
            "float",
            [],
            "tns"
        );
    }

    public function getLiczbaWierszySprzedazy(): ParameterBag
    {
        return $this->liczbaWierszySprzedazy;
    }

    public function setLiczbaWierszySprzedazy(ParameterBag $liczbaWierszySprzedazy): static
    {
        $this->liczbaWierszySprzedazy = $liczbaWierszySprzedazy;
        return $this;
    }

    public function getPodatekNalezny(): ParameterBag
    {
        return $this->podatekNalezny;
    }

    public function setPodatekNalezny(ParameterBag $podatekNalezny): static
    {
        $this->podatekNalezny = $podatekNalezny;
        return $this;
    }
}