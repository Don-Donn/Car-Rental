<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?>
    <style>
        .cardProduct{

        width: calc(100% - 320px);
        margin-top: 40px;
        margin-left: 310px;
        display:inline-block;
        background: rgb(245, 245, 245);
        }

        #ad-head{
        display: inline-block;
        }

        .m-2{
        color: rgb(25,25,112);
        display; inline;
        }

        #add-car{
        display: inline-block;
        position: absolute;
        left: 185px;
        top: 30px;
        margin: 5px;
        padding: 5px;
        }
    </style>
    <!-- main table for the list of cars for rental-->
    <!-- Start of cars -->
    <div class="cardProduct">
    <div class="card shadow mb-4">
            <div class="card-header py-3" id="ad-head">
                <h4 class="m-2 font-weight-bold">Cars For Rent</h4>
                <a class="add-btn"  href="addCar.php">
                    <i class="fa-solid fa-plus fa-2xl" id="add-car" style="color: #ffd700;"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Car Name</th>
                                <th>Brand</th>
                                <th>Car Model</th>
                                <th>Year Model</th>
                                <th>Car Model</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    <tbody>
                    <!-- CODE FOR FUNCTION OF THE TABLE -->
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- End of cars -->


    
<?php
include'../includes/footer.php';
?>