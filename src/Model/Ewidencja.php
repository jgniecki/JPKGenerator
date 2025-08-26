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
    /**
     * @var ParameterBag<ZakupWiersz>[]
     */
    private array $zakupWiersz = [];
    private ParameterBag $zakupCtrl;

    public function __construct()
    {
        $this->sprzedazCtrl = new ParameterBag(
            "SprzedazCtrl",
            SprzedazCtrl::class,
            [],
            "tns"
        );

        $this->zakupCtrl = new ParameterBag(
            "ZakupCtrl",
            ZakupCtrl::class,
            [],
            "tns"
        );
    }

    public function addSprzedazWiersz(SprzedazWiersz $sprzedazWiersz): self
    {
        $parameterBag = new ParameterBag(
            "SprzedazWiersz",
            SprzedazWiersz::class,
            [],
            "tns"
        );

        $parameterBag->setValue($sprzedazWiersz);

        $this->sprzedazWiersz[] = $parameterBag;
        if ($sprzedazWiersz->getLpSprzedazy()->getValue()) {
            $this->regenerateLpSprzedazy();
        }

        return $this;
    }

    public function addZakupWiersz(ZakupWiersz $zakupWiersz): self
    {
        $parameterBag = new ParameterBag(
            "ZakupWiersz",
            ZakupWiersz::class,
            [],
            "tns"
        );

        $parameterBag->setValue($zakupWiersz);

        $this->zakupWiersz[] = $parameterBag;
        if ($zakupWiersz->getLpZakupu()->getValue()) {
            $this->regenerateLpZakupu();
        }

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

    private function regenerateLpZakupu()
    {
        /**
         * @var ParameterBag<ZakupWiersz>[] $sort
         */
        $sort = $this->zakupWiersz;

        usort($sort, function (ParameterBag $a, ParameterBag $b) {
            /** @var ZakupWiersz $valueA */
            $valueA = $a->getValue();
            /** @var ZakupWiersz $valueB */
            $valueB = $b->getValue();

            $dateA = $valueA->getDataZakupu()->getValue();
            $dateB = $valueB->getDataZakupu()->getValue();

            return $dateA->getTimestamp() <=> $dateB->getTimestamp();
        });

        $lp = 1;
        foreach ($sort as $bag) {
            /** @var ZakupWiersz $value */
            $value = $bag->getValue();
            $value->getLpZakupu()->setValue($lp);
            $lp++;
        }

        $this->zakupWiersz = $sort;
    }

    /**
     * @return ParameterBag<SprzedazWiersz>[]
     */
    public function getAllSprzedazWiersz(): array
    {
        return $this->sprzedazWiersz;
    }

    /**
     * @return ParameterBag<ZakupWiersz>[]
     */
    public function getAllZakupWiersz(): array
    {
        return $this->zakupWiersz;
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

    public function getZakupCtrl(): ParameterBag
    {
        return $this->zakupCtrl;
    }

    public function setZakupCtrl(ParameterBag $zakupCtrl): static
    {
        $this->zakupCtrl = $zakupCtrl;
        return $this;
    }
}