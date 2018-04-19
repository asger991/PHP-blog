<?php
require('config/config.php');
require('config/db.php');


// Create Query
$query = 'SELECT * FROM posts ORDER BY created_at DESC';

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($posts);

// Free the result
mysqli_free_result($result);

// Close Connection
mysqli_close($conn)
?>

<?php include('inc/header.php'); ?>
<div class="container">
  <br>
  <h1>Posts</h1>
  <?php foreach($posts as $post) : ?>
    <div class="well bg-secondary rounded" style="margin-top: 2em; width: 100%; align: center;">
      <div style="padding: 1em;">
        <h3><?php echo $post['title']; ?></h3>
        <small>Created on <?php echo $post['created_at']; ?> by <strong><?php echo $post['author']; ?></strong></small>
        <hr class="bg-primary" style="color: #D16F33; height: 3px;">
        <p><?php echo $post['body']; ?></p>
        <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?php include('inc/footer.php'); ?>
