<?php

class PagesController extends BaseController {

	public function index()
	{
        $pages = Page::all();

        return View::make('admin.pages', ['pages' => $pages]);
	}

    public function create()
    {
        if (Request::isMethod('post')) {
            Page::create(Input::all());
        }

        $page = new Page();
        return View::make('admin.pages.create', ['page' => $page]);
    }

}
