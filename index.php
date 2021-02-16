
<!DOCTYPE html>
<html lang="ua">
<head>
 <?php
    $website_title = 'PHP Таблиця'; require 'blocks/head.php'; ?>
</head>
<body>
    
    <?php require 'blocks/header.php'?>

<main class="container mt-5">

    <div class="row">
        <div class="col-md-12">
        <?php require 'blocks/table.php'?>
        </div>
    </div>
    <?php require 'blocks/regForm.php'?>
</main> 
    <?php require 'blocks/footer.php'?>
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
            url: 'reg/reg.php',
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
<script>
$('#submit').click(function(){
   $.ajax({ 
         type: 'post',
         url: 'blocks/regForm.php',
         data: $('#form_1').serialize(),
         success: function(response) {
            $('#myTrRemove').html(response);
         }
   });
});
</script>
</html>
