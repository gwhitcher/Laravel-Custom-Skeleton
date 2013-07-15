<?php

class AboutController extends BaseController {

    public function showPage()
    {
        $this->layout->content = View::make('about');
    }
}