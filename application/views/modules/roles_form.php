<?php
//Variable Initialize
$role_id          = "";
$role_name        = "";
$category_id      = array();
$action_id        = array();

/*
    --Check form load for edit operation
    --If yes get the data from table and assign values to variables
*/
if(!empty($appRoleData))
{
    // Role table Data
    foreach($appRoleData as $row)
    { 
        $role_id          = $row->role_id;
        $role_name        = $row->role_name;
    }

    //Role actions table data set as array
    foreach ($appRoleActionData as $row) 
    {
        $category_id[]    = $row->category_id;
        $action_id[]      = $row->action_id;
    }
}
else
{
    $role_id          = $this->input->post('role_id');
    $role_name        = $this->input->post('role_name');
    $category_id      = $this->input->post('category_id[]');
    $action_id        = $this->input->post('action_id[]');
}

$rolesActionsArr = array();  
foreach ($actionData as $row) 
{
    $rolesActionsArr[$row->category_id][$row->action_id] = $row->action_code;  
}
?>
<?php 
    if($role_id)
    {
        ?>
        <!--Heading,title,description for form-->
        <div class="row">
            <div class="col-lg-12">
                <div class="element-wrapper">
                    <h6 class="element-header"><?php echo $this->lang->line('role_form_title');?></h6>
                    <div class="element-box">
                        <h5 class="form-header"></h5>
                        <div class="form-desc"><?php echo $this->lang->line('role_form_description');?></div>
                        <!-- Success/Error message print here-->
                        <?php
                        if(isset($message))
                        {
                            ?>
                            <div class="alert alert-<?php echo $alertType;?>">
                                <?php echo $message; ?>
                            </div>
                            <?php
                        }
                        ?>
                        <!-- Start form -->
                        <form action="<?php echo base_url($ActionUrl);?>" method="post">
                            <input type="hidden" name="role_id" id="role_id" value="<?php echo $role_id;?>">
                            <!--Role name with textbox -->
                            <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for=""><?php echo $this->lang->line('label_role_name');?></label>
                                      <span class="mandatory">*</span>
                                        <input type="text" name="role_name" id="role_name" value="<?php echo $role_name;?>" class="form-control" />
                                          <span class="help-block"><?php echo form_error('role_name')?></span>
                                  </div>
                              </div>
                            </div>
                            <!--Category based actions checkbox view -->
                            <?php
                            foreach ($categoryData as $row) 
                            {
                                ?>
                                <div class="form-group">
                                    <h5> <?php echo ucwords($row->category_code);?>
                                        <label class="form-check-label col-md-3"><small>
                                            <input type="checkbox" id="checkall<?php echo $row->category_id;?>" onclick="checkAllMenu('<?php echo $row->category_id;?>')" /> Check All</small>
                                        </label> 
                                    </h5>
                                    <hr/>                
                                    <div class="form-check">
                                        <?php
                                        foreach ($rolesActionsArr[$row->category_id] as $actionID => $actionCode) 
                                        {
                                            ?>
                                                <label class="form-check-label col-md-3">
                                                    <input type="checkbox" name="action_id[<?php echo $actionID;?>]" value="<?php echo $actionID;?>" class="checkbox<?php echo $row->category_id;?>" onclick="checkMenu('<?php echo $actionID; ?>');"  <?php echo (in_array($actionID, $action_id)) ? 'checked' : '';?>> <?php echo ucwords(str_replace('_', ' ', $actionCode));?>
                                                </label>
                                                <input type="hidden" name="category_id[<?php echo $actionID;?>]" value="<?php echo $row->category_id;?>"
                                                >
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <hr> 
                                    
                            <!--Buttons for sumbit and reset-->
                            <div class="form-buttons-w text-right">
                                <a href="<?php echo base_url();?>modules/roles/add" class="btn btn-danger"><?php echo $this->lang->line('label_cancel');?></a>
                                <button class="btn btn-success" type="submit" name="submit"><?php echo $this->lang->line('label_submit');?></button>
                            </div>                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End form -->
        <!-- Start List -->
        <?php
    }
?>
<?php
if(isset($listData))
{
?>
    <div class="row">
        <div class="col-lg-12">
            <div class="element-wrapper">
                <h6 class="element-header"><?php echo $this->lang->line('role_list_title');?></h6>
                <div class="element-box">
                    <?php
                    if(isset($message))
                    {
                        ?>
                        <div class="alert alert-<?php echo $alertType;?>">
                            <?php echo $message; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="dataTableId" border="1" cellpadding="2" cellspacing="1" class="mytable table table-bordered">
                                <thead>
                                    <tr>
                                        <th><?php echo lang('label_role_name');?></th> 
                                        <th><?php echo lang('label_action');?></th>
                                    </tr> 
                                    <tbody></tbody>                           
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<!-- End List -->
<script type="text/javascript">
function checkAllMenu(category_id) 
{
   if($('#checkall'+category_id).is(':checked'))
   {
        $('.checkbox'+category_id).prop("checked", true);
   }
   else
   {
        $('.checkbox'+category_id).prop("checked", false);
   }
}
</script>



    
                

