<?php $this->msg->show(); ?>
<div class="jumbotron">
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload">
      Alt:
      <input type="text" name="alt">
      Description:
      <input type="text" name="description">
      <input type="submit" value="Upload Image" name="submit">
    </div>
  </form>
