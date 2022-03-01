<?php
namespace src\model;
use libs\system\Model;
class RolesDB extends Model
{
    public function findAll()
    {
        return $this->entityManager
                    ->createQuery("SELECT r FROM Roles r")
                    ->getResult();
                    //array("ROLE_COMPTA", "ROLE_FINANCE");
    }
}
?>