<?php include "db.php"; ?>
<?php include "header.php"; ?>
    <?php
    
    $confirmation = '';


    if (isset($_POST['login'])) {
 

        $name   = $_POST[('name')] ;
        $pass   = $_POST[('password')];
        $hassedpass = sha1($pass);
        //prevent mqSql Injection
        $name   = stripcslashes($name);
        $pass   = stripcslashes($hassedpass);
        $name   = mysqli_real_escape_string($connect, $name);
        $pass   = mysqli_real_escape_string($connect, $hassedpass);


        // Database Query (Fetching)
        $query = "SELECT * from user where username='$name' and password='$hassedpass' ";
        $result = mysqli_query($connect, $query); 

        // Fetching the rows as array from the Database
        $row    = mysqli_fetch_array($result);


        if( $row['username'] == $name && $row['password'] == $hassedpass ){
            
            header('Location: registration.php');
        }else{
            $confirmation = '<div class="alert alert-danger">Wrong Username or Password!</div>';
        }
    }


    ?>


    <section class="s-l-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <?php echo $confirmation; ?>

                    <div class="s-l-box">
                        <h1>Login</h1>

                        <form action="" method="POST">


                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-primary" name="login">Login</button>
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </section>



    <?php include "footer.php"; ?>