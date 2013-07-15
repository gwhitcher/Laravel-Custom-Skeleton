<?php

class HomeController extends BaseController {

    public function showIndex()
    {
        $this->layout->content = View::make('index');
    }
}