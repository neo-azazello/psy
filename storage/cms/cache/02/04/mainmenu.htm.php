<?php 
class Cms5dbed03f31e72705308274_e67c8a7e42c1a3df98b94612248602b0Class extends Cms\Classes\PartialCode
{
public function onStart() {
   $this['services'] = Db::table('indikator_news_posts')->get();
}
}
