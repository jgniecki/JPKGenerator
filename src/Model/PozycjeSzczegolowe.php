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
}