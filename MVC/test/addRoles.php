<?php
require_once '../bootstrap.php';

$role = new Roles();
$role->setId(1);
$role->setNom("ROLE_USER");

$entityManager->persist($role);
$entityManager->flush();

echo $role->getId();
//echo $role -> getNom();

?>