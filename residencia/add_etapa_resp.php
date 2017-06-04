<?php 
  require_once('functions.php'); 
  view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<html>  
      <head>  
           <title>Etapas do Responsável</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <br />  
                <h2 align="center">Etapas do Responsável</h2>  
                <h2>residencia <?php echo $residencia['id']; ?></h2>

                <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="name[]" placeholder="Número Etapa" class="form-control name_list" /></td> 
                                         <td><input type="text" name="details[]" placeholder="Descrição" class="form-control details_list" /></td> 
                                         
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                          </div>  
                     </form>  
                     <BR><BR>
                     <form action="index.php">
                           <a href="index.php" class="btn btn-info">Finalizar</a>
                     </form>
                </div>  
           </div>  
      </body>  
 </html>  



 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Número Etapa" class="form-control name_list" /></td>  <td><input type="text" name="details[]" placeholder="Descrição" class="form-control details_list" /></td>  <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"etapa_resp.php",  
                method:"POST", 
                data:$('#add_name').serialize(),
                //data:$('#add_details').serialize(),
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>