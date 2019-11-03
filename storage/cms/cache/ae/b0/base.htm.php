<?php 
use RainLab\Translate\Classes\Translator;class Cms5dbea491c4d2f740840920_e1a95b50f904cb833773c39365e491e8Class extends Cms\Classes\LayoutCode
{

public function onStart()
{
    $this->translator = Translator::instance();
    $this['SelectedLanguage'] = $this->activeLocale = $this->translator->getLocale();
}
}
