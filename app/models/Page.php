<?php

class Page extends Eloquent {

    protected $table = 'pages';

    protected $fillable = array('path', 'title', 'content');
}
