
<body>
	
<div id="loginModal" class="modal show">
  <div class="modal-dialog">
    <div class="modal-content">
	  <div class="modal-header">
        <h1 class="text-center text-primary">Register</h1>
      </div>
	  
      <div class="modal-body">
        <form action="./regist" method="post" class="form col-md-12 center-block">
          <br>
		  <div class="form-group">
            <input type="text" name="username" class="form-control input-lg" placeholder="UserName">
          </div>
          
		  <div class="form-group">
            <input type="password" name="password" class="form-control input-lg" placeholder="PassWord">
          </div>
		  
		  <div class="form-group">
            <input type="text" name="phone" class="form-control input-lg" placeholder="Phone">
          </div>

		  <div class="form-group">
            <input type="text" name="email" class="form-control input-lg" placeholder="E-mail">
          </div>
		  
          <div class="form-group">
            <button class="btn btn-primary btn-lg btn-block" name="submit" value="submit">register</button>
            <span><a href="http://localhost/CI_blog/index.php/login" class="pull-right">login</a></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--
<form action="./regist" method="post"> 
 当提交时触发signin/regist控制器 
    name: <input type="text" name="username">
    password: <input type="password" name="password">
    <input type="submit" name="submit" value="submit">
</form>
 <div class="form-group">
		    <select id="age" class="form-control" onchange="" name="age" style="width:120px;">
				<option value="0">0</option>
				<option value="1">1</option>
			</select>
          </div>
-->