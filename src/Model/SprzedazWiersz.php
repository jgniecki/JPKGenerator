<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator\Model;

use DateTime;
use DevLancer\JPKGenerator\ParameterBag;

final class SprzedazWiersz
{
    private ParameterBag $lpSprzedazy;
    private ParameterBag $kodKrajuNadaniaTIN;
    private ParameterBag $nrKontrahenta;
    private ParameterBag $nazwaKontrahenta;
    private ParameterBag $dowodSprzedazy;
    private ParameterBag $dataWystawienia;
    private ParameterBag $dataSprzedazy;
    private ParameterBag $k_11;
    private ParameterBag $k_12;
    private ParameterBag $k_19;
    private ParameterBag $k_20;

    public function __construct()
    {
        $this->lpSprzedazy = new ParameterBag(
            "LpSprzedazy",
            "int",
            [],
            "tns"
        );

        $this->kodKrajuNadaniaTIN = new ParameterBag(
            "KodKrajuNadaniaTIN",
            "string",
            [],
            "tns"
        );

        $this->nrKontrahenta = new ParameterBag(
            "NrKontrahenta",
            "string",
            [],
            "tns"
        );

        $this->nazwaKontrahenta = new ParameterBag(
            "NazwaKontrahenta",
            "string",
            [],
            "tns"
        );

        $this->dowodSprzedazy = new ParameterBag(
            "DowodSprzedazy",
            "string",
            [],
            "tns"
        );

        $this->dataWystawienia = new ParameterBag(
            "DataWystawienia",
            DateTime::class,
            [],
            "tns"
        );

        $this->dataSprzedazy = new ParameterBag(
            "DataSprzedazy",
            DateTime::class,
            [],
            "tns"
        );

        $this->k_11 = new ParameterBag(
            "K_11",
            "float",
            [],
            "tns"
        );

        $this->k_12 = new ParameterBag(
            "K_12",
            "float",
            [],
            "tns"
        );

        $this->k_19 = new ParameterBag(
            "K_19",
            "float",
            [],
            "tns"
        );

        $this->k_20 = new ParameterBag(
            "K_20",
            "float",
            [],
            "tns"
        );
    }

    public function getLpSprzedazy(): ParameterBag
    {
        return $this->lpSprzedazy;
    }

    public function setLpSprzedazy(ParameterBag $lpSprzedazy): static
    {
        $this->lpSprzedazy = $lpSprzedazy;
        return $this;
    }

    public function getKodKrajuNadaniaTIN(): ParameterBag
    {
        return $this->kodKrajuNadaniaTIN;
    }

    public function setKodKrajuNadaniaTIN(ParameterBag $kodKrajuNadaniaTIN): static
    {
        $this->kodKrajuNadaniaTIN = $kodKrajuNadaniaTIN;
        return $this;
    }

    public function getNrKontrahenta(): ParameterBag
    {
        return $this->nrKontrahenta;
    }

    public function setNrKontrahenta(ParameterBag $nrKontrahenta): static
    {
        $this->nrKontrahenta = $nrKontrahenta;
        return $this;
    }

    public function getNazwaKontrahenta(): ParameterBag
    {
        return $this->nazwaKontrahenta;
    }

    public function setNazwaKontrahenta(ParameterBag $nazwaKontrahenta): static
    {
        $this->nazwaKontrahenta = $nazwaKontrahenta;
        return $this;
    }

    public function getDowodSprzedazy(): ParameterBag
    {
        return $this->dowodSprzedazy;
    }

    public function setDowodSprzedazy(ParameterBag $dowodSprzedazy): static
    {
        $this->dowodSprzedazy = $dowodSprzedazy;
        return $this;
    }

    public function getDataWystawienia(): ParameterBag
    {
        return $this->dataWystawienia;
    }

    public function setDataWystawienia(ParameterBag $dataWystawienia): static
    {
        $this->dataWystawienia = $dataWystawienia;
        return $this;
    }

    public function getDataSprzedazy(): ParameterBag
    {
        return $this->dataSprzedazy;
    }

    public function setDataSprzedazy(ParameterBag $dataSprzedazy): static
    {
        $this->dataSprzedazy = $dataSprzedazy;
        return $this;
    }

    public function getK11(): ParameterBag
    {
        return $this->k_11;
    }

    public function setK11(ParameterBag $k_11): static
    {
        $this->k_11 = $k_11;
        return $this;
    }

    public function getK12(): ParameterBag
    {
        return $this->k_12;
    }

    public function setK12(ParameterBag $k_12): static
    {
        $this->k_12 = $k_12;
        return $this;
    }

    public function getK19(): ParameterBag
    {
        return $this->k_19;
    }

    public function setK19(ParameterBag $k_19): static
    {
        $this->k_19 = $k_19;
        return $this;
    }

    public function getK20(): ParameterBag
    {
        return $this->k_20;
    }

    public function setK20(ParameterBag $k_20): static
    {
        $this->k_20 = $k_20;
        return $this;
    }
}