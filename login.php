<?php
include 'header.php';

?>


<?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields</p>";
    } else if ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login information!</p>";
    }
}

?>
</div>

<div id="">
    <div class="d-flex flex-column  justify-content-center align-items-center">
        <div class="card p-4 text-light  mb-5 login border border-danger">
            <div class="card-header">
                <h3>Login</h3>
            </div>
            <div class="card-body w-100">
                <form action="includes/login.inc.php" method="post" class="">
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                        </div>
                        <input type="text" name="uid" placeholder="Username/Email..." class="form-control ">
                    </div>
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                        </div>
                        <input type="password" name="pws" placeholder="Password..." class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-danger btn-block " type="submit" name="submit">Login </button>
                    </div>
                </form>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p class='text=light'>Fill in all fields!</p>";
                    }
                    if ($_GET["error"] == "wronglogin") {
                        echo "<p class='text=light'>Invalid login!</p>";
                    }
                }
                ?>
            </div>

        </div>
    </div>
</div>



<?php
include 'footer.php';
?>