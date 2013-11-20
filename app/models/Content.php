<?php
/**
 * Created by PhpStorm.
 * User: csoliz
 * Date: 11/13/13
 * Time: 4:11 PM
 */

/*Content model is the interface of a db table. */

class Content extends Eloquent {

    public $timestamps = false;
    protected  $table = 'content';



} 
