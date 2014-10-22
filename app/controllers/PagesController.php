<?php


class PagesController extends Controller {

    public function __construct () {
    }

    public function about () {
        return 'About everything';
    }

    public function home () {
        return View::make ( 'pages.home' );
    }
}
