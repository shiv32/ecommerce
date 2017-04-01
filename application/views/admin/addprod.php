<?php include("template/header.php"); ?>

<h2><center>Add New Product</center></h2>
<!--   add form     -->
<?php echo validation_errors(); ?>

<?php if($msg){ ?>

<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong><?= $msg; ?></strong>
</div>
<?php } ?>




<?php echo form_open_multipart('admin/insertprod'); ?>
<div class="form-group">
<label>Product Name:</label>
<input type="text" class="form-control" name="prodname" placeholder="Enter product Name">
</div>
<div class="form-group">
<label>Product Price:</label>
<input type="text" class="form-control" name="prodprice" placeholder="Enter product Price">
</div>
<div class="form-group">
<label>Description:</label>
<textarea class="form-control" rows="3" name="desc"></textarea>
</div>
<div class="form-group">
<label>Select Image:</label>
<input type="file" name="userfile" size="20" />
<p class="help-block">.jpg, .jpeg, .png, .gif</p>
</div>
<button type="submit" class="btn btn-success">Add Product</button>
</form>
<!--   add form  end   -->

<?php include("template/footer.php"); ?>
