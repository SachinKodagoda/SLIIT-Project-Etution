<?php
class Tutor extends BaseController
{
    public function __construct()
    { }

    public function cyber()
    {
        $data = [
            'test' => ""
        ];
        $this->view('tutor/cyber', $data);
    }
    public function ip()
    {
        $data = [
            'test' => ""
        ];
        $this->view('tutor/ip', $data);
    }
    public function net()
    {
        $data = [
            'test' => ""
        ];
        $this->view('tutor/net', $data);
    }
    public function index()
    {
        $data = [
            'test' => ""
        ];
        $this->view('tutor/index', $data);
    }
    public function web()
    {
        $data = [
            'test' => ""
        ];
        $this->view('tutor/web', $data);
    }
    public function sys()
    {
        $data = [
            'test' => ""
        ];
        $this->view('tutor/sys', $data);
    }
    public function reserve()
    {
        $data = [
            'test' => ""
        ];
        $this->view('tutor/reserve', $data);
    }
}
