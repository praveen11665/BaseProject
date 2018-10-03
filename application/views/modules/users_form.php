<?php
 $user_id          = "";
 $user_profile_id  = "";
 $first_name       = "";
 $last_name        = "";
 $username         = "";
 $email            = "";
 $passwd           = "";
 $phone_number     = "";
 $role_id          = "";
 $confirm_password = "";
 
if(!empty($tabledata))
{
    foreach ($tabledata as $row) 
    {
        $user_id         = $row->user_id;
        $username        = $row->username;
        $email           = $row->email;
        $passwd          = $row->passwd;
        $role_id         = $row->auth_level;
        
    }
    foreach($userProfileData as $row)
    {          
        $user_profile_id = $row->user_profile_id;
        $first_name      = $row->first_name;
        $last_name       = $row->last_name;
    }
    foreach ($userPhoneData as $row) 
    {
        $phone_number    = $row->phone_number;      
    }    
}
else
{
    $user_id            = $this->input->post('user_id');
    $user_profile_id    = $this->input->post('user_profile_id');
    $first_name         = $this->input->post('first_name');
    $last_name          = $this->input->post('last_name');
    $username           = $this->input->post('username');     
    $email              = $this->input->post('email');
    $passwd             = $this->input->post('passwd');
    $phone_number       = $this->input->post('phone_number');
    $role_id            = $this->input->post('role_id');
    $confirm_password   = $this->input->post('confirm_password');
}

$readonly   = ($user_id) ? 'readonly' : '';
$mandatory  = ($user_id) ? '' : '<span class="mandatory">*</span>';
 $ci =&get_instance();
$selectRoleDropdown   =  $ci->mcommon->Dropdown('app_roles', array('role_id as Key', 'role_name as Value'));
?>
<form action="javascript:" data-action="<?php echo base_url($ActionUrl);?>" method="post" id="ajaxModelForm">
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>">                          
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo $this->lang->line('label_first_name');?></label><span class="mandatory">*</span>
                <input type="text" name="first_name" id="first_name" value="<?php echo $first_name;?>" class="form-control" />
                <span class="help-block"><?php echo form_error('first_name')?></span>
            </div>                            
        </div>       
   
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo $this->lang->line('label_last_name');?></label><span class="mandatory">*</span>
                <input type="text" name="last_name" id="last_name" value="<?php echo $last_name;?>" class="form-control" />
                <span class="help-block"><?php echo form_error('last_name')?></span>
            </div>  
        </div>
    </div>                        
        
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo $this->lang->line('label_email_address');?></label><span class="mandatory">*</span>
                <input type="text" name="email" id="email" value="<?php echo $email;?>" class="form-control" <?php echo $readonly;?> />
                <span class="help-block"><?php echo form_error('email')?></span>
            </div>  
        </div>

         <div class="col-md-6">
            <div class="form-group">
                <label><?php echo $this->lang->line('label_mobile_number');?></label><span class="mandatory">*</span>
                <input type="text" name="phone_number" id="phone_number" value="<?php echo $phone_number;?>" class="form-control" onkeypress="return isNumberKey(event)" maxlength="10"/>
                <span class="help-block"><?php echo form_error('phone_number')?></span>
            </div>  
        </div>            
    </div>
    <h5 class="form-header"><?php echo $this->lang->line('create_user_form_sub_title');?></h5>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo $this->lang->line('label_username');?></label><span class="mandatory">*</span>
                <input type="text" name="username" id="username" value="<?php echo $username;?>" class="form-control" <?php echo $readonly;?> />
                <span class="help-block"><?php echo form_error('username')?></span>
            </div>  
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for=""><?php echo $this->lang->line('label_select_role');?></label><span class="mandatory">*</span>
                <?php 
                    $attrib = 'class="form-control select2" id="transaction_id"';
                    echo form_dropdown('role_id', $selectRoleDropdown, set_value('role_id', (isset($role_id)) ? $role_id : ''), $attrib);
                    if(form_error('role_id')){ echo '<span class="help-block">'.form_error('role_id').'</span>';} 
                    ?> 
            </div>
        </div>      
    </div> 
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo $this->lang->line('label_password');?></label><?php echo $mandatory;?>
                <input type="password" name="passwd" id="passwd" class="form-control" />
                <span class="help-block"><?php echo form_error('passwd')?></span>
            </div>  
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label><?php echo $this->lang->line('label_confirm_password');?></label><?php echo $mandatory;?>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control" />
                <span class="help-block"><?php echo form_error('confirm_password')?></span>
            </div>  
        </div> 
    </div>
    <hr> 
    <div class="form-buttons-w" style="float: right">
        <a href="<?php echo base_url('modules/users'); ?>" class="btn btn-danger"><?php echo $this->lang->line('label_cancel');?></a>
        <button class="btn btn-success" type="submit" name="submit"><?php echo $this->lang->line('label_submit');?></button>
    </div>
</form>

<script type="text/javascript">

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if ((charCode < 48 || charCode > 57))
        return false;

    return true;
}

function checkAllMenu() 
{
   if($('#checkall').is(':checked'))
   {
        $('.checkbox').prop("checked", true);
   }
   else
   {
        $('.checkbox').prop("checked", false);
   }
}
</script>
 
<?php
require_once(APPPATH."views/base/common_js.php");
?>           



    
