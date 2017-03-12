<?php
function getCount($conn) {
  $statement = $conn->prepare("SELECT COUNT(*) FROM myndir");
  $statement->execute();
  $fjoldi = $statement->fetchColumn();
  return $fjoldi;
}

function getId($conn) {
  $statement = $conn->prepare("SELECT id FROM myndir");
  $statement->execute();
  $id = $statement->fetchAll();
  return $id;
}

function getImageInfo($conn, $id) {
    $statement = $conn->prepare("SELECT skráarheiti, myndaheiti, textalýsing FROM myndir WHERE id = :id");
    $statement->execute(array('id' => $id));
    $upplysingar = $statement->fetch();
    return $upplysingar;
}

function getNotendur($conn) {
    $statement = $conn->prepare("SELECT id, nafn FROM user");
    $statement->execute();
    $notandi = $statement->fetchAll();
    return $notandi;
}

function getNotandaImageId($conn, $id) {
    $statement = $conn->prepare("SELECT myndir_id FROM tenging WHERE user_id = :id");
    $statement->execute(array('id' => $id));
    $statement->execute();
    $notandi = $statement->fetchAll();
    return $notandi;
}

function getNotandaImage($conn, $id) {
    $statement = $conn->prepare("SELECT myndir.skráarheiti FROM tenging JOIN myndir ON tenging.myndir_ID = myndir.id WHERE myndir.id = :id");
    $statement->execute(array('id' => $id));
    $statement->execute();
    $notandi = $statement->fetchAll();
    return $notandi;
}
 ?>
