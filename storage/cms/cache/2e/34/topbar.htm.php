<?php 
use RainLab\Translate\Classes\Translator;class Cms5dbea491d8f45980598513_8d0ee32b811fb52452286696db483068Class extends Cms\Classes\PartialCode
{

public function onStart()
{
    $this->translator = Translator::instance();
    $this['SelectedLanguage'] = $this->activeLocale = $this->translator->getLocale();
}
}
