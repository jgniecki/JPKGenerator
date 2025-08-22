<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator\Model;

use DevLancer\JPKGenerator\ParameterBag;

final class NaglowekDeklaracja
{
    private ParameterBag $kodFormularzaDekl;
    private ParameterBag $wariantFormularzaDekl;
    public function __construct()
    {
        $this->kodFormularzaDekl = new ParameterBag(
            "KodFormularzaDekl",
            "string",
            [
                "kodPodatku",
                "kodSystemowy",
                "rodzajZobowiazania",
                "wersjaSchemy"
            ]
        );

        $this->wariantFormularzaDekl = new ParameterBag(
            "WariantFormularzaDekl",
            "int",
        );
    }

    public function getKodFormularzaDekl(): ParameterBag
    {
        return $this->kodFormularzaDekl;
    }

    public function setKodFormularzaDekl(ParameterBag $kodFormularzaDekl): static
    {
        $this->kodFormularzaDekl = $kodFormularzaDekl;
        return $this;
    }

    public function getWariantFormularzaDekl(): ParameterBag
    {
        return $this->wariantFormularzaDekl;
    }

    public function setWariantFormularzaDekl(ParameterBag $wariantFormularzaDekl): static
    {
        $this->wariantFormularzaDekl = $wariantFormularzaDekl;
        return $this;
    }
}