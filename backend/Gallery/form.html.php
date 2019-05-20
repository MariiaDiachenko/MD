<?php $this->msg->show(); ?>
<div class="">
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <? if (!$image['id']): ?>
      Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload">
    <? endif; ?>
      Alt:
      <input type="text" name="alt" value='<?php echo isset($_POST['alt']) ? $_POST['alt'] : $image['alt']; ?>'>
      Description:
      <input type="text" name="description" value='<?php echo isset($_POST['description']) ? $_POST['description'] : $image['description']; ?>'>
      Category:
      <input type="text" name="category" value='<?php echo isset($_POST['category']) ? $_POST['category'] : $image['category']; ?>'>
      <input type="submit" value="Upload Image" name="submit">
    </div>
  </form>
