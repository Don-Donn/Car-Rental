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

        #rental{
        display: inline-block;
        }

        .m-2{
        color: rgb(25,25,112);
        display; inline;
        }

        #add-transac{
        display: inline-block;
        position: absolute;
        left: 225px;
        top: 30px;
        margin: 5px;
        padding: 5px;
        }
    </style>
    <!-- main table for ongoing rentals-->
    <!-- Start of ongoing rentals -->
    <div class="cardProduct">
    <div class="card shadow mb-4">
            <div class="card-header py-3" id="rental">
                <h4 class="m-2 font-weight-bold">Ongoing Rentals</h4>
                <a class="add-btn"  href="newTransac.php">
                    <i class="fa-solid fa-plus fa-2xl" id="add-transac" style="color: #ffd700;"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CUSTOMER NAME</th>
                                <th>CAR</th>
                                <th>BARROW DATE</th>
                                <th>RETURN DATE</th>   
                                <th>PRICE</th>
                                <th>FINE P.D</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
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
    <!-- End of ongoing rentals -->

    

    <!-- main table for advanceBooking-->
    <!-- Start of advanceBooking -->
    <div class="cardProduct">
    <div class="card shadow mb-4">
            <div class="card-header py-3" id="rental">
                <h4 class="m-2 font-weight-bold">Advance Bookings</h4>
                <a class="add-btn"  href="newTransac.php">
                    <i class="fa-solid fa-plus fa-2xl" id="add-transac" style="color: #ffd700;"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CUSTOMER NAME</th>
                                <th>CAR</th>
                                <th>BARROW DATE</th>
                                <th>RETURN DATE</th>   
                                <th>PRICE</th>
                                <th>FINE P.D</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
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
    <!-- End of advanceBooking -->




    
<?php
include'../includes/footer.php';
?>