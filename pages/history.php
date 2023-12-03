<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?>

    <style>
        .prodTable{
        width: calc(100% - 320px);
        margin-top: 40px;
        margin-left: 310px;
        display:inline-block;
        background: rgb(245, 245, 245);
        }

        .m-2{
        color: maroon;
        display: inline-block;
        }

        .search-bar {
        max-width: 300px;
        display: inline-block;
        margin-left: 70%;
        }
    </style>

    <!-- main table for transactionHistory, for viewing only-->
    <!-- Start of transactionHistory -->
    <div class="prodTable">
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-2 font-weight-bold ">Products</h4>
                <div class = "search-bar">
                    <input type="text" placeholder="Search Customer Name..." class="form-control">
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                     <th>No.</th>
                     <th>CUSTOMER NAME</th>
                     <th>CAR</th>
                     <th>BARROW DATE</th>
                     <th>RETURN DATE</th>   
                     <th>PRICE</th>
                     <th>FINE P.D</th>
                     <th>DATE RETURNED</th>
                     <th>PENALTY</th>
                     <th>GROSS INC</th>
                     <th>STATUS</th>
                   </tr>
               </thead>
                <tbody>
                    <!-- CODE FOR TBODY DATA -->
                </tbody>
                            
                </table>
                        
               </div>
                   
            </div>
                  
    </div>
    </div>
    <!-- End of transactionHistory -->


    
<?php
include'../includes/footer.php';
?>