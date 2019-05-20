<?php

class ImgRepository
{

  private $limit = 1;

  private $conn;

  public function __construct($connection)
  {
    $this->conn = $connection;
  }

  public function countPages()
  {
    $sql = 'SELECT COUNT(id) as n from img';
    $rows = (int)$this->conn->query($sql)->fetch_assoc()['n'];
    return intval(floor($rows/$this->limit));
  }

  public function findAll($page)
  {
    $offset = ($page-1) * $this->limit;
    $sql = 'SELECT id, name, alt, description FROM img ORDER BY id LIMIT '.$this->limit.' OFFSET '.$offset.';';
    $result = $this->conn->query($sql);
    $images = [];
    while(is_object($result) && $row = $result->fetch_assoc()) {
      $images[] = $row;
    }
    return $images;
  }

  public function findById($id)
  {
    $sql = 'SELECT id, name, alt, description FROM img WHERE id=\'' . $id . '\';';
    return $this->conn->query($sql)->fetch_assoc();
  }

  public function save($name, $alt=null, $description=null, $id=null)
  {
    $sql = '';
    if ($id){
      $sql = "UPDATE img SET name ='$name', alt='$alt', description='$description') WHERE id = $id";
    } else {
      $sql = "INSERT INTO img (name, alt, description) VALUES ('$name', '$alt', '$description')";
    }
    $this->conn->query($sql);
  }

  public function delete($id)
  {
    $sql = 'DELETE FROM img WHERE id= ' . $id .';';
    $this->conn->query($sql);
  }

}
