<?php
include 'header.php';

?>


<div id="">
    <div class="d-flex flex-column  justify-content-center align-items-center ">
        <div class="card p-4 text-light bg-dark mb-5 border border-danger">
            <div class="card-header">
                <h3>Sign Up</h3>
            </div>
            <div class="card-body w-100">
                <form action="includes/signup.inc.php" method="post">
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                        </div>
                        <input type="text" name="name" placeholder="Full name...">
                    </div>
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                        </div>
                        <input type="text" name="email" placeholder="Email...">
                    </div>
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                        </div>
                        <input type="text" name="uid" placeholder="Username...">
                    </div>
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                        </div>
                        <input type="password" name="pwd" placeholder="Password...">
                    </div>
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                        </div>
                        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" name="submit" class=" btn bg-secondary float-end text-white w-100">Sign Up </button>
                    </div>
                </form>
            </div>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p class='text=light'>Fill in all fields!</p>";
                }
                if ($_GET["error"] == "invaliduid") {
                    echo "<p class='text=light'>Choose a proper username!.</p>";
                }
                if ($_GET["error"] == "invalidemail") {
                    echo "<p class='text=light'>Invalid email address.</p>";
                }
                if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p class='text=light'>You entered two different passwords.</p>";
                }
                if ($_GET["error"] == "usernametaken") {
                    echo "<p class='text=light'>Sorry, this username is already taken.</p>";
                }
                if ($_GET["error"] == "stmtfailed") {
                    echo "<p class='text=light'>Something went wrong, try again later.</p>";
                }
                if ($_GET["error"] == "none") {
                    echo "<p class='text=light'>We signed you up. Welcome!</p>";
                }
            }
            ?>
        </div>
    </div>
</div>








<?php
include 'footer.php';
?>