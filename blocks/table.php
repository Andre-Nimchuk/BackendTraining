<?php 
        require 'reg/connectBD.php';

        if (isset($_GET['del'])) {
            $id = ($_GET['del']);
            
            $sqly = "DELETE FROM `usersform` WHERE id=$id";
            $query = $pdo->query($sqly);
        }

        $sqly = 'SELECT * FROM `usersform`';
        $query = $pdo->query($sqly);
    ?>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<hr>
<div class="top_table">
<a class="btn btn-outline-primary ml-3 mr-3 mb-2" href="#">Add</a>
    <div class="new-select-style-wpandyou">
        <select class="btn btn-outline-primary" name="roles" id="roles">
            <option>Please select</option>
            <option>Set active</option>
            <option>Set not active</option>
            <option>Delete</option>  
        </select>
    </div>
</div>
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th><span>Check</span></th>
                                <th><span>User</span></th>
                                <th><span>Role</span></th>
                                <th class="text-center"><span>Status</span></th>
                                <th><span>Options</span></th>
                                <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="k1" class="chk-all custom-control-input" id="cst0" />
                                            <label class="custom-control-label" for="cst0">&nbsp;</label> 
                                            <p class="check_text">Check All</p> 
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    while($row = $query->fetch(PDO::FETCH_OBJ)) { ?>
                                            <tr id="myTrRemove">
                                                <td class="pl-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="k1" class="custom-control-input" id="<?php echo"$row->id"?>" />
                                                        <label class="custom-control-label" for="<?php echo"$row->id"?>">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                                    <a href="#" class="user-link mt-2"><?php echo"$row->name $row->last" ?></a>
                                                </td>
                                                <td style="vertical-align: middle;"><?php echo"$row->role" ?></td>
                                                <td style="vertical-align: middle;" class="text-center">
                                                <?php 
                                                    $str=$row->state;
                                                    ($str=="Active") ? print '<i class="fa fa-circle text-success"></i>' : print '<i class="fa fa-circle text-secondary"></i>'; 
                                                ?>
                                                </td>
                                                <td style="width: 20%; vertical-align: middle;">
                                                    <a href="edit.php?edid=<?echo "$row->id"?>" class="table-link text-info">
                                                        <span class="fa-stack">
                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>
                                                    <a class="table-link danger" onclick="deleteme(<?echo "$row->id"?>)">
                                                        <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>
                                                    <script>
                                                    function deleteme(delid) {
                                                        if (confirm("You want delete this user?")) {
                                                            window.location.href="index.php?del=<?echo "$row->id"?>";
                                                            return alert("unfortunately the user has been removed from our community :(");
                                                        } else {
                                                            alert("Perfectly this user will stay with us :)");
                                                        }
                                                    }
                                                    </script>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="top_table">
    <a class="btn btn-outline-primary mr-3 mb-2" style="text-align: right;" href="#">OK</a>
<div/>