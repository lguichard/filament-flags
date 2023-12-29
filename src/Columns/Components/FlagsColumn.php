<?php

namespace Andromede\FilamentFlags\Columns\Components;

use Filament\Tables\Columns\Column;
use Illuminate\View\View;

class FlagsColumn extends Column
{
    protected string $view = 'andromede-filament-flags::columns.components.flag';

    public string $code = 'fr';

    public string $country = "us";

    public string $size = '';

    /**
     * @return array<string>
     */
    public function getState(): array
    {
        $state = parent::getState();

        return $state;
    }

    public function code(string $code): FlagsColumn
    {
        $this->code = $code;

        return $this;
    }

    public function size(string $size): FlagsColumn
    {
        $this->size = $size;

        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getSize()
    {
        return 'w-4 h-4';
    }

    // public function render(): View
    // {
    //     return view('
    //     <div>
    //     <x-flag-country-fr class="w-4 h-4" />
    //     </div>');
    // }
}