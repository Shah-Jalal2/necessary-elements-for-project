<!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">



<!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>




<table class="table table-bordered table-striped table-responsive-sm mydatatable">      <!-- dt resposinve is from datatable-->

                        <thead>

                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>User</th>
                            <th>Picture</th>
                            <th>Profile</th>
                            <th>Status</th>
                            <th>Last Login</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php

                        include "connection.php";

                        $query = "SELECT * FROM users";
                        $result = mysqli_query($conn, $query);


                        while ($row = mysqli_fetch_assoc($result)){
                            ?>

                            <tr>
                                <td>1</td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['user'] ?></td>
                                <td><img src="<?= $row['picture'] ?>" alt="" style="width: 50px; height: 50px;"></td>
                                <td><?= $row['profile'] ?></td>
                                <td><button class="btn btn-success btn-xs">Activated</button></td>
                                <td><?= $row['last_login'] ?></td>
                                <td>

                                    <div class="btn-group">

                                        <button class="btn btn-warning"><i class="fa fa-pen"></i></button>

                                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>


                                    </div>

                                </td>
                            </tr>

                            <?php
                        }

                        ?>


                        </tbody>

                    </table>








$('.mydatatable').DataTable();