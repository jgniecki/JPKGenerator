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
            false,
            ["kodSystemowy", "wersjaSchemy"]
        );

        $this->wariantFormularza = new ParameterBag(
            "WariantFormularza",
            "int",
            false,
        );

        $this->dataWytworzeniaJPK = new ParameterBag(
            "DataWytworzeniaJPK",
            DateTime::class,
            false,
        );

        $this->nazwaSystemu = new ParameterBag(
            "NazwaSystemu",
            "string",
            false,
        );

        $this->celZlozenia = new ParameterBag(
            "CelZlozenia",
            "int",
            false,
            ["poz"]
        );

        $this->kodUrzedu = new ParameterBag(
            "KodUrzedu",
            "int",
            false,
        );
        $this->rok = new ParameterBag(
            "Rok",
            "int",
            false,
        );

        $this->miesiac = new ParameterBag(
            "Miesiac",
            "int",
            false,
        );
    }

    public function getKodFormularza(): ParameterBag
    {
        return $this->kodFormularza;
    }

    public function setKodFormularza(ParameterBag $kodFormularza): void
    {
        $this->kodFormularza = $kodFormularza;
    }

    public function getWariantFormularza(): ParameterBag
    {
        return $this->wariantFormularza;
    }

    public function setWariantFormularza(ParameterBag $wariantFormularza): void
    {
        $this->wariantFormularza = $wariantFormularza;
    }

    public function getDataWytworzeniaJPK(): ParameterBag
    {
        return $this->dataWytworzeniaJPK;
    }

    public function setDataWytworzeniaJPK(ParameterBag $dataWytworzeniaJPK): void
    {
        $this->dataWytworzeniaJPK = $dataWytworzeniaJPK;
    }

    public function getNazwaSystemu(): ParameterBag
    {
        return $this->nazwaSystemu;
    }

    public function setNazwaSystemu(ParameterBag $nazwaSystemu): void
    {
        $this->nazwaSystemu = $nazwaSystemu;
    }

    public function getCelZlozenia(): ParameterBag
    {
        return $this->celZlozenia;
    }

    public function setCelZlozenia(ParameterBag $celZlozenia): void
    {
        $this->celZlozenia = $celZlozenia;
    }

    public function getKodUrzedu(): ParameterBag
    {
        return $this->kodUrzedu;
    }

    public function setKodUrzedu(ParameterBag $kodUrzedu): void
    {
        $this->kodUrzedu = $kodUrzedu;
    }

    public function getRok(): ParameterBag
    {
        return $this->rok;
    }

    public function setRok(ParameterBag $rok): void
    {
        $this->rok = $rok;
    }

    public function getMiesiac(): ParameterBag
    {
        return $this->miesiac;
    }

    public function setMiesiac(ParameterBag $miesiac): void
    {
        $this->miesiac = $miesiac;
    }



}