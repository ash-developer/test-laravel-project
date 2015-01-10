<?php

class Page extends Eloquent {

    protected $table = 'pages';

    public function rules()
    {
        return [
            'path' => 'required|max:255|unique:pages,path' . ($this->id ? ',' . $this->id : ''),
            'title' => 'required|max:255',
            'content' => 'required',
        ];
    }

    protected $fillable = array('path', 'title', 'content');

}
