<?php
namespace app\admin\controller;

use gmars\rbac\Rbac;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        //  $rbacObj = new Rbac();
        //  $data = ['user_name' => 'usher', 'status' => 1, 'password' => md5('zhangsan')];
        //  $rbacObj->createUser($data);

        // $rbacObj = new Rbac();
        // $data = [
        //     'name' => '商品列表',
        //     'status' => 1,
        //     'description' => '查看商品的所有列表',
        //     'path' => '/index/goods/list',
        //     'create_time' => time(),
        // ];
        // $rbacObj->createPermission($data);
        // $rbacObj = new Rbac();
        // $data = [
        //     'name' => '商品管理员',
        //     'status' => 1,
        //     'description' => '商品管理员负责商品的查看修改删除等操作',
        //     'sort_num' => 10,
        //     // 'parent_id' => 1,
        // ];
        // $rbacObj->createRole($data);
        $rbacObj = new Rbac();
        $rbacObj->assignUserRole(1, [1, 2]);
        die;
        return $this->fetch();
    }
    public function articlelist()
    {
        return $this->fetch();
    }
}
