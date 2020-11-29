<!-- Modal -->
<!-- Modal -->
<div id="modalAddUser" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <!--            <form  method="post" action="" enctype="multipart/form-data"></form>-->

            <!--====================================================================================================-->
            <!--                                        Modal Header            -->
            <!--==================================================================================================== -->

            <div class="modal-header" style="background: #3c8dbc; color: white;">

                <h4 class="modal-title">Add User</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!--====================================================================================================-->
            <!--                                        Modal Body          -->
            <!--==================================================================================================== -->

            <div class="modal-body">

                <div class="box-body">

                    <form action="" method="post" enctype="multipart/form-data">


                        <!--                    ENTRY FOR NAME-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control input-lg" name="newName" placeholder="New Name" required>
                            </div>

                        </div>

                        <!--                    ENTRY FOR USER-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="text" class="form-control input-lg" name="newUser" placeholder="New User" required>
                            </div>

                        </div>

                        <!--                    ENTRY FOR PASSWORD-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control input-lg" name="newPassword" placeholder="New Password" required>
                            </div>

                        </div>

                        <!--                    ENTRY FOR SELECT PROFILE-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-users"></i></span>
                                </div>
                                <select class="form-control input-lg" name="newProfile">

                                    <option value="">Select Profile</option>
                                    <option value="Adminastrator">Adminastrator</option>
                                    <option value="Special">Special</option>
                                    <option value="Seller">Seller</option>

                                </select>
                            </div>

                        </div>

                        <!--                    ENTRY FOR PICTURE-->

                        <div class="form-group">

                            <div class="panel">Upload Picture</div>

                            <input type="file" class="newPicture" name="newPicture">

                            <p class="help-block">Maximum picture size 200MB </p>

                            <img src="dist/img/user/avatar.png" class="img-thumbnail preview" width="100px">

                        </div>




                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="saveUser">Save User</button>
                        </div>

                    </form>
                </div>

            </div>



        </div>
    </div>
</div>





<!--====================================================================================================-->
<!--                                        Modal Add User End             -->
<!--==================================================================================================== -->