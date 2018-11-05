<?php
    session_start();
?>
<div class="container">
    <div class="row w-25 m-auto">
        <div class="col pt-3">
            <h2 class="text-center">Profile</h2>
            <hr>
            <form>
                <div class="form-group">
                    <label for="inputId">ID</label>
                    <input type="text" name="id" id="inputId" class="form-control" value="<?php echo $_SESSION['id']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputUser">Username</label>
                    <input type="text" name="user" id="inputUser" class="form-control" value="<?php echo $_SESSION['user']; ?>" readonly>
                </div>
                <center><a href="index.php?halaman=EditProfile"><input type="button" class="btn btn-primary" value="Edit Password"></a></center>
            </form>
        </div>
    </div>
</div>