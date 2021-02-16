<?php
    require 'reg/connectBD.php';

    $product_id = $_GET['edid'];
    $product = "SELECT * FROM `usersform` WHERE `id` = '$product_id'";
    $query = $pdo->prepare($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $website_title = 'Edit my PHP'; require 'blocks/head.php'; ?>
</head>
<body>
<?php require 'blocks/header.php'?>
<div class="row">
        <div class="col-md-8 mb-3">
            <h4>Форма виправлення</h4>
            <form id="form_1" action="myEditCon.php" method="post">
            <input type="hidden" name="id" value="<? $product['edid'] ?>">
                <label for="username">First Name</label>
                <input type="text" name="username" id="username" class="form-control">

                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" class="form-control">

                <label for="role">Role</label>
                <div class="new-select-style-wpandyou">
                <select name="role" id="role" class="form-control">
                    <option>Admin</option>
                    <option>Employee </option>
                    <option>Member</option>
                    <option>Customer</option>  
                </select>
                </div>
                
                <label for="state" class="switch-block">
                <div class="switch-btn mt-1">
                </div>
                <select name="state" id="state">
                <option class="state mt-2 ml-2" id="click-text" style="font-weight: bold"></option>
                </select>
                </label>

                <div class="alert alert-danger mt-2" id="errorBlock"></div>
                <div class="button_elem">
                <button id="reg_user" type="button" class="btn btn-success mt-4">
                    Зареєструватись
                </button>
                <p class="btn-success ml-3 mt-4" id="reg_user_inf"></p>
                </div>
            </form>
           
        </div>
    </div>
    <script src="script\scripts.js"></script>
    
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    $('#reg_user').click(function() {
        let name = $('#username').val();
        let lastname = $('#lastName').val();
        let role = $('#role').val();
        let state = $('#state').val();

        $.ajax({
            url: 'reg/myEditCon.php',
            type: 'POST',
            cache: false,
            data: {'username' : name, 'lastName' : lastname, 'role' : role, 'state' : state},
            dataType: 'html',
            success: function(data) 
            {
                if(data == 'Готово')
                {
                    $('#reg_user_inf').text('Усе готово');
                    $('#errorBlock').hide();
                }
                else{
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                }  
            }
        });
    });
</script>
</html>