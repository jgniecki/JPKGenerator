<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator\Model;

use DevLancer\JPKGenerator\ParameterBag;

final class ZakupWiersz
{
    private ParameterBag $lpZakupu;
    private ParameterBag $nrDostawcy;
    private ParameterBag $nazwaDostawcy;
    private ParameterBag $dowodZakupu;
    private ParameterBag $dataZakupu;
    private ParameterBag $k_42;
    private ParameterBag $k_43;

    public function __construct()
    {
        $this->lpZakupu = new ParameterBag(
            "LpZakupu",
            "int",
            [],
            "tns"
        );

        $this->nrDostawcy = new ParameterBag(
            "NrDostawcy",
            "string",
            [],
            "tns"
        );

        $this->nazwaDostawcy = new ParameterBag(
            "NazwaDostawcy",
            "string",
            [],
            "tns"
        );

        $this->dowodZakupu = new ParameterBag(
            "DowodZakupu",
            "string",
            [],
            "tns"
        );

        $this->dataZakupu = new ParameterBag(
            "DataZakupu",
            \DateTime::class,
            [],
            "tns"
        );

        $this->k_42 = new ParameterBag(
            "K_42",
            "float",
            [],
            "tns"
        );

        $this->k_43 = new ParameterBag(
            "K_43",
            "float",
            [],
            "tns"
        );
    }

    public function getLpZakupu(): ParameterBag
    {
        return $this->lpZakupu;
    }

    public function setLpZakupu(ParameterBag $lpZakupu): static
    {
        $this->lpZakupu = $lpZakupu;
        return $this;
    }

    public function getNrDostawcy(): ParameterBag
    {
        return $this->nrDostawcy;
    }

    public function setNrDostawcy(ParameterBag $nrDostawcy): static
    {
        $this->nrDostawcy = $nrDostawcy;
        return $this;
    }

    public function getNazwaDostawcy(): ParameterBag
    {
        return $this->nazwaDostawcy;
    }

    public function setNazwaDostawcy(ParameterBag $nazwaDostawcy): static
    {
        $this->nazwaDostawcy = $nazwaDostawcy;
        return $this;
    }

    public function getDowodZakupu(): ParameterBag
    {
        return $this->dowodZakupu;
    }

    public function setDowodZakupu(ParameterBag $dowodZakupu): static
    {
        $this->dowodZakupu = $dowodZakupu;
        return $this;
    }

    public function getDataZakupu(): ParameterBag
    {
        return $this->dataZakupu;
    }

    public function setDataZakupu(ParameterBag $dataZakupu): static
    {
        $this->dataZakupu = $dataZakupu;
        return $this;
    }

    public function getK42(): ParameterBag
    {
        return $this->k_42;
    }

    public function setK42(ParameterBag $k_42): static
    {
        $this->k_42 = $k_42;
        return $this;
    }

    public function getK43(): ParameterBag
    {
        return $this->k_43;
    }

    public function setK43(ParameterBag $k_43): static
    {
        $this->k_43 = $k_43;
        return $this;
    }
}