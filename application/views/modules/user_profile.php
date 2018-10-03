<?php
$CI =& get_instance();
$countryDropdown  =  $CI->mcommon->Dropdown('country', array('country_id as Key', 'country_name as Value'));

$user_id            =   $this->auth_user_id;
$Where_array        =   array('user_id'=> $user_id);
$UserData           =   $this->mcommon->records_all('users', $Where_array);
$UserprofileData    =   $this->mcommon->records_all('user_profile', $Where_array);
$UseraddressData    =   $this->mcommon->records_all('user_address', $Where_array);
$UserphoneData      =   $this->mcommon->records_all('user_phone', $Where_array);

foreach ($UserData as $row) 
{
    $user_id    =   $row->user_id;
    $username   =   $row->username;
    $email      =   $row->email;
}
foreach ($UserprofileData as $row) 
{
    $first_name     =   $row->first_name;
    $last_name      =   $row->last_name;
}
foreach ($UseraddressData as $row) 
{
    $address_line_1    =   $row->address_line_1;
    $address_line_2    =   $row->address_line_2;
    $city              =   $row->city;
    $state             =   $row->state;
    $country_id        =   $row->country_id;
    $pincode           =   $row->pincode;
}

foreach ($UserphoneData as $row) 
{
    $phone_number     =   $row->phone_number;
}

?>
<form action="<?php echo base_url($ActionUrl);?>" method="post" >
    <input type="hidden" name="user_id"  id="user_id" value="<?php echo $user_id;?>">
    <div class="row">
        <div class="col-lg-12">
            <div class="element-wrapper">
                <h6 class="element-header">User Details</h6><br>
                    <div class="alert alert-<?php echo $this->session->flashdata('alertType');?>" id="alert-message">
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                    <div class="element-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label><span class="mandatory">*</span>         
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $first_name;?>">
                                    <span class="help-block"><?php echo form_error('first_name')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Last Name</label><span class="mandatory">*</span>         
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $last_name;?>">
                                    <span class="help-block"><?php echo form_error('last_name')?></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>     
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email;?>" readonly>
                                    <span class="help-block"><?php echo form_error('email')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Mobile</label><span class="mandatory">*</span>         
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $phone_number;?>"  onkeypress="return isNumberKey(event)" maxlength="10">
                                    <span class="help-block"><?php echo form_error('phone_number')?></span>
                                </div>
                            </div>
                        </div>
                        <h3>Address Details</h3><hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Address Line 1</label><span class="mandatory">*</span>
                                    <textarea class="form-control" id="address_line_1" name="address_line_1" rows="3" cols="200"><?php echo $address_line_1;?></textarea> 
                                    <span class="help-block"><?php echo form_error('address_line_1')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Address Line 2</label><span class="mandatory">*</span>
                                    <textarea class="form-control" id="address_line_2" name="address_line_2" rows="3" cols="200"><?php echo $address_line_2;?></textarea> 
                                    <span class="help-block"><?php echo form_error('address_line_2')?></span>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>City</label><span class="mandatory">*</span>
                                    <input type="text" name="city" id="city" class="form-control" value="<?php echo $city;?>" />
                                    <span class="help-block"><?php echo form_error('city')?></span>
                                </div>  
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>State</label><span class="mandatory">*</span>
                                    <input type="text" name="state" id="state" class="form-control" value="<?php echo $state;?>"/>
                                    <span class="help-block"><?php echo form_error('state')?></span>
                                </div>  
                            </div> 
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Country</label><span class="mandatory">*</span>
                                    <?php 
                                        $attrib = 'class="form-control select2" id="country_id" ';
                                        echo form_dropdown('country_id', $countryDropdown, set_value('country_id', (isset($country_id)) ? $country_id : ''), $attrib);
                                        if(form_error('country_id')){ echo '<span class="help-block">'.form_error('country_id').'</span>';}
                                    ?>
                                </div>  
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pincode</label><span class="mandatory">*</span>
                                    <input type="text" name="pincode" id="pincode" class="form-control" value="<?php echo $pincode;?>" onkeypress="return isNumberKey(event)" maxlength="6"/>
                                    <span class="help-block"><?php echo form_error('pincode')?></span>
                                </div>  
                            </div> 
                        </div> 
                        <h3>Login Details</h3><hr> 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $username;?>" readonly/>
                                    <span class="help-block"><?php echo form_error('username')?></span>
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="passwd" id="passwd" class="form-control" />
                                    <span class="help-block"><?php echo form_error('passwd')?></span>
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" />
                                    <span class="help-block"><?php echo form_error('confirm_password')?></span>
                                </div>  
                            </div> 
                        </div>   
                        <hr>
                        <!--Submit/Cancel Buttons-->
                        <div class="form-buttons-w text-right">
                            <button class="btn btn-success" type="submit" name="submit"> Submit</button>
                            <a href="" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>    
</form>
<script type="text/javascript">

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if ((charCode < 48 || charCode > 57))
        return false;

    return true;
}
</script>

