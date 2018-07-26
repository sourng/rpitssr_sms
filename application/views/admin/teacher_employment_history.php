<?php echo form_open('admin/teacherprofile/update/employment_history/'.$edit_data[0]['teacher_id'] , array('id' => 'form-teacher','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
<div class="tab-pane fade in box" id="his_data">
                            <div class="padded">
                                <table id="dynamic-history">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Position')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Start Date')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('End Date')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Organization')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Location')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Add/Del')?> </td>
                                        </tr>
                                        
                                        <?php foreach ($edit_history as $key):?>
                                            <tr class="row-history" id="row-history-<?php echo $key['emp_his_id'] ?>">
                                            <td>
                                                <input type="text" name="his_position[]" id="his_position" style="width: 100%" value="<?php echo $key['his_position'] ?>">
                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up" name="his_start_date[]" id="his_start_date" style="width: 70px" value="<?php echo $key['his_start_date'] ?>"/>

                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up" name="his_end_date[]" id="his_end_date" style="width: 70px" value="<?php echo $key['his_end_date'] ?>"/>

                                            </td>
                                            <td>
                                                <input type="text" name="his_organization[]" id="his_organization" style="width: 100%" value="<?php echo $key['his_organization'] ?>">
                                            </td>
                                            <td>
                                                <input type="text" name="his_location[]" id="his_location" style="width: 100%" value="<?php echo $key['his_location'] ?>">
                                            </td>
                                            <td>
                                                <a href="javasript:(0)" class="btn btn-success" id="btn-add-history"><i class="icon-plus"></i></a>
                                                <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-history" data-remove="<?php echo $key['emp_his_id'] ?>"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>


                            </div>
                            <div class="form-actions">
                              
                                <a href="javasript:(0)" id="btn-update-his-data" class="pull-right btn btn-primary">
                                    <?php echo get_phrase('Update');?>
                                </a>
                            </div>
                        </div>
                      <?php echo form_close()?>
<script type="text/javascript">




var i = 1;

    $(document).on('click','#btn-remove-course',function()
    {   
        var count = $('.row-course').length;
        if (count > 1) {
            var remove_course = $(this).data("remove");
            $("#row-course-"+ remove_course ).remove();
        }else{
            alert('Can\'t Delete!');
        }

    });

$(document).on('click','#btn-add-history',function()
  {
    i++;
      $('#dynamic-history').append('<tr class="row-history" id="row-history-'+i+'">\
                                        <td>\
                                            <input type="text" name="his_position[]" id="his_position" style="width: 100%">\
                                        </td>\
                                        <td>\
                                            <input type="text" class="datepicker fill-up" name="his_start_date[]" id="his_start_date" style="width: 70px" />\
                                        </td>\
                                        <td>\
                                            <input type="text" class="datepicker fill-up" name="his_end_date[]" id="his_end_date" style="width: 70px" />\
                                        </td>\
                                        <td>\
                                            <input type="text" name="his_organization[]" id="his_organization" style="width: 100%"></td>\
                                        <td>\
                                            <input type="text" name="his_location[]" id="his_location" style="width: 100%">\
                                        </td>\
                                        <td>\
                                            <a href="javasript:(0)" class="btn btn-success" id="btn-add-history"><i class="icon-plus"></i></a>\
                                            <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-history" data-remove="'+ i +'"><i class="icon-trash"></i></a>\
                                        </td>\
                                     </tr>');
  });


    $(document).on('click','#btn-remove-history',function()
    {   
        var count = $('.row-history').length;
        if (count > 1) {
            var remove_history = $(this).data("remove");
            $("#row-history-"+ remove_history ).remove();
        }else{
            alert('Can\'t Delete!');
        }
    });


</script>