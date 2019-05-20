<?php
require_once dirname(__DIR__) . '/ImgRepository.php';
require_once dirname(__DIR__) . '/Messages.php';

class GalleryService
{
  private $imgRepo;

  private $msg;

  public function __construct($connection)
  {
    $this->imgRepo = new ImgRepository($connection);
    $this->msg = new Messages();
  }

  public function showGallery($page){
    $page = $page ? $page : 1;
    $images = $this->imgRepo->findAll($page);
    foreach ($images as $image) {
      include(__DIR__ . '/image.html.php');
    }
  }

  public function getPageCount()
  {
    return $this->imgRepo->countPages();
  }

  public function showOne($id)
  {
    $image = $this->imgRepo->findById($id);
    include(__DIR__ . '/image.html.php');
  }

  public function saveImage($id=null)
  {
    $target_dir = "uploads/";
    $file_name = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $file_name;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = 1;
    // Check if image file is a actual image or fake image
    if(isset($_POST["file"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $this->msg->addAlert("File is an image - " . $check["mime"] . ".");
            $uploadOk = 1;
        } else {
            $this->msg->addAlert(  "File is not an image.");
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $this->msg->addAlert("Sorry, file already exists.");
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $this->msg->addAlert("Sorry, your file is too large.");
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $this->msg->addAlert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        $uploadOk = 0;
    }
    if ($id) {
      $uploadOk = 1;
    }

    if (isset($_POST['alt'])) {
      if(!isValidString($_POST['alt'])){
        $this->msg->addAlert('alt must follow regex /^[\wA-PR-UWY-ZĄĆĘŁŃÓŚŹŻ\s0-9]{0,233}$/iu');
        $uploadOk = 0;
      }
    }

    if (isset($_POST['description'])) {
      if(!isValidString($_POST['description'])){
        $this->msg->addAlert('description must follow regex /^[\wA-PR-UWY-ZĄĆĘŁŃÓŚŹŻ\s0-9]{0,233}$/iu');
        $uploadOk = 0;
      }
    }

    // Check if $uploadOk is set to 0 by an error
    if (!$uploadOk) {
        $this->msg->addAlert("Sorry, your file was not uploaded.");
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $this->msg->addSuccess(  "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.");
            $this->imgRepo->save($file_name, $alt, $description, $id);
        } else {
            $this->msg->addAlert("Sorry, there was an error uploading your file.");
        }
    }
  }

  public function renderForm()
  {
    include(__DIR__ . '/form.html.php');
  }

}