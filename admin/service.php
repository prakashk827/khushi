<?php include_once("public/head.php");?>
  

<title></title>

<body class="app sidebar-mini">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="index.php">EP's</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Search">
        <button class="app-search__button"><i class="fa fa-search"></i></button>
      </li>
      <!--Notification Menu-->
      <?php include_once("public/notificationMenu.php");?>
      <!-- Notification Menu Ends -->
      <!-- User Menu-->
      <?php include_once("public/userMenu.php");?>
      <!-- User Menu Ends -->
    </ul>
  </header>
  <!-- Sidebar menu-->
  <?php include_once("public/menu.php");?>
  <!-- Sidebar menu Ends -->
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa <?php  serviceIcon();?>"></i>555 </h1>

        <p>Add new service</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Projects</a></li>
      </ul>
    </div>

    <!-- two fields form starts -->
    

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="row">
            <div class="col-lg-6">
              <form service/insert.php id="userForm" method="post" action="service/insert.php" enctype="multipart/form-data">
                
              

              <div class="form-group">
               <label for="exampleInputEmail1">Upload Photo (340 X 224)</label>
               <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01"
                  aria-describedby="inputGroupFileAddon01" name="photo" required>
                  <label class="custom-file-label" for="inputGroupFile01">
                    Click Here
                  </label>
                </div>
              </div>

              <div class="form-group">
                <br>
              <label for="exampleInputEmail1">Image Alt Keyword</label>
              <input class="form-control"  type="text"  name="alt" required>
            </div>


            </div>

            <!-- Multiple Images upload starts -->
            
                
              
              <!-- Multiple Images upload starts -->





          </div>
          <div class="col-lg-4 offset-lg-1">

            <div class="form-group">
              <label for="exampleInputEmail1">Project Name</label>
              <input class="form-control"  type="text" id="title" name="title" required/>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Project Link</label>
              <input class="form-control"  type="text" id="projectLink" name="projectLink" required/>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label">Short Description</label>
          <textarea class="form-control" rows="6" id="shortDesc"
          name="shortDesc" maxlength="500" placeholder="Maximum 500 Characters"></textarea>



        </div>

        <!-- <h3 class="tile-title">Description</h3>
        <div class="form-group">
         <textarea id="editor1" rows="5" cols="30" name="editor1" required></textarea>
       </div> -->

       <div class="form-group">
        <input class="btn btn-danger"  id="reset" type="reset" value="Clear" />
        <input class="btn btn-success" type="submit" value="Save" id="save"  name="save"/>
      </div>

      <p id="response"></p>

      <div id="desc"></div>

    </div>
  </div>
</div>
</form>
</div>
</div>
</div>




<!-- two fields form ends -->




</div>
<!-- Code Ends -->
</div>
</div>
</div>

</main>

<script type="text/javascript"></script>
<script>
  $(document).ready(function()
  {
    

    //Reset Form
    $("#reset").click(function(){

      $('#userForm')[0].reset();

    });
    $("#save1").click(function()
    {

     //var text=$('textarea[name="editor1"]').ckeditor();





     $.ajax({
      type: 'POST',
      url: 'projects/insert.php',
      data: $("#userForm").serialize(),
      beforeSend: function() {

        $("#response").html("Please wait...");
      },
      success: function(data) {

       $("#response").html(data);
       
     }

   })

   });
    



  });
</script>


<!-- Essential javascripts for application to work Starts-->

<?php include_once("public/js.php");?>
<!-- Essential javascripts for application to work Ends-->


<!---CK EDITOR------------->
<script src="ckeditor/ckeditor/ckeditor.js"></script>

<script>
  CKEDITOR.replace( 'editor1',{

    width: '1190px'




  } );
</script>
<script>
  CKEDITOR.on('dialogDefination',function(e)
  {
    dialogName=e.data.name;
    console.log(dialogName);
  }
  )
</script>
<!---CK EDITOR ENDS------------>

</body>
</html>