<div class="container">
    <div class="row">
        <div class="col s12 l12">
            <h2 class="header center">Registration</h2>
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content">
                        <form action="?page=register" method="post">
                            <div class="row">
                                    <input id="user_email" type="text" name="email"
                                    value="<?=isset($email)?filter_var($email,FILTER_SANITIZE_EMAIL):''?>"
                                    >
                                    <label for="user_email">Email*</label>
                                    <input id="user_name" type="text" name="name"
                                    value="<?=isset($name)?filter_var($name,FILTER_SANITIZE_STRING):''?>"
                                    >
                                    <label for="user_name">Username*</label>
                                    <input id="user_pass" type="password" name="password">
                                    <label for="user_pass">Password*</label>
                                    <input id="firm_name" type="text" name="firm"
                                    value="<?=isset($firm)?filter_var($firm,FILTER_SANITIZE_STRING):''?>"
                                    >
                                    <label for="firm_name">Firm*</label>
                                    <input id="firm_city" type="text" name="city"
                                    value="<?=isset($city)?filter_var($city,FILTER_SANITIZE_STRING):''?>"
                                    >
                                    <label for="firm_city">City*</label>
                                    <input id="firm_district" type="text" name="district"
                                    value="<?=isset($district)?filter_var($district,FILTER_SANITIZE_STRING):''?>"
                                    >
                                    <label for="firm_district">District*</label>
                                    <input id="firm_address" type="text" name="address"
                                    value="<?=isset($address)?filter_var($address,FILTER_SANITIZE_STRING):''?>"
                                    >
                                    <label for="firm_address">Address*</label>
                                    <div class="input-field col s11 offset-s1 center">
                                    <button type="submit" class="submit-btn waves-effect waves-light btn-large">Register</button>
                                    </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>