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

final class Naglowek
{
    private ParameterBag $kodFormularza;
    private ParameterBag $wariantFormularza;
    private ParameterBag $dataWytworzeniaJPK;
    private ParameterBag $nazwaSystemu;
    private ParameterBag $celZlozenia;
    private ParameterBag $kodUrzedu;
    private ParameterBag $rok;
    private ParameterBag $miesiac;

    public function __construct()
    {
        $this->kodFormularza = new ParameterBag(
            "KodFormularza",
            "string",
            ["kodSystemowy", "wersjaSchemy"]
        );

        $this->wariantFormularza = new ParameterBag(
            "WariantFormularza",
            "int",
        );

        $this->dataWytworzeniaJPK = new ParameterBag(
            "DataWytworzeniaJPK",
            DateTime::class,
        );

        $this->nazwaSystemu = new ParameterBag(
            "NazwaSystemu",
            "string",
        );

        $this->celZlozenia = new ParameterBag(
            "CelZlozenia",
            "int",
            ["poz"]
        );

        $this->kodUrzedu = new ParameterBag(
            "KodUrzedu",
            "int",
        );
        $this->rok = new ParameterBag(
            "Rok",
            "int",
        );

        $this->miesiac = new ParameterBag(
            "Miesiac",
            "int",
        );
    }

    public function getKodFormularza(): ParameterBag
    {
        return $this->kodFormularza;
    }

    public function setKodFormularza(ParameterBag $kodFormularza): static
    {
        $this->kodFormularza = $kodFormularza;
        return $this;
    }

    public function getWariantFormularza(): ParameterBag
    {
        return $this->wariantFormularza;
    }

    public function setWariantFormularza(ParameterBag $wariantFormularza): static
    {
        $this->wariantFormularza = $wariantFormularza;
        return $this;
    }

    public function getDataWytworzeniaJPK(): ParameterBag
    {
        return $this->dataWytworzeniaJPK;
    }

    public function setDataWytworzeniaJPK(ParameterBag $dataWytworzeniaJPK): static
    {
        $this->dataWytworzeniaJPK = $dataWytworzeniaJPK;
        return $this;
    }

    public function getNazwaSystemu(): ParameterBag
    {
        return $this->nazwaSystemu;
    }

    public function setNazwaSystemu(ParameterBag $nazwaSystemu): static
    {
        $this->nazwaSystemu = $nazwaSystemu;
        return $this;
    }

    public function getCelZlozenia(): ParameterBag
    {
        return $this->celZlozenia;
    }

    public function setCelZlozenia(ParameterBag $celZlozenia): static
    {
        $this->celZlozenia = $celZlozenia;
        return $this;
    }

    public function getKodUrzedu(): ParameterBag
    {
        return $this->kodUrzedu;
    }

    public function setKodUrzedu(ParameterBag $kodUrzedu): static
    {
        $this->kodUrzedu = $kodUrzedu;
        return $this;
    }

    public function getRok(): ParameterBag
    {
        return $this->rok;
    }

    public function setRok(ParameterBag $rok): static
    {
        $this->rok = $rok;
        return $this;
    }

    public function getMiesiac(): ParameterBag
    {
        return $this->miesiac;
    }

    public function setMiesiac(ParameterBag $miesiac): static
    {
        $this->miesiac = $miesiac;
        return $this;
    }



}