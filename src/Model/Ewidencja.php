<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator\Model;

use DevLancer\JPKGenerator\ParameterBag;

final class Ewidencja
{
    /**
     * @var ParameterBag<SprzedazWiersz>[]
     */
    private array $sprzedazWiersz = [];
    private ParameterBag $sprzedazCtrl;

    public function __construct()
    {
        $this->sprzedazCtrl = new ParameterBag(
            "SprzedazCtrl",
            SprzedazCtrl::class,
        );
    }

    public function addSprzedazWiersz(SprzedazWiersz $sprzedazWiersz): self
    {
        $parameterBag = new ParameterBag(
            "SprzedazWiersz",
            SprzedazWiersz::class,
        );

        $parameterBag->setValue($sprzedazWiersz);

        $this->sprzedazWiersz[] = $parameterBag;
        $this->regenerateLpSprzedazy();

        return $this;
    }

    private function regenerateLpSprzedazy()
    {
        /**
         * @var ParameterBag<SprzedazWiersz>[] $sort
         */
        $sort = $this->sprzedazWiersz;

        usort($sort, function (ParameterBag $a, ParameterBag $b) {
            /** @var SprzedazWiersz $valueA */
            $valueA = $a->getValue();
            /** @var SprzedazWiersz $valueB */
            $valueB = $b->getValue();

            $dateA = $valueA->getDataWystawienia()->getValue();
            $dateB = $valueB->getDataWystawienia()->getValue();

            return $dateA->getTimestamp() <=> $dateB->getTimestamp();
        });

        $lp = 1;
        foreach ($sort as $bag) {
            /** @var SprzedazWiersz $value */
            $value = $bag->getValue();
            $value->getLpSprzedazy()->setValue($lp);
            $lp++;
        }

        $this->sprzedazWiersz = $sort;
    }

    /**
     * @return ParameterBag<SprzedazWiersz>[]
     */
    public function getAllSprzedazWiersz(): array
    {
        return $this->sprzedazWiersz;
    }

    public function getSprzedazCtrl(): ParameterBag
    {
        return $this->sprzedazCtrl;
    }

    public function setSprzedazCtrl(ParameterBag $sprzedazCtrl): static
    {
        $this->sprzedazCtrl = $sprzedazCtrl;
        return $this;
    }
}