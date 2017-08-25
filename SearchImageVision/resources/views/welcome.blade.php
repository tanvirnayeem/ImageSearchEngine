<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Image Searching</title>
       <style type="text/css">
      
          .test{
            width: 70%;
            height: 40%;
          }

                  /* Paste this css to your style sheet file or under head tag */
        /* This only works with JavaScript, 
        if it's not present, don't show loader */
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background: url(http://smallenvelop.com/wp-content/uploads/2014/08/Preloader_21.gif) center no-repeat #fff;
}


      </style>
      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
     

  
      <!--  Tanveer Islam Preom
       CSE 12 Batch, SUST -->
       

   </head>
   <body>

    <div class="se-pre-con"></div>


      <nav class="brown" role="navigation">
         <div class="nav-wrapper container"><a  class="brand-logo"> Image Searching API</a>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
         </div>
      </nav>

  


      <div class="section no-pad-bot" id="index-banner">
         <div class="container text-center">
            <br><br>
            <center>
               <img src="{!! asset('sust.png')!!}" alt="Mountain View" style="width:100px;height:100px;">
               <div class="row center">
                  <h5 class="header col s12 light">Object Detection & Recognition of Still Images
for Image Searching Issue Using<br>Tensorflow & CNN
                  </h5>
               </div>
            </center>




            
              {!! Form::open(array('url' => '/generate', 'method' => 'post', 'files' => true, 'id'=>'empty')) !!}
               <center>
                  

                 

                     <div class="file-field input-field test">
                        <div class="btn but">
                          <span>Choose Image</span>
                          <input type="file" name="file" id="fileBox">
                        </div>
                        <div class="file-path-wrapper">
                          <input placeholder="Image Here" class="file-path validate">
                        </div>
                    </div><br>

                    
                     <button type="submit" class="btn green" style='width:300px;'>Search</button>
               </center>
             {!! Form::close() !!}

            <br><br>
            </div>
         </div>


          <center><div>
           <img src="{{ asset($previewImage) }}">
         </div>
         </center> 



         <form>
            <center>
               <div class="form-group">
                  <label for="exampleTextarea">
                     <h5><b>Best Guess</b></h5>
                  </label>
                  <textarea class="form-control" id="exampleTextarea" rows="3" style="width: 500px; height: 150px;"><?php echo $contents; ?></textarea>
               </div>
            </center>
         </form>

        
       @if( strpos($filepath, '/Data/Output/') === 0)
        <center>
           <p>  <em>Download Stemming Result.....</em> <a download href="{!! $filepath!!}" target="_blank"><i class="material-icons">get_app</i></a></p>
        </center>
        @else
        @endif

         <br><br>
         <div class="section">
         </div>
      </div>







      <footer class="page-footer blue">
         <div class="container">
            <div class="row">
               <div class="col l6 s12">
                  <h5 class="white-text">About </h5>
                  <p class="grey-text text-lighten-4">Object Detection & Recognition of Still Images
for Image Searching Issue Using<br>Tensorflow & CNN</p>
               </div>
            </div>
         </div>
         <div class="footer-copyright">
            <div class="container">
               Created by <a class="white-text text-lighten-3" href="https://www.linkedin.com/in/tanayeem" target="_blank">Tanvir Ahamed Nayeem</a>
            </div>
         </div>
      </footer>


      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/init.js"></script>
     
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
     <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>



      <script type="text/javascript">

      //loader
        // Wait for window load
        $(window).load(function() {
          // Animate loader off screen
          $(".se-pre-con").fadeOut("slow");;
        });






      //check double field empty or not
       document.getElementById("empty").onsubmit = function () {
        if (!document.getElementById("exampleTextarea").value) {
                if (!document.getElementById("fileBox").value) {
                      alert('Can not Submit without Input');
                      return false;
                }else{
                      return true;
                }
            }
        } 


      //validate upload file       
       function validate_fileupload(fileName)
        {
            return true;

        }
       

      </script>


   </body>
</html>
