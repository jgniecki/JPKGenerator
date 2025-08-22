<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator\Model;

use DevLancer\JPKGenerator\ParameterBag;

final class ZakupCtrl
{
    private ParameterBag $liczbaWierszyZakupow;
    private ParameterBag $podatekNaliczony;

    public function __construct()
    {
        $this->liczbaWierszyZakupow = new ParameterBag(
            "LiczbaWierszyZakupow",
            "int",
            [],
            "tns"
        );

        $this->podatekNaliczony = new ParameterBag(
            "PodatekNaliczony",
            "float",
            [],
            "tns"
        );
    }

    public function getLiczbaWierszyZakupow(): ParameterBag
    {
        return $this->liczbaWierszyZakupow;
    }

    public function setLiczbaWierszyZakupow(ParameterBag $liczbaWierszyZakupow): static
    {
        $this->liczbaWierszyZakupow = $liczbaWierszyZakupow;
        return $this;
    }

    public function getPodatekNaliczony(): ParameterBag
    {
        return $this->podatekNaliczony;
    }

    public function setPodatekNaliczony(ParameterBag $podatekNaliczony): static
    {
        $this->podatekNaliczony = $podatekNaliczony;
        return $this;
    }
}