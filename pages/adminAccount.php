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

    #add-user{
    display: inline-block;
    position: absolute;
    left: 225px;
    top: 25px;
    margin: 5px;
    padding: 5px;
    }
    </style>

    <!-- Main Table to show list of accounts -->
    <!-- Start of adminAccount -->
    <div class="cardProduct">
    <div class="card shadow mb-4">
            <div class="card-header py-3" id="ad-head">
                <h4 class="m-2 font-weight-bold">Admin Account(s)</h4>
                <a class="add-btn"  href="add_Account.php">
                    <i class="fa-solid fa-user-plus fa-2xl" id="add-user" style="color: #ffd700;"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Password</th>
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
    <!-- End of adminAccount -->


    
<?php
include'../includes/footer.php';
?>