<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href= <?php echo "$index_url" ?> >Expert Code</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href=<?php echo $posts_url; ?> >  
          All Posts
        </a></li>

        <li><a href=<?php echo $top_posts_url; ?>  >Top posts</a></li>
        <li><a href=<?php echo $contact_us_url; ?>  >Contact Us</a></li>
      </ul>

      
         <form class="navbar-form pull-left" role="search" action=<?php echo $search_url; ?> method="post">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search" name="q">
               <div class="input-group-btn">
                  <button type="submit" class="btn btn-default" name="submit"> .
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
               </div>
            </div>
          </form>
    

      <ul class="nav navbar-nav navbar-right">

       <?php
            if(!isset($_SESSION['username'])) {
                include("loginform.php");
              }
            else {
                include("userdetail.php");
              }
       ?>


      </ul>
    </div>
  </div>
</nav>


