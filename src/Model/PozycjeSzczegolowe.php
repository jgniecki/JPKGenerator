<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator\Model;

use DevLancer\JPKGenerator\ParameterBag;

final  class PozycjeSzczegolowe
{
    private ParameterBag $p_11;
    private ParameterBag $p_12;
    private ParameterBag $p_19;
    private ParameterBag $p_20;
    private ParameterBag $p_21;
    private ParameterBag $p_22;
    private ParameterBag $p_23;
    private ParameterBag $p_25;
    private ParameterBag $p_27;
    private ParameterBag $p_29;
    private ParameterBag $p_31;
    private ParameterBag $p_33;
    private ParameterBag $p_34;
    private ParameterBag $p_35;
    private ParameterBag $p_36;
    private ParameterBag $p_37;
    private ParameterBag $p_38;
    public function __construct()
    {
        $this->p_11 = new ParameterBag(
            "P_11",
            "float",
        );
        $this->p_12 = new ParameterBag(
            "P_12",
            "float",
        );
        $this->p_19 = new ParameterBag(
            "P_19",
            "float",
        );
        $this->p_20 = new ParameterBag(
            "P_20",
            "float",
        );
        $this->p_21 = new ParameterBag(
            "P_21",
            "float",
        );
        $this->p_22 = new ParameterBag(
            "P_22",
            "float",
        );
        $this->p_23 = new ParameterBag(
            "P_23",
            "float",
        );
        $this->p_25 = new ParameterBag(
            "P_25",
            "float",
        );
        $this->p_27 = new ParameterBag(
            "P_27",
            "float",
        );
        $this->p_29 = new ParameterBag(
            "P_29",
            "float",
        );
        $this->p_31 = new ParameterBag(
            "P_31",
            "float",
        );
        $this->p_33 = new ParameterBag(
            "P_33",
            "float",
        );
        $this->p_34 = new ParameterBag(
            "P_34",
            "float",
        );
        $this->p_35 = new ParameterBag(
            "P_35",
            "float",
        );
        $this->p_36 = new ParameterBag(
            "P_36",
            "float",
        );
        $this->p_37 = new ParameterBag(
            "P_37",
            "float",
        );
        $this->p_38 = new ParameterBag(
            "P_38",
            "float",
        );
    }

    public function getP11(): ParameterBag
    {
        return $this->p_11;
    }

    public function setP11(ParameterBag $p_11): static
    {
        $this->p_11 = $p_11;
        return $this;
    }

    public function getP12(): ParameterBag
    {
        return $this->p_12;
    }

    public function setP12(ParameterBag $p_12): static
    {
        $this->p_12 = $p_12;
        return $this;
    }

    public function getP19(): ParameterBag
    {
        return $this->p_19;
    }

    public function setP19(ParameterBag $p_19): static
    {
        $this->p_19 = $p_19;
        return $this;
    }

    public function getP20(): ParameterBag
    {
        return $this->p_20;
    }

    public function setP20(ParameterBag $p_20): static
    {
        $this->p_20 = $p_20;
        return $this;
    }

    public function getP21(): ParameterBag
    {
        return $this->p_21;
    }

    public function setP21(ParameterBag $p_21): static
    {
        $this->p_21 = $p_21;
        return $this;
    }

    public function getP22(): ParameterBag
    {
        return $this->p_22;
    }

    public function setP22(ParameterBag $p_22): static
    {
        $this->p_22 = $p_22;
        return $this;
    }

    public function getP23(): ParameterBag
    {
        return $this->p_23;
    }

    public function setP23(ParameterBag $p_23): static
    {
        $this->p_23 = $p_23;
        return $this;
    }

    public function getP25(): ParameterBag
    {
        return $this->p_25;
    }

    public function setP25(ParameterBag $p_25): static
    {
        $this->p_25 = $p_25;
        return $this;
    }

    public function getP27(): ParameterBag
    {
        return $this->p_27;
    }

    public function setP27(ParameterBag $p_27): static
    {
        $this->p_27 = $p_27;
        return $this;
    }

    public function getP29(): ParameterBag
    {
        return $this->p_29;
    }

    public function setP29(ParameterBag $p_29): static
    {
        $this->p_29 = $p_29;
        return $this;
    }

    public function getP31(): ParameterBag
    {
        return $this->p_31;
    }

    public function setP31(ParameterBag $p_31): static
    {
        $this->p_31 = $p_31;
        return $this;
    }

    public function getP33(): ParameterBag
    {
        return $this->p_33;
    }

    public function setP33(ParameterBag $p_33): static
    {
        $this->p_33 = $p_33;
        return $this;
    }

    public function getP34(): ParameterBag
    {
        return $this->p_34;
    }

    public function setP34(ParameterBag $p_34): static
    {
        $this->p_34 = $p_34;
        return $this;
    }

    public function getP35(): ParameterBag
    {
        return $this->p_35;
    }

    public function setP35(ParameterBag $p_35): static
    {
        $this->p_35 = $p_35;
        return $this;
    }

    public function getP36(): ParameterBag
    {
        return $this->p_36;
    }

    public function setP36(ParameterBag $p_36): static
    {
        $this->p_36 = $p_36;
        return $this;
    }

    public function getP37(): ParameterBag
    {
        return $this->p_37;
    }

    public function setP37(ParameterBag $p_37): static
    {
        $this->p_37 = $p_37;
        return $this;
    }

    public function getP38(): ParameterBag
    {
        return $this->p_38;
    }

    public function setP38(ParameterBag $p_38): static
    {
        $this->p_38 = $p_38;
        return $this;
    }
}