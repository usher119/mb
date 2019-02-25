<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public  function articlelist()
    {
        return $this->fetch();
    }
    public function welcome()
    {
        return $this->fetch();
    }
    public function picturelist()
    {
        return $this->fetch();
    }
    public function productbrand()
    {
        return $this->fetch();
    }
    public function productcategory()
    {
        return $this->fetch();
    }
    public function productlist()
    {
        return $this->fetch();
    }
    public function feedbacklist()
    {
        return $this->fetch();
    }
}
