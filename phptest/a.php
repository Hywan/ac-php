<?php

//define type in comment 

/**  @var  $ta  \Test\Testa  */
$ta->set_v1("ss");
/**  @var  $tb  Test\Testb  */


$v=$tb->get_v2()->v1;


/**  @var  $ta \Test\Testa  */
$ta= new \Test\Testa();

/**  @var  $v Test\Testa  */
$v=$tb->get_v2("ss");

/**  @var  $k string  */
$k=$tb->get_v2()->v1;
array_merge("ss","ssdf");