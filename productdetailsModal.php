
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="modal fade " id="dataModal">
                    <div class="modal-dialog modal-md">
                    <div class="modal-content">
                     
                    <div class="modal-header">
                  <h4 class="modal-title w-100 text-center">Details</h4>
                    </div>

                    <div class="modal-body" id="product_details">
                     
                    </div>

                    <div class="modal-footer">
                    <a href="" class="btn btn-secondary">Close</a>
                    </div>
                
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
      $(document).ready(function(){
       $('.view_data').click(function(){
         var product_id = $(this).attr("id");
           $.ajax({
             url:"select.php",
             method:"post",
             data:{product_id:product_id},
             success:function(data){
               $('#product_details').html(data);
               $('#dataModal').modal("show");
             }
           });
       });
      });
    </script>



