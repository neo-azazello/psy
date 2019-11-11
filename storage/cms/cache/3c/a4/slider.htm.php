<?php 
class Cms5dc9328c0db76367231411_18d5e15f54c478e6caa05bc56a130a9bClass extends Cms\Classes\PartialCode
{
public function onStart() {
   $this['slides'] = Db::table('slider')->get();
}
}
