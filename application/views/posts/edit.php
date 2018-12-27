<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update/'.$post['id']); ?>
  <div class="form-group">
    <label for="addTitle">Title</label>
    <input type="text" class="form-control" id="addTitle" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label for="postBody">Body</label>
    <textarea class="form-control" id="editor1" name="body" placeholder="Add Body" rows="5"><?php echo $post['body']; ?></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>