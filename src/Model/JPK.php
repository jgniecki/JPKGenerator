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
    private ParameterBag $deklaracja;
    private ParameterBag $ewidencja;

    public function __construct()
    {
        $this->naglowek = new ParameterBag(
            "Naglowek",
            Naglowek::class,
            [],
            'tns'
        );
        $this->podmiot1 = new ParameterBag(
            "Podmiot1",
            Podmiot1::class,
            ['rola'],
            'tns'
        );
        $this->deklaracja = new ParameterBag(
            "Deklaracja",
            Deklaracja::class,
            [
                'xmlns', 'xmlns:tns', 'xmlns:etd'
            ],
        );
        $this->ewidencja = new ParameterBag(
            "Ewidencja",
            Ewidencja::class,
            [],
            'tns'
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

    public function getDeklaracja(): ParameterBag
    {
        return $this->deklaracja;
    }

    public function setDeklaracja(ParameterBag $deklaracja): static
    {
        $this->deklaracja = $deklaracja;
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