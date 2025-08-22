<?php declare(strict_types=1);
/**
 * @author Jakub Gniecki <jgniecki.contact@gmail.com>
 * @copyright
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevLancer\JPKGenerator\Model;

use DevLancer\JPKGenerator\ParameterBag;

final class OsobaFizyczna
{
    private ParameterBag $nip;
    private ParameterBag $imiePierwsze;
    private ParameterBag $nazwisko;
    private ParameterBag $dataUrodzenia;
    private ParameterBag $email;

    public function __construct()
    {
        $this->nip = new ParameterBag(
            "NIP",
            "string",
            false,
        );

        $this->imiePierwsze = new ParameterBag(
            "ImiePierwsze",
            "string",
            false,
        );
        $this->nazwisko = new ParameterBag(
            "Nazwisko",
            "string",
            false,
        );
        $this->dataUrodzenia = new ParameterBag(
            "DataUrodzenia",
            \DateTime::class,
            false,
        );
        $this->email = new ParameterBag(
            "Email",
            "string",
            false
        );
    }

    public function getNip(): ParameterBag
    {
        return $this->nip;
    }

    public function setNip(ParameterBag $nip): static
    {
        $this->nip = $nip;
        return $this;
    }

    public function getImiePierwsze(): ParameterBag
    {
        return $this->imiePierwsze;
    }

    public function setImiePierwsze(ParameterBag $imiePierwsze): static
    {
        $this->imiePierwsze = $imiePierwsze;
        return $this;
    }

    public function getNazwisko(): ParameterBag
    {
        return $this->nazwisko;
    }

    public function setNazwisko(ParameterBag $nazwisko): static
    {
        $this->nazwisko = $nazwisko;
        return $this;
    }

    public function getDataUrodzenia(): ParameterBag
    {
        return $this->dataUrodzenia;
    }

    public function setDataUrodzenia(ParameterBag $dataUrodzenia): static
    {
        $this->dataUrodzenia = $dataUrodzenia;
        return $this;
    }

    public function getEmail(): ParameterBag
    {
        return $this->email;
    }

    public function setEmail(ParameterBag $email): static
    {
        $this->email = $email;
        return $this;
    }
}