<div class="row">
        <div class="col-md-8 mb-3">
            <h4>Форма реєстрації</h4>
            <form id="form_1" action="" method="post">
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