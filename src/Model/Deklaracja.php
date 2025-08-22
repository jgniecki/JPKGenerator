<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator\Model;

use DevLancer\JPKGenerator\ParameterBag;

final class Deklaracja
{
    private ParameterBag $naglowek;
    private ParameterBag $pozycjeSzczegolowe;
    private ParameterBag $pouczenia;
    public function __construct()
    {
        $this->naglowek = new ParameterBag(
            "Naglowek",
            NaglowekDeklaracja::class,
        );

        $this->pozycjeSzczegolowe = new ParameterBag(
            "PozycjeSzczegolowe",
            PozycjeSzczegolowe::class,
        );
        $this->pouczenia = new ParameterBag(
            "Pouczenia",
            "int",
        );
    }

    public function getNaglowek(): ParameterBag
    {
        return $this->naglowek;
    }

    public function setNaglowek(ParameterBag $naglowek): static
    {
        $this->naglowek = $naglowek;
        return $this;
    }

    public function getPozycjeSzczegolowe(): ParameterBag
    {
        return $this->pozycjeSzczegolowe;
    }

    public function setPozycjeSzczegolowe(ParameterBag $pozycjeSzczegolowe): static
    {
        $this->pozycjeSzczegolowe = $pozycjeSzczegolowe;
        return $this;
    }

    public function getPouczenia(): ParameterBag
    {
        return $this->pouczenia;
    }

    public function setPouczenia(ParameterBag $pouczenia): static
    {
        $this->pouczenia = $pouczenia;
        return $this;
    }
}