<?php
    include("koneksi.php");

    $id = $_GET['id']; //mengambil id user yang ingin diubah

    //menampilkan user berdasarkan id
    $data = mysqli_query($koneksi, "select * from user where id = '$id'");
    $row = mysqli_fetch_assoc($data);
?>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="update_user.php">
                    <input type="hidden" value=<?= $row['id'] ?> name="id" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" value=<?php echo $row['username']?> name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Role</label>
                        <select class="custom-select" name="role">
                            <option >Pilih Salah Satu</option>
                            <option <?= $row['role'] == "Super Admin" ?  "selected" : '' ?> value="Super Admin">Super Admin</option>
                            <option <?= $row['role'] == "Admin" ? "selected" : '' ?> value="Admin">Admin</option>
                            <option <?= $row['role'] == "User" ?  "selected" : '' ?> value="User">User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>