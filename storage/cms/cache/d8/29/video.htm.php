<?php 
class Cms5dbea4a74defc744403989_0295f28f7ddc77096309714ee12e12ebClass extends Cms\Classes\PartialCode
{
public function onStart() {
   $this['videos'] = Db::table('videos')->get();
}
}
