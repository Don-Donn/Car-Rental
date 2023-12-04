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

        .editBookingForm{
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

    <!-- Form to edit typo or extend date in the advance booking table -->
    <!-- Start of editBooking-->
    <div class="cardProduct">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" style="color: white; background-color: rgb(25,25,112); font-weight: bold;" href="editBooking.php">EDIT BOOKING</a>
                </li>             
            </ul>
        </div>
        <?php
        $rentalId = isset($_GET['rentalId']) ? $_GET['rentalId'] : null;
        $customerName = isset($_GET['customer_name']) ? $_GET['customer_name'] : null ;
        ?>
        <div class="editBookingForm">
            <form method="POST">
                
                <label for="ID">ID:</label><br>
                <input type="text" id="ID" name="ID" value="<?php echo $rentalId; ?>" readonly>
                <br>

                <label for="customerName">Customer Name:</label><br>
                <input type="text" id="customerName" name="customerName" value="<?php echo $customerName; ?>" required>
                <br>     

                <label for="car">Car:</label><br>
                <select id="car" name="car">
                    <option value="Car 1">Car 1</option>
                    <option value="Car 2">Car 2</option>
                    <option value="Car 3">Car 3</option>
                    <option value="Car 4">Car 4</option>
                </select>
                <br>   

                <label for="barrowDate">Barrow Date:</label>
                <input type="date" id="barrowDate" name="barrowDate" required>
                <br>

                <label for="returnDate">Return Date:</label>
                <input type="date" id="returnDate" name="returnDate" required>
                <br>

                <label for="price">Price:</label><br>
                <input type="number" id="price" name="price" required>
                <br> 

                <label for="fine">Fine P.D:</label><br>
                <input type="number" id="fine" name="fine" required>
                <br>

                <label for="status">Status:</label><br>
                <input type="text" id="status" name="status" value="upcoming"  readonly>
                <br>

                <button class="addButton" type="submit" name="addButton">SAVE</button>
            </form>
        </div>

    </div>
    <!-- End of editBooking-->


    
<?php
include'../includes/footer.php';
?>