<?php include('header.php');  ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- Add your site or app content here -->
<div class="background-image-container white-text-container" style="background-image: url('./assets/images/img-05.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>The Factory</h1>
                <p class="">THE BEST PLACE FOR WORK TOGETHER</p>
                <a href="#contact-section-container" class="btn btn-primary btn-lg anchor-link" title="">Get in touch</a>
            </div>
        </div>
    </div>
</div>

<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 section-container-spacer">
                <h2 class="text-center">Vivamus laoreet</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="fa-container">
                    <i class="fa fa-comment-o fa-3x" aria-hidden="true"></i>
                </div>
                <h3 class="text-center">Consectetur</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident.</p>
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="fa-container">
                    <i class="fa fa-heart-o fa-3x" aria-hidden="true"></i>
                </div>
                <h3 class="text-center">Malesuada</h3>
                <p>Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="fa-container">
                    <i class="fa fa-bell-o fa-3x" aria-hidden="true"></i>
                </div>
                <h3 class="text-center">Phasellus</h3>
                <p> Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            </div>
        </div>
    </div>
</div>

<div class="section-container section-half-background-image-container">
    <div class="image-column" style="background-image: url('./assets/images/img-01.jpg')"></div>
    <div class="container">
        <div class="row">
            <div class="section-label reveal">
                <p>Coworking</p>
            </div>
            <div class="col-md-6 col-md-offset-6 text-column">
                <h2>Dui augue orci</h2>
                <h3>Lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor. Phasellus ut
                    lacus tellus. In pretium lobortis blandit. Nam eu laoreet velit. Vivamus laoreet, sem nec scelerisque
                    elementum, dui augue aliquet urna, ut bibendum purus erat ut massa. Mauris diam orci, feugiat a turpis
                    et, congue accumsan risus. Nulla malesuada leo sodales, auctor augue quis, condimentum lacus. Phasellus
                    sed sollicitudin quam, a bibendum urna.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor. Phasellus «
                    ut lacus » tellus. In pretium lobortis blandit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor. Phasellus ut
                    lacus tellus. In pretium lobortis blandit.</p>

            </div>
        </div>
    </div>
</div>



<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 section-container-spacer">
                <h2 class="text-center">Consectetur adipiscing</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <img src="./assets/images/img-02.jpg" alt="" class="img-responsive">
                <h3 class="text-center">Consectetur</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor. Phasellus ut
                    lacus tellus. In pretium lobortis blandit.</p>
            </div>

            <div class="col-xs-12 col-md-4">
                <img src="./assets/images/img-03.jpg" alt="" class="img-responsive">
                <h3 class="text-center">Malesuada</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor. Phasellus ut
                    lacus tellus. In pretium lobortis blandit.</p>
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="./assets/images/img-04.jpg" alt="" class="img-responsive">
                <h3 class="text-center">Phasellus</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor. Phasellus ut
                    lacus tellus. In pretium lobortis blandit.</p>
            </div>
        </div>
    </div>
    
</div>


<!--- modal to show update details --->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Latest Version</h4>
        </div>
        <div class="modal-body">
            <div class="show_update_version_details"></div>

          <button type="button" class="btn btn-primary" onclick="extract_version_on_server()" >Extract Version</button>
            
          <!-- 
          <button type="button" class="btn btn-primary" onclick="download_version_from_server()" >Update Version</button>
           -->   
          <button type="button" class="btn btn-secondary" onclick="not_update_version()">Not Now</button>
          
          <p>&nbsp;</p>
          

          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
<!-- modal to show update details end -->    


<!-- modal to show modules update details start-->

  <div class="modal fade" id="my_module_Modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Latest Modules Version</h4>
        </div>
        <div class="modal-body">
            <div class="show_update_module_version_details"></div>

          <button type="button" class="btn btn-primary" onclick="extract_module_version_on_server()" >Extract modules Version</button>
            
          <!-- 
          <button type="button" class="btn btn-primary" onclick="download_version_from_server()" >Update Version</button>
           -->   
          <button type="button" class="btn btn-secondary" onclick="not_update_module_version()">Not Now</button>
          
          <p>&nbsp;</p>
          

          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<!-- modal to show modules update details end-->


<?php //include('map_details.php');?>

<?php include('login_module/login.php'); ?>

<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
      
      $.ajax({
          type:'POST',
          url:'check_version_status.php',
          success:function(data){
              //return console.log(data);
              
              var result=data.trim();
              
              if(result=="no"){
                  $('.update_btn').hide();
              }else{
                  
                 var res= JSON.parse(result);
                 //console.log(res); 
                 
                 var new_version=res[0]['new_version'];
                 
                 var version_description=res[0]['version_description'];
                 
                 $('.show_update_version_details').html(version_description);
                 
                 $('.update_btn').show();
                 
                 $('.update_btn').html('<p><a href="" class="btn btn-default"  onclick="show_update_modal()" >Update New Version '+ new_version +'</a></p>')
                 
                 
              }
              
          }
      })
      
      
      $.ajax({
          type:'POST',
          url:'check_module_version_status.php',
          success:function(data){
              //return console.log(data);
              var result=data.trim();
              
              if(result=="no"){
                  $('.update_module_btn').hide();
              }else{
                  
                 var res= JSON.parse(result);
                 //console.log(res); 
                 
                 var new_version=res[0]['new_version'];
                 
                 var version_description=res[0]['version_description'];
                 
                 $('.show_update_module_version_details').html(version_description);
                 
                 $('.update_module_btn').show();
                 
                 $('.update_module_btn').html('<p><a href="" class="btn btn-default"  onclick="show_update_module_modal()" >Update Module Version '+ new_version +'</a></p>')
                 
                 
              }
          }
      })
      
      
      
      
      
});
      
      
function show_update_modal(){
    event.preventDefault();
    $('#myModal').modal('show');
}      


function show_update_module_modal(){
    event.preventDefault();
    $('#my_module_Modal').modal('show');
}


function not_update_version(){
    $('#myModal').modal('hide');
}


function not_update_module_version(){
    $('#my_module_Modal').modal('hide');
}

function download_version_from_server(){
    
   $.ajax({
       type:'POST',
       url:'download_server_details.php',
       success:function(data){
           alert('Download successfully');
       }
   })
}


function extract_version_on_server(){
    
   $.ajax({
       type:'POST',
       url:'../extract_version_details.php',
       success:function(data){
           alert(data);
       }
   })    
}


function extract_module_version_on_server(){
    
   $.ajax({
       type:'POST',
       url:'../extract_module_version_details.php',
       success:function(data){
           alert(data);
       }
   }) 
}


</script>

