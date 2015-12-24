<html>
<head>
	<meta?http-equiv="Content-Type"?content="text/html;?charset=utf-8"?/>
	<title>blog</title>
</head>
<body>
	<h1>blog view</h1>
	<?php foreach ($blogs as $blogs_item): ?>
	
		<h2 class="blog-post-title"><?php echo $blogs_item['title']; ?></h2>
				
		<p class="blog-post-meta">
			<?php echo $blogs_item['dates']; ?>
			Reading:<?php echo $blogs_item['hits']; ?></a>
		</p>
				
		<div class="main">
			<?php echo iconv_substr($blogs_item['contents'],0,100); ?>...
		</div>
	
	<?php endforeach; ?>

	<?php echo $this->pagination->create_links();?>
</body>
</html>