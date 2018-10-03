<script type="text/javascript">
//var i = 1;
  $(document).ready(function ()
  {
      // Select2
      $('.select2').select2();

      //Date picker
      $('.single-daterange').daterangepicker({
        singleDatePicker: true,
        //showDropdowns: true
        locale: {
                  //format: 'YYYY-MM-DD'
                  format: 'DD-MM-YYYY'
                }
      });
      
      // Toggle Menu
      $('legend').click(function() {
          var $this = $(this);
          var parent = $this.parent();
          var contents = parent.contents().not(this);
          if (contents.length > 0) {
              $this.data("contents", contents.remove());
          } else {
              $this.data("contents").appendTo(parent);
          }
          return false;
      });

      <?php
      if($dataTableUrl)
      {
        ?>
          var oTable = $('#dataTableId').dataTable
              ({
                "sScrollX"        : "100%", 
                "sScrollXInner"   : "100%",
                "bProcessing"     : true,
                responsive        : true,
                "sAjaxSource"     : '<?php echo base_url(); ?>index.php/<?php echo $dataTableUrl;?>',
                "bJQueryUI"       : true,
                "ordering"        : false,
                "sPaginationType" : "full_numbers",
                "iDisplayStart "  :20,
                    "oLanguage"   : {
                "sProcessing"     : "<img src='<?php echo base_url(); ?>global/assets/ajax-loader_dark.gif'>"

              },
                "fnInitComplete": function()
                 {
                    //oTable.fnAdjustColumnSizing();
                 },
                'fnServerData': function(sSource, aoData, fnCallback)
                {
                  $.ajax
                  ({
                    'dataType': 'json',
                    'type'    : 'POST',
                    'url'     : sSource,
                    'data'    : aoData,
                    'success' : fnCallback
                  });
                }
          });
        <?php 
      }
      ?>

      //Table to Datatable Convertion
      var oTable = $('#dataTableView').dataTable
      ({
        //"dom"             : 'lBfrtip',
        //"buttons"         : [ 'copy','excel'],
        "sScrollX"        : "100%",
        "sScrollY"        : "500px",            
        "sScrollXInner"   : "100%",
        "bScrollCollapse" :  true,
        "paging"          : true,              
        "bProcessing"     : true,
        responsive        : true,
        "bJQueryUI"       : true,
        "sPaginationType" : "full_numbers",
        "iDisplayStart "  :20,
      });

      // When the form is submitted
      $("#ajaxModelForm").submit(function()
      { 
        // 'this' refers to the current submitted form 
        var str       = $(this).serialize();
        var actionUrl = $(this).data('action');
        var model_no1  = $(this).data('model_no');
        (typeof model_no1 == 'undefined') ? (model_no='1') : (model_no = model_no1);
        console.log(model_no);
        $.ajax({
        type: "POST",
        url: actionUrl, 
        data: {postdata: str},
        dataType:"html",
          success: function(html1)
          {
            try 
            {
              var parsedJson = JSON.parse(html1);
              if(parsedJson.result == 'success')
              {
                var parsedJson = JSON.parse(html1);
                $('.modal').modal('hide');
                if(parsedJson.URL==null)
                {
                  location.reload();
                }
                else
                {
                  window.location.href = '<?php echo base_url();?>'+parsedJson.URL;
                }
              }       
            } 
            catch(e) 
            {
              $(".modal-body").html(html1); // msg in modal body
              $(".modal").modal("show"); // show modal instead alert box
            }
          },
        });
      }); // end submit event s


      $("#ajaxModelFormWithFile").submit(function()
      { 
        // 'this' refers to the current submitted form 
        //var str       = $(this).serialize();
        var actionUrl = $(this).data('action');
        $.ajax({
        type: "POST",
        url: actionUrl, 
        data: new FormData( this ),
        processData: false,
        contentType: false, 
          success: function(html1)
          {
            try 
            {
              var parsedJson = JSON.parse(html1);
              if(parsedJson.result == 'success')
              {
                var parsedJson = JSON.parse(html1);
                $('.modal').modal('hide');
                if(parsedJson.URL==null)
                {
                  location.reload();
                }
                else
                {
                  window.location.href = '<?php echo base_url();?>'+parsedJson.URL;
                }
              }       
            } 
            catch(e) 
            {
              $(".modal-body").html(html1); // msg in modal body
              $(".modal").modal("show"); // show modal instead alert box
            }
          },
        });
      }); // end submit event      

      //Alert message fade
      $("#alert-message").fadeTo(2000, 500).slideUp(500, function(){
      $("#alert-message").slideUp(500);
      $("#alert-message").remove();
      });
    
      // Check all and un-check all for HR/attendance
      $("#checkAll").click(function(){
          $(".checkbox").prop("checked", true);
      });

      $("#uncheckAll").click(function(){
          $(".checkbox").prop("checked", false);
      });  
  });

  //Add new popup
  function addNewPop(addFormUrl, pkey)
  {
    $.ajax({
    type: "GET",
    url: "<?php echo base_url();?>"+addFormUrl,
    data: {'pkey_id' : pkey},
    dataType:"html",
        success: function(html1)
        {      
            if(html1 != 'success')
            {                // assigning modal title from parameter

              $(".modal-body").html(html1); // msg in modal body
              $(".modal").modal("show"); // show modal instead alert box
            }
        },
    });
  }   

  //Delete function with sweet alert
  function confirmDelete(url)
  {
    if(arguments[0] != null)
    {
      swal({
          title: "Are you sure?",
          text: "You want to delete this???",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: '#DD6B55',
          confirmButtonText: "Yes",
          cancelButtonText:  "Cancel",
          closeOnConfirm: false,
          closeOnCancel: false
       },
       function(isConfirm)
       {
         if (isConfirm)
         {
            //swal("<?php echo lang('common_message_delete')?>", "", "success");
            location.href = url;

          } else 
          {
            swal("This operation has been cancelled", "", "error");
            //e.preventDefault();
          }
       });
     
    }
    else
    {
      return false;
    }
    return;
  }      

  //Checkbox show content
  function showContent(checkbox, contentDiv) 
  {
    if(checkbox.checked)
    {
        $(contentDiv).css('display', 'block');
    }else
    {
        $(contentDiv).css('display', 'none');
    }
  }

  //Checkbox show Multicontent BY CHANDRU
  function showMultiContent(checkbox, contentDiv, value) 
  {
    if(checkbox.checked)
    {
        $(contentDiv).css('display', 'block');
        $(value).css('display', 'none');
    }else
    {
        $(contentDiv).css('display', 'none');
        $(value).css('display', 'block');
    }
  }

  //Select box show content
  function showSelectContent(opt, contentDiv)
  {
    if(opt  ==  contentDiv)
    {
         $('#'+contentDiv).css('display', 'block');
    }
    else
    {
         $('#'+contentDiv).css('display', 'none');
    }
  }

  function isNumberKey(evt) 
  {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if ((charCode < 48 || charCode > 57))
        return false;

    return true;
  }

  //Add Multiple Table Row
  function addNewRow(content_id)
  {
    var row = $("#"+content_id+" tr:last");

    row.find("select").each(function(index)
    {
        $(this).select2('destroy');
    }); 

    row.clone().find("input, textarea, select, button, checkbox, radio").each(function()
    {
        i   = $(this).data('row') + 1;
        id  = $(this).data('name') + i;

        $(this).val('').attr({'id' : id, 'data-row' : i});
    }).end().appendTo("#"+content_id);

    $("select.select2").select2();
  }
</script>

