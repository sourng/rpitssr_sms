<?php echo form_open('admin/teacherprofile/update/employment_data/'.$edit_data[0]['teacher_id'] , array('id' => 'form-teacher','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
<div class="tab-pane fade in box" id="emp_data">
                            <div class="padded">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label-box">
                                                <?php echo get_phrase('Employment Start Date');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up validate[required]" name="emp_start_date" id="emp_start_date" value="<?php echo $edit_data[0]['emp_start_date'] ?>" />
                                            </td>
                                            <td class="label-box">
                                                <?php echo get_phrase('Employment End Date');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="datepicker fill-up validate[required]" name="emp_end_date" id="emp_end_date" value="<?php echo $edit_data[0]['emp_end_date'] ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Employment Type');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <select name="emp_type" id="emp_type" class="uniform" style="width:100%;">
                                                            <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                            <?php foreach($employment_type as $row):?>
                                                                <option value="<?php echo $row['emp_type_id'] ?>" <?php if ($row['emp_type_id'] == $edit_data[0]['emp_type_id']){ echo 'selected';} ?>>
                                                                    <?php echo $row['emp_type_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('Contract Value (RIEL)');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <input type="text" class="validate[required]" name="cont_value" id="cont_value" value="<?php echo $edit_data[0]['cont_value'] ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Duty Type');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <select name="duty_type" id="duty_type" class="uniform" style="width:100%;">
                                                        <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                        <?php foreach($duty_type as $row):?>
                                                                <option value="<?php echo $row['duty_type_id'] ?>" <?php if ($row['duty_type_id'] == $edit_data[0]['duty_type_id']){ echo 'selected';} ?>>
                                                                    <?php echo $row['duty_type_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                            <td class="label-box">

                                                <?php echo get_phrase('Non Teaching staff Main Duty');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <select name="non_teach_staff_duty" id="non_teach_staff_duty" class="uniform" style="width:100%;">
                                                    <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                            <?php foreach($duty_teaching as $row):?>
                                                                <option value="<?php echo $row['duty_teach_id'] ?>" <?php if ($row['duty_teach_id'] == $edit_data[0]['duty_teach_id']){ echo 'selected';} ?>>
                                                                    <?php echo $row['duty_teach_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-box">

                                                <?php echo get_phrase('Staff Availability and Work Schedule');?>
                                                <span class="required">*</span>
                                            </td>
                                            <td>
                                                <select name="staff_work_sch" id="staff_work_sch" class="uniform" style="width:100%;">
                                                    <option value="0"><?php echo get_phrase('Choose one');?></option>
                                                            <?php foreach($schedule as $row):?>
                                                                <option value="<?php echo $row['sch_id'] ?>" <?php if ($row['sch_id'] == $edit_data[0]['sch_id']){ echo 'selected';} ?>>
                                                                    <?php echo $row['sch_en_name'];?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>



                            </div>
                            <div class="form-actions">
                               
                                <a href="javascript:(0)" id="btn-update-emp-data" class="pull-right btn btn-primary">
                                    <?php echo get_phrase('Update');?>
                                </a>
                            </div>

                        </div>

<?php echo form_close();?>

<script type="text/javascript">

  $("input#cont_value").keypress(number);

  function number(event) {
      var key = window.event ? event.keyCode : event.which;
      if (event.keyCode === 8 || event.keyCode === 46) {
          return true;
      } else if (key < 48 || key > 57) {
          return false;
      } else {
          return true;
      }
  };

$('a#btn-update-emp-data').click(function(e){
   //Employment Data  
      var emp_start_date = $('input#emp_start_date').val();
      var emp_end_date = $('input#emp_end_date').val();
      var emp_type = $('select#emp_type').val();
      var cont_value = $('input#cont_value').val();
      var duty_type = $('select#duty_type').val();
      var non_teach_staff_duty = $('select#non_teach_staff_duty').val();
      var staff_work_sch = $('select#staff_work_sch').val();

      if (emp_start_date == '') {
          $('input#emp_start_date').css('border', 'solid 1px #f00');
      } else if (emp_end_date == '') {
          $('input#emp_end_date').css('border', 'solid 1px #f00');
      } else if (emp_type == 0) {
          $('select#emp_type').parent().css('border', 'solid 1px #f00');
      } else if (cont_value == '') {
          $('input#cont_value').css('border', 'solid 1px #f00');
      } else if (duty_type == 0) {
          $('select#duty_type').parent().css('border', 'solid 1px #f00');
      } else if (non_teach_staff_duty == 0) {
          $('select#non_teach_staff_duty').parent().css('border', 'solid 1px #f00');
      } else if (staff_work_sch == 0) {
          $('select#staff_work_sch').parent().css('border', 'solid 1px #f00');
    }else{
       
      $('form#form-teacher').submit();
       alert('Update');
    }
})



    

</script>