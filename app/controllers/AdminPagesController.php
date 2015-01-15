<?php

class AdminPagesController extends BaseController {

	public function index()
	{
        $pages = Page::all();

        return View::make('admin.pages.index', ['pages' => $pages]);
	}

    public function create()
    {
        $page = new Page();
        $errors = [];

        if (Request::isMethod('post')) {
            $page->fill(Input::all());
            $validator = Validator::make(Input::all(), $page->rules());

            if (!$validator->fails()) {
                $page->save();

                return Redirect::route('admin.pages');
            } else {
                $errors = $validator->messages()->all();
            }
        }

        return View::make('admin.pages.create', ['page' => $page, 'errors' => $errors]);
    }

    public function edit(Page $page)
    {
        $errors = [];

        if (Request::isMethod('post')) {
            $page->fill(Input::all());
            $validator = Validator::make(Input::all(), $page->rules());

            if (!$validator->fails()) {
                $page->update();

                return Redirect::route('admin.pages');
            } else {
                $errors = $validator->messages()->all();
            }
        }

        return View::make('admin.pages.create', ['page' => $page, 'errors' => $errors]);
    }

}
