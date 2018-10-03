<div class="row">
    <div class="col-lg-12">
    	<div class="element-wrapper">
            <?php
                if($buttonview)
                {
                    $href = ($addNewAsLink) ? "href='".base_url($formUrl)."'" : '';
                    ?>
                    <span class="pull-right">
                        <a <?php echo $href;?> class="btn btn-primary text-white" onclick="addNewPop('<?php echo $formUrl;?>');">+ New</a>
                    </span>
                    <?php
                }

                if($printview)
                {
                    $href = ($printUrl) ? "href='".base_url($printUrl)."'" : '';
                    ?>
                    <span class="pull-right">
                        <a <?php echo $href;?> class="btn btn-primary text-white" target="_blank">Print Order Form</a>
                    </span>
                    <?php
                }
            ?>
    		<h6 class="element-header"><?php echo $form_heading;?></h6>
			<?php
			if($this->session->flashdata('msg') != '')
			{
				?>
					<div class="alert alert-<?php echo $this->session->flashdata('alertType');?>" id="alert-message">
					    <?php echo $this->session->flashdata('msg'); ?>
					</div>
				<?php
			}
            if($search_view != '')
            {
                ?>
                    <div class="element-box alert alert-info">
                        <h5 class="form-header"><?php echo $form_title;?></h5>
                        <div class="form-desc"><?php echo $form_description;?></div>
                        <?php echo $search_view;?>
                    </div>  
                <?php
            }
			// Form View
			if($form_view != '')
			{
				?>
		            <div class="element-box">
		            	<h5 class="form-header"><?php echo $form_title;?>  </h5>
		                <div class="form-desc"><?php echo $form_description;?></div>
						<?php echo $form_view;?>
		            </div>	
				<?php
			}

			// List View
			if($list_view)
			{
				?>
					<div class="element-box">
					    <div class="row">
					        <div class="col-sm-9">
					        	<h5 class="form-header"><?php echo $list_title;?></h5>
					        </div>
					    </div>
					    <div class="form-desc"><?php echo $list_description;?></div>
						<?php echo $this->table->generate();?>
					</div>    	
				<?php
			}
			?>

		</div>
    </div>
</div>
<!-- MODAL WINDOW Add New content-->
<div class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<button type="button" class="close btn btn-danger" data-dismiss="modal">&times;</button>   
            	<h4 class="modal-title"><?php echo $form_title;?></h4>
            	<div class="modal-desc"><?php echo $form_description;?></div>
            </div>
            <div class="modal-body">
            </div>
            <!--
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            -->
        </div>
    </div>
</div>
<script type="text/javascript">
    function Print() 
    {
        w=window.open();
        w.document.write($('#report_left_inner').html());
        w.print();
        w.close();
    }
</script>
<?php
if($autoPopup)
{
    ?>
        <script type="text/javascript">
            $(document).ready(function(){
                addNewPop('<?php echo $formUrl;?>');
            });
        </script>
    <?php
}
?>
