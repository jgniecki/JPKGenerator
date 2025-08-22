<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator\Model;

use DevLancer\JPKGenerator\ParameterBag;

final class JPK
{
    private ParameterBag $naglowek;
    private ParameterBag $podmiot1;
    private ParameterBag $ewidencja;

    public function __construct()
    {
        $this->naglowek = new ParameterBag(
            "Naglowek",
            Naglowek::class,
            false
        );
        $this->podmiot1 = new ParameterBag(
            "Podmiot1",
            Podmiot1::class,
            false
        );
        $this->ewidencja = new ParameterBag(
            "Ewidencja",
            Ewidencja::class,
            false
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

    public function getPodmiot1(): ParameterBag
    {
        return $this->podmiot1;
    }

    public function setPodmiot1(ParameterBag $podmiot1): static
    {
        $this->podmiot1 = $podmiot1;
        return $this;
    }

    public function getEwidencja(): ParameterBag
    {
        return $this->ewidencja;
    }

    public function setEwidencja(ParameterBag $ewidencja): static
    {
        $this->ewidencja = $ewidencja;
        return $this;
    }
}