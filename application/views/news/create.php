<!-- ckeditor编辑器源码文件 -->
	<script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
<body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="http://localhost/CI_blog/index.php/news">Blog</a>
          <a class="blog-nav-item active" href="#">Create</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>
      </div>
    </div>


    <div class="container">

      <div class="blog-header">
        <h2 class="blog-title"><?php echo $title; ?></h2>
        <p class="lead blog-description">Please add an article.</p>
      </div>
	
      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
		  

			<?php echo validation_errors(); ?>

			<?php echo form_open('news/create'); ?>

				<label for="title">Title</label><br/>
				<input type="input" name="title" /><br/>

				<label for="text">Contents</label><br/>
				<textarea rows="10" cols="80" name="text"></textarea><br/>
				<script type="text/javascript">CKEDITOR.replace('text');</script>

				<input type="submit" name="submit" value="Create news item" />

			</form>
	
            
          </div><!-- /.blog-post -->

		  
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->
	<!-- 配置文件 -->
	
    
    
    

    </div><!-- /.container -->
	
	
