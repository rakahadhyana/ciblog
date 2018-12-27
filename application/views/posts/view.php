<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<div class="row">
  <div class="col-md-3">
    <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
  </div>
</div>
<br>
<div>
  <?php echo $post['body']; ?>
</div>
<hr>
<a class="btn btn-primary float-left" href="edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
  <input type="submit" value="Delete" class="btn btn-danger">
</form>
