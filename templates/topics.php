<?php include('includes/header.php'); ?>

<ul id="topics">
<?php if($topics): ?>
  <?php foreach($topics as $topic): ?>
  <li class="topic topic">
    <div class="row">
      <div class="col-md-2">
        <img src="images/avatars/<?php echo $topic->avatar; ?>" alt="Avatar" class="avatar pull-left">
      </div>
      <div class="col-md-10">
        <div class="topic-content pull-right">
          <h1><a href="topic.php?id=<?php echo $topic->id; ?>"><?php echo $topic->title; ?></a></h1>
          <div class="topic-info">
            <a href="topics.php?category=<?php echo urlFormat($topic->category_id); ?>"><?php echo $topic->name; ?></a> >>
            <a href="topics.php?user=<?php echo urlFormat($topic->user_id); ?>"><?php echo $topic->username; ?></a> >>
            <?php echo dateFormat($topic->create_date); ?>
            <span class="badge pull-right"><?php echo replyCount($topic->id); ?></span>
          </div>
        </div>
      </div>
    </div>
  </li>
  <?php endforeach; ?>
</ul>
<?php else: ?>
  <p>There is no topics to display.</p>
<?php endif; ?>

<h3>Forum Statistics</h3>
<ul>
  <li>Total Number of Users: </li>
  <li>Total Number of Topics: <strong><?php echo $totalTopics; ?></strong></li>
  <li>Total Number of Categories: <strong><?php echo $totalCategories; ?></strong></li>
</ul>

<?php include('includes/footer.php'); ?>
