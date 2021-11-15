<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/css/fontawesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <!-- For Input -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row pt-5">
                        <h1 class="display-5 todo-title">To Do List</h1>
                        <br>
                        <!-- Form for dice rolls -->
                        <form action="" method="POST">
                            <input class="form-control form-control-lg todo-form" type="text" placeholder="Add Your To Do ..." width: 80% >
                            <br>
                            <button class="btn btn-primary btn-add" type="submit" name="submit" width: 20%><i class="fas fa-plus"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- For Input Ends-->

            <!-- Table Starts -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="data-table">
                        <h4 class="display-6 todo-title">All To-Do List</h4>
                        <br>
                        <table class="table table-striped table-hover">
                            <tr class="table-bg-bk">
                                <th style="width: 10%;">SL</th>
                                <th style="width: 55%;">To Do's</th>
                                <th style="width: 20%;">Date</th>
                                <th style="width: 15%;">Edit/Delete</th>
                            </tr>
                            <tr>
                                <td class="table-text-center">1</td>
                                <td>This is the first To Do</td>
                                <td>01-DEC-2021</td>
                                <td class="table-text-center icon"><i class="far fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td class="table-text-center">1</td>
                                <td>This is the first To Do</td>
                                <td>01-DEC-2021</td>
                                <td class="table-text-center icon"><i class="far fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td class="table-text-center">1</td>
                                <td>This is the first To Do</td>
                                <td>01-DEC-2021</td>
                                <td class="table-text-center icon"><i class="far fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td class="table-text-center">1</td>
                                <td>This is the first To Do</td>
                                <td>01-DEC-2021</td>
                                <td class="table-text-center icon"><i class="far fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td class="table-text-center">1</td>
                                <td>This is the first To Do</td>
                                <td>01-DEC-2021</td>
                                <td class="table-text-center icon"><i class="far fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td class="table-text-center">1</td>
                                <td>This is the first To Do</td>
                                <td>01-DEC-2021</td>
                                <td class="table-text-center icon"><i class="far fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td class="table-text-center">1</td>
                                <td>This is the first To Do</td>
                                <td>01-DEC-2021</td>
                                <td class="table-text-center icon"><i class="far fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td class="table-text-center">1</td>
                                <td>This is the first To Do</td>
                                <td>01-DEC-2021</td>
                                <td class="table-text-center icon"><i class="far fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td class="table-text-center">1</td>
                                <td>This is the first To Do</td>
                                <td>01-DEC-2021</td>
                                <td class="table-text-center icon"><i class="far fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td class="table-text-center">1</td>
                                <td>This is the first To Do</td>
                                <td>01-DEC-2021</td>
                                <td class="table-text-center icon"><i class="far fa-edit"></i>&nbsp; &nbsp;<i class="far fa-trash-alt"></i></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <!-- Table Starts -->
        </div> 
    </div>
    <?php
    //Code starts from here
    ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="icons/js/all.min.js"></script>
</body>
</html>