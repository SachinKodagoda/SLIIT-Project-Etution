<?php
class contentManager extends BaseController
{
    public function __construct()
    { }

    public function index()
    {
        $data = [
            'test' => ""
        ];
        $this->view('contentManager/index', $data);
    }
}
