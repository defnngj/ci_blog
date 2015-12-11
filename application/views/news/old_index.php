<h2><?php echo $title; ?></h2>

<?php foreach ($blogs as $blogs_item): ?>

    <h3><?php echo $blogs_item['title']; ?></h3><br>
	<a>Release date：<?php echo $blogs_item['dates']; ?></a>
	<a>Click rate：<?php echo $blogs_item['hits']; ?></a><br><br>
    <div class="main">
        <?php echo $blogs_item['contents']; ?>
    </div>
    <p><a href="<?php echo site_url('news/view/'.$blogs_item['id']); ?>">View article</a></p>
	<p><a href="<?php echo site_url('news/del/'.$blogs_item['id']); ?>">Delete</a></p>
	
<?php endforeach; ?>