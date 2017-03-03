<h2>Categories</h2>
<p>In our e-shop we have:</p>
<div class="categories">
    <ul>
      <?php foreach($categories as $category):?>
      <li>
            <a href="<?php echo $category->getUrl();?>">
            <?php echo ($category->name);?>
            </a>
      </li>
      <?php endforeach; ?>
    </ul>
</div>