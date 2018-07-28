<?php echo form_open('admin/teacherprofile/update/qualifications/'.$edit_data[0]['teacher_id'] , array('id' => 'form-teacher','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
<div class="tab-pane fade in box" id="qua_data">
                            <div class="padded">

                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Teacher Exam');?>
                                            </td>
                                            <td>
                                                <select name="cbo_teacher_exam" id="cbo_teacher_exam" class="uniform" style="width: 100%">
                                                <option value="0">Choose one</option>
                                                <?php foreach($teacher_exam as $row):?>
                                                    <option value="<?php echo $row['tea_exam_id'] ?>" <?php if ($row['tea_exam_id'] == $edit_data[0]['tea_exam_id']){ echo 'selected';} ?>>
                                                        <?php echo $row['tea_exam_en_name'];?>
                                                            
                                                        </option>
                                                 <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td style="width: 200px;">
                                                <?php echo get_phrase('Passed Competency Assessment');?>
                                            </td>
                                            <td style="width: 140px;">
                                                <select name="cbo_teacher_passed" id="cbo_teacher_passed" class="uniform" style="width: 100%">
                                                    <option value="0">Choose One</option>
                                                    <option value="1" <?php if ($edit_data[0]['tea_passed']==1){ echo 'selected';} ?>>NO</option>
                                                    <option value="2" <?php if ($edit_data[0]['tea_passed']==2){ echo 'selected';} ?>>YES</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Member of Professional Association');?>
                                            </td>
                                            <td colspan="3">
                                                <select name="cbo_association" id="cbo_association" class="uniform" style="width: 100%">
                                            <option value="0">Choose one</option>
                                            <?php foreach($member_of_pro_association as $row):?>
                                               <option value="<?php echo $row['mem_ass_id'] ?>" <?php if ($row['mem_ass_id'] == $edit_data[0]['mem_ass_id']){ echo 'selected';} ?>><?php echo $row['mem_ass_en_name'];?>
                                                   
                                               </option>
                                            <?php endforeach;?>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Number of years workign ourside TVET');?>
                                            </td>
                                            <td colspan="3">
                                                Teaching: <input type="text" maxlength="2" id="teaching" name="teaching" class="classinput" value="<?php echo $edit_data[0]['teaching'] ?>" style="width: 30px;">
                                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                 Other: <input type="text" maxlength="2" id="other" name="other" style="width: 30px;" value="<?php echo $edit_data[0]['other'] ?>"> 
                                             </td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                            <div class="form-actions">
                               
                                <a href="javascript:(0)" id="btn-update-qua-data" class="pull-right btn btn-primary">
                                    <?php echo get_phrase('Update');?>
                                </a>
                            </div>

                        </div>
<?php echo form_close()?>
<script type="text/javascript">
 
  
  $("input#teaching").keypress(number);
  $("input#other").keypress(number);


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
$('a#btn-update-qua-data').click(function(e){
     //Qualifications
      var cbo_teacher_exam = $('select#cbo_teacher_exam').val();
      var cbo_teacher_passed = $('select#cbo_teacher_passed').val();
      var cbo_association = $('select#cbo_association').val();
      var teaching = $('input#teaching').val();
      var other = $('input#other').val();

      if (cbo_teacher_exam == 0) {
          $('select#cbo_teacher_exam').parent().css('border', 'solid 1px #f00');
          tab('qua_data');
      } else if (cbo_teacher_passed == 0) {
          $('select#cbo_teacher_passed').parent().css('border', 'solid 1px #f00');
          tab('qua_data');
      } else if (cbo_association == 0) {
          $('select#cbo_association').parent().css('border', 'solid 1px #f00');
          tab('qua_data');
      } else if (teaching == '') {
          $('input#teaching').css('border', 'solid 1px #f00');
          tab('qua_data');
      } else if (other == '') {
          $('input#other').css('border', 'solid 1px #f00');
          tab('qua_data');
    }else{
       
      $('form#form-teacher').submit();
       alert('Update');
    }
})
</script>