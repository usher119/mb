<?php
namespace app\index\controller;
use think\Controller;
class Admin extends Controller
{
//adminrole adminpermission adminlist
public function adminrole()
{
    return $this->fetch();
}
public function adminpermission()
{
    return $this->fetch();
}
public function adminlist()
{
    return $this->fetch();
}

public function adminadd()
{
    return $this->fetch();
}
public function adminpermissionadd()
{
    return $this->fetch();
}

public function adminroleadd()
{
    return $this->fetch();
}
}