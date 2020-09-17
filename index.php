<?php include "db.php"; ?>
<?php include "header.php"; ?>

    <?php 

    $message = "";

    if(isset($_POST['contact-btn'])){
        $username   = $_POST['name'];
        $password   = $_POST['pass'];
        $hashedPass = sha1($password);

        $query = "INSERT INTO user (username , password) VALUES ('$username', '$hashedPass')";
        $create_new_user = mysqli_query($connect, $query);

        if(!$create_new_user){
            die("Query Failed!" . $mysql_error($connect));
        }else{
            $message = '<div class="alert alert-success">Hello '. $username .', You have signed up successfully!</div>';
        }

    }
 
    ?>  


    <section class="s-l-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                <?php echo $message; ?>
                    <div class="s-l-box">
                        
                        <h1>Sign Up</h1>
                        
                        <form action="" method="POST">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="pass" autocomplete="off">
                            </div>
                            <p>Are you already an existing user?<span> <a href="login.php">Login!</a> </span></p>
                            <br>
                            <button type="submit" class="btn btn-primary" name="contact-btn">Submit</button>
                        </form>
                    </div>

                    


                </div>


            </div>
        </div>
    </section>




    <?php include "footer.php"; ?>