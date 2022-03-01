<?php
//namespace src\controller;
use libs\system\Controller;
use  src\model\RolesDB;
class RolesController extends Controller
{
    public function add()
    {
       return $this->view->load("roles/add");
    }
    public function getAll()
    {
        $rolesdao = new RolesDb();
        $roles = $rolesdao->findAll;//array("ROLE_USER", "ROLE_ADMIN")
       return $this->view->load("roles/getAll");
    }
    public function delete($id)
    {
        echo $id;
       //return $this->view->load("roles/add");
    }
}
?>