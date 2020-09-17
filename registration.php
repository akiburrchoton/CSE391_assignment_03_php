<?php include "db.php"; ?>
<?php include "header.php"; ?>



<?php

//echo "starting";
$message = "";

if (isset($_POST['register'])) {

    $name   = $_POST['name'];
    $fname  = $_POST['fname'];
    $sid    = $_POST['sid'];
    $email  = $_POST['email'];
    $seats  = $_POST['seats'];


    $query = "INSERT INTO registration (name_r , fname_r, sid_r, email_r, seat) VALUES ('$name', '$fname', '$sid', '$email', '$seats')";

    $result1 = mysqli_query($connect, $query);

    if (!$result1) {
        die("1st Query Failed!");
    }

    $array = array();
    $query1 = "SELECT COUNT(reg_id) as total, seat FROM registration GROUP BY seat";
    $result2 = mysqli_query($connect, $query1);
    if (!$result2) {
        die("2nd Query Failed!");
    }
    while ($row = mysqli_fetch_assoc($result2)) {
        $array[] = $row['total'];
    }
    // $n = count($array);
    // for ($i = 0; $i < $n; $i++) {
    //  echo "$array[$i]" . "<br>";
    // }




}

?>

<section class="s-l-form">

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <div class="s-l-box">
                     
                    <h1>Registration</h1>
                    <form action="" method="POST">

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" autocomplete="off">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" name="fname" autocomplete="off">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">

                                    <label for="sid">Student ID</label>
                                    <input type="text" class="form-control" name="sid" autocomplete="off">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <select class="custom-select" name="seats" multiple>
                            <option value="0" selected>Select your slot</option>
                            <option name="mon" value="2">Monday 15:00 - 18:00 <span><?php echo "Seats remaining = " . (8 - $array[0]); ?></span></option>
                            <option name="tues" value="3">Tuesday 11:00 - 14:00 <span><?php echo "Seats remaining = " . (8 - $array[1]); ?></span> </option>
                            <option name="thurs" value="5">Thursday 14:00 - 17:00 <span><?php echo "Seats remaining = " . (8 - $array[2]); ?></span> </option>
                            <option name="fri" value="6">Friday 9:00 - 12:00 <span><?php echo "Seats remaining = " . (8 - $array[3]); ?></span> </option>
                        </select>

                        <div class="buttons">
                            <button type="submit" class="btn btn-success" name="register">Register</button>
                            <button type="reset" class="btn btn-danger">Clear</button>
                            <button class="user-btn btn btn-primary "><a href="users.php">View All Users</a></button>
                        </div>

                    </form>



                </div>

            </div>


        </div>
    </div>
</section>


<?php include "footer.php"; ?>