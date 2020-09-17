<?php include "db.php"; ?>
<?php include "header.php"; ?>

    <div class="container">
        <h1>Registered Students</h1> <br>
        <form method="post">
            <div class="form-group row">
                <div class="col-sm-6">
                    <select class="form-control form-control-lg" id="slot" name="seat">
                        <option>Select One</option>
                        <option value="2">Monday Slot</option>
                        <option value="3">Tuesday Slot</option>
                        <option value="5">Thursday Slot</option>
                        <option value="6">Friday Slot</option>

                    </select>
                </div>
                <div class="col-sm-6">
                <button  type="submit" name="search" class="btn btn-success">Search</button> 
                </div>
            </div>
        </form>


        <?php
            if (isset($_POST['search'])) {
            $seat = $_POST['seat'];
            $query = "SELECT * from registration where seat= $seat";
            $result = mysqli_query($connect, $query);
        ?>

            <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>FirstName</th>
                        <th>Email</th>
                        <th>Student Id</th>
                        <th>Slot</th>
                    </tr>
                <?php
                    while ($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo ($row["name_r"]); ?></td>
                        <td><?php echo ($row["fname_r"]); ?></td>
                        <td><?php echo ($row["email_r"]); ?></td>
                        <td><?php echo ($row["sid_r"]); ?></td>
                        <td>
                            <?php 

                                if(($row["seat"]) == 2 ){
                                    echo "Monday"; 
                                }elseif(($row["seat"]) == 3 ){
                                    echo "Tuesday"; 
                                }elseif(($row["seat"]) == 5 ){
                                    echo "Thursday"; 
                                }elseif(($row["seat"]) == 6 ){
                                    echo "Friday"; 
                                }
                        
                            ?>
                        </td>
                    </tr>
                <?php
                    }
                }
                ?>
            </table>

    </div>

<?php include "footer.php"; ?>