<?php

class PagesController extends BaseController
{

    public function page($path)
    {
        $page = Page::where('path', $path)->first();

        if (!$page) {
            App::abort(404);
        }

        return View::make('page', ['page' => $page]);
    }

}
