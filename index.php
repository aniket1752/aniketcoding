<!DOCTYPE html>
<html lang="en">
<?php
// require('insert.php')
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>    
    <title>Document</title>
</head>

<body>
    <div class="col-sm-5">
        <form action="" class="col-sm-5" id="myform" >
           
            <input type="text" name="" class="form-control" id="nameid" placeholder="Name" name="name"> <br>
            <input type="text" name="" class="form-control" id="emailid" placeholder="Email" name="email"> <br>
            <input type="text" name="" class="form-control" id="mobid" placeholder="Mob " name="mob"> <br>
            <button type="submit" id="btnadd" onclick="addem()" class="btn btn-primary" onclick="addem">Submit</button>
        </form>

    </div>
    <div class="col-sm-7 text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="tbody"></tbody>
        </table>
    </div>
</body>
<script src="ajaxscript.js"></script>
</html>
<?php

 print phpversion();
?>