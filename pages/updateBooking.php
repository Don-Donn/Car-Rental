<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?>

<style>
        .cardProduct{

        width: calc(100% - 320px);
        margin-top: 6px;
        margin-left: 310px;
        display:inline-block;
        background: rgb(245, 245, 245);
        }

        .updateBookingForm{
        padding:15px;
        padding-top:40px;
        padding-bottom: 65px;
        overflow: hidden;
        text-align: center;

        }
        form {
        display: inline-block;
        width: 500px;
        border: 1px solid #000;
        padding: 10px;
        text-align: center;
        border-radius: 10px;
        }
        label{
        font-weight: bold;
        font-size:medium;
        }
        input{
        font-size: medium;
        }

        select, input {
        display: inline-block;
        margin-bottom: 10px;
        }

        select, input[type="text"], input[type="number"] {
        text-align: center;
        width: 43%;
        padding: 5px;
        font-size: 15px;
        line-height: 1.5;
        }

        .addButton {
        background-color: rgb(255,215,0);
        border: 2px solid black;
        border-radius: 5px;
        color: black;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        }


    </style>
    <!-- Form to update (advanceBooking) from upcoming to ongoing -->
    <!-- Start of updateBooking -->
    <div class="cardProduct">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" style="color: white; background-color: rgb(25,25,112); font-weight: bold;" href="updateBooking.php">UPDATE STATUS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="cancelBooking.php">CANCEL BOOKING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="editBooking.php">EDIT BOOKING</a>
                </li>             
            </ul>
        </div>
    <div class="updateBookingForm">
            <form method="POST">
                <label for="bookingID">Booking ID:</label><br>
                <input type="number" id="bookingID" name="bookingID" readonly>
                <br>

                <label for="status">Status:</label><br>
                <input type="text" id="status" name="status" value="ongoing"  readonly>
                <br>
                
                <button class="addButton" type="submit" name="cancelButton">UPDATE</button>
            </form>
        </div>

    </div>
    </div>
    <!-- End of updateBooking -->


    
<?php
include'../includes/footer.php';
?>