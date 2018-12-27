<h2><?= $title ?></h2>
<?php foreach ($posts as $post) : ?>
  <div class="posts">
    <h3><?php echo $post['title']; ?></h3>
      <small class="post-date">
        Posted on: <?php echo $post['created_at']; ?>
        in <strong><?php echo $post['name']; ?></strong>
      </small>
      <br>
    <div class="row">
      <div class="col-md-3">
        <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
      </div>
      <div class="col-md-9">
        <div class="post-body">
          <?php echo word_limiter($post['body'], 250); ?>
        </div> 
        <a class="btn btn-primary" href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read More</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>