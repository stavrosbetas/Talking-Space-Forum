<?php include('includes/header.php'); ?>
              <ul id="topics">
                <?php if($topics) : ?>
                  <?php foreach($topics as $topic) : ?>
                <li class="topic">
                  <div class="row">
                    <div class="col-md-2">
                      <img class="avatar pull-left" src="images/gravatar.jpg"/>
                    </div>
                    <div class="col-md-10">
                      <div class="topic-content pull-right">
                        <h3><a href="topic.php"><?php echo $topic->title; ?></a></h3>
                        <div class="topic-info">
                          <a href="category.php">Development</a> >> <a href="profile.html">Brad</a>
                          <span class="badge pull-right">3</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            <?php else : ?>
              <p>No Topics to display!</p>
          <?php endif; ?>
              <h3>Forum Statistics</h3>
              <ul>
                <li>Total Number of Users: <strong>52</strong></li>
                <li>Total Number of Topics: <strong>10</strong></li>
                <li>Total Number of Categories: <strong>5</strong></li>
              </ul>
<?php include('includes/footer.php'); ?>
