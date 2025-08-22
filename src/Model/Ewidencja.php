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
    public function addSprzedazWiersz(SprzedazWiersz $sprzedazWiersz): self
    {
        $parameterBag = new ParameterBag(
            "SprzedazWiersz",
            SprzedazWiersz::class,
            false
        );

        $parameterBag->setValue($sprzedazWiersz);

        $this->sprzedazWiersz[] = $parameterBag;
        return $this;
    }

    private function regenerateLpSprzedazy()
    {
        /**
         * @var ParameterBag<SprzedazWiersz>[] $sort
         */
        $sort = $this->sprzedazWiersz;
        $lp = 1;
        //todo sorotwanie {
        /**
         * @var SprzedazWiersz $value
         */
        //todo sporotuj według getDataWystawienia:
        //$value = $sprzedazWiersz->getValue();
        //$value->getDataWystawienia();
        //$value->setLpSprzedazy($lp);
        //}
        //$lp++;

        $this->sprzedazWiersz = $sort;
    }
}