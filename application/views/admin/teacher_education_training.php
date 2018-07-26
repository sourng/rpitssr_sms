<?php echo form_open('admin/teacherprofile/update/education_training/'.$edit_data[0]['teacher_id'] , array('id' => 'form-teacher','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
<div class="tab-pane fade in box" id="edu_data">
                            <div class="padded">
                                <div style="border:solid 3px #e0e0e0;padding: 20px;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td style="width: 160px;">
                                                    <?php echo get_phrase('General Education');?>
                                                </td>
                                                <td>
                                                    <select name="cbo_general_education" id="cbo_general_education" class="uniform">
                                                            <option value="0">Choose one</option>
                                                                <?php foreach($general_education as $row):?>
                                                                    <option value="<?php echo $row['gen_edu_id'] ?>" <?php if ($row['gen_edu_id'] == $edit_data[0]['gen_edu_id']){ echo 'selected';} ?> >
                                                                        <?php echo $row['gen_edu_en_name'];?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                <table id="dynamic-lang">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Foreign Language');?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Listening');?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Speaking');?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Reading');?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Writing');?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Add/Del');?>
                                            </td>
                                        </tr>

                                        <?php foreach ($edit_education as $key): ?>
                                            <tr class="row-lang" id="row-lang-<?php echo $key['emp_cou_id']?>">
                                            <td>
                                                <select name="cbo_language[]" id="cbo_language" class="uniform">
                                                    <option value="0">Choose one</option>
                                                            <?php foreach($foreign_language as $row):?>
                                                                <option value="<?php echo $row['fore_lang_id'] ?>" <?php if ($row['fore_lang_id'] == $key['fore_lang_id']){ echo 'selected';} ?>><?php echo $row['fore_lang_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>

                                            </td>

                                            <td>
                                                <select name="cbo_listening[]" id="cbo_listening" class="uniform">
                                                    <option value="0">Choose one</option>
                                                        <?php foreach($foreign_language_level as $row):?>
                                                           <option value="<?php echo $row['fore_lang_level_id'] ?>" <?php if ($row['fore_lang_level_id'] == $key['listen_level_id']){ echo 'selected';} ?>><?php echo $row['fore_lang_level_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="cbo_speaking[]" id="cbo_speaking" class="uniform">
                                                    <option value="0">Choose one</option>
                                                        <?php foreach($foreign_language_level as $row):?>
                                                           <option value="<?php echo $row['fore_lang_level_id'] ?>"  <?php if ($row['fore_lang_level_id'] == $key['speak_level_id']){ echo 'selected';} ?>><?php echo $row['fore_lang_level_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="cbo_reading[]" id="cbo_reading" class="uniform">
                                                    <option value="0">Choose one</option>
                                                    <?php foreach($foreign_language_level as $row):?>
                                                                <option value="<?php echo $row['fore_lang_level_id'] ?>"  <?php if ($row['fore_lang_level_id'] == $key['read_level_id']){ echo 'selected';} ?>><?php echo $row['fore_lang_level_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="cbo_writing[]" id="cbo_writing" class="uniform">
                                                    <option value="0">Choose one</option>
                                                    <?php foreach($foreign_language_level as $row):?>
                                                                <option value="<?php echo $row['fore_lang_level_id'] ?>"  <?php if ($row['fore_lang_level_id'] == $key['wirte_level_id']){ echo 'selected';} ?>><?php echo $row['fore_lang_level_en_name'];?></option>
                                                            <?php endforeach;?>
                                                </select>
                                            </td>
                                            <td style="width: 100px;">
                                                 <a href="javasript:(0)" class="btn btn-success" id="btn-add-lang"><i class="icon-plus"></i></a>
                                                <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-lang"  data-remove="<?php echo $key['edu_train_id'] ?>"><i class="icon-trash"></i></a>
                                            </td>
                                            <td> </td>
                                        </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                             </div>
                             <br>
                              <div style="border:solid 3px #e0e0e0;padding: 20px;">
                                <table id="dynamic-course">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo get_phrase('Course/Program Name')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('TVET?')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Course Type')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Year')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('School Name')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Location')?>
                                            </td>
                                            <td>
                                                <?php echo get_phrase('Add/Del')?> </td>
                                        </tr>
                                        <?php foreach ($edit_course as $key):?>
                                            <tr class="row-course" id="row-course-<?php echo $key['emp_cou_id']?>">
                                            <td>
                                                <input type="text" name="course_program[]" id="course_program" style="width: 100%" value="<?php echo $key['emp_cou_name'] ?>">
                                            </td>
                                            <td>
                                                <select name="cbo_tvet[]" id="cbo_tvet" class="uniform">
                                                    <option value="0">Choose One</option>
                                                    <option value="1" <?php if ($key['tvet']==1){ echo 'selected';} ?>>NO</option>
                                                    <option value="2" <?php if ($key['tvet']==2){ echo 'selected';} ?>>YES</option>
                                                    </select>
                                            </td>
                                            <td>
                                                <select name="cbo_program_type[]" id="cbo_program_type" class="uniform">
                                                    <option value="0">Choose one</option>
                                                    <?php foreach($course_type as $row):?>
                                                       <option value="<?php echo $row['cour_type_id'] ?>"
                                                        <?php if ($row['cour_type_id'] == $key['cour_type_id']){ echo 'selected';} ?> ><?php echo $row['cour_type_en_name'];?></option>
                                                     <?php endforeach;?>
                                                    </select>
                                            </td>
                                            <td>
                                                <input type="text" name="year[]" id="year" maxlength="4" style="width: 40px;" value="<?php echo $key['year'] ?>">
                                            </td>
                                            <td>
                                                <input type="text" name="school_name[]" id="school_name" style="width: 100%"  value="<?php echo $key['school'] ?>">
                                            </td>
                                            <td>
                                                <input type="text" name="location[]" id="location" style="width: 100%"
                                                 value="<?php echo $key['location'] ?>">
                                            </td>
                                            <td>
                                                <a href="javasript:(0)" class="btn btn-success" id="btn-add-course"><i class="icon-plus"></i></a>
                                                <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-course" data-remove="<?php echo $key['emp_cou_id']?>"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="form-actions">
                                
                                <a  href="javascript:(0)" id="btn-update-edu-data" class="pull-right btn btn-primary">
                                    <?php echo get_phrase('Update');?>
                                </a>
                            </div>

                        </div>

<?php echo form_close();?>

<script type="text/javascript">
 
  $("input#year").keypress(number);



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

$('a#btn-update-edu-data').click(function(e){
     //Education and Training
      var cbo_general_education = $('select#cbo_general_education').val();
      var cbo_language = $('select#cbo_language').val();
      var cbo_listening = $('select#cbo_listening').val();
      var cbo_speaking = $('select#cbo_speaking').val();
      var cbo_reading = $('select#cbo_reading').val();
      var cbo_writing = $('select#cbo_writing').val();

      var course_program = $('input#course_program').val();
      var cbo_tvet = $('select#cbo_tvet').val();
      var cbo_program_type = $('select#cbo_program_type').val();
      var year = $('input#year').val();
      var school_name = $('input#school_name').val();
      var location = $('input#location').val();

      if (cbo_general_education == 0) {
          $('select#cbo_general_education').parent().css('border', 'solid 1px #f00');
      } else if (cbo_language == 0) {
          $('select#cbo_language').parent().css('border', 'solid 1px #f00');
      } else if (cbo_listening == 0) {
          $('select#cbo_listening').parent().css('border', 'solid 1px #f00');
      } else if (cbo_speaking == 0) {
          $('select#cbo_speaking').parent().css('border', 'solid 1px #f00');
      } else if (cbo_reading == 0) {
          $('select#cbo_reading').parent().css('border', 'solid 1px #f00');
      } else if (cbo_writing == 0) {
          $('select#cbo_writing').parent().css('border', 'solid 1px #f00');

      } else if (course_program == 0) {
          $('input#course_program').css('border', 'solid 1px #f00');
      } else if (cbo_tvet == 0) {
          $('select#cbo_tvet').parent().css('border', 'solid 1px #f00');
      } else if (cbo_program_type == 0) {
          $('select#cbo_program_type').parent().css('border', 'solid 1px #f00');
      } else if (year == '') {
          $('input#year').css('border', 'solid 1px #f00');
      } else if (school_name == '') {
          $('input#school_name').css('border', 'solid 1px #f00');
      } else if (location == '') {
          $('input#location').css('border', 'solid 1px #f00');
    }else{
       
      $('form#form-teacher').submit();
       alert('Update');
    }
})

var i = 1;
$(document).on('click','#btn-add-lang',function()
  {
    i++;
    $('select').css('height','30px');
     $('#dynamic-lang').append('<tr class="row-lang" id="row-lang-'+i+'">\
                                    <td>\
                                        <select name="cbo_language[]" id="cbo_language" class="uniform" style="width: 100%">\
                                         <option value="0">Choose one</option>\
                                            <?php foreach($foreign_language as $row):?>\
                                               <option value="<?php echo $row['fore_lang_id'] ?>"><?php echo $row['fore_lang_en_name'];?></option>\
                                            <?php endforeach;?>\
                                        </select></td>\
                                    <td>\
                                        <select name="cbo_listening[]" id="cbo_listening" class="uniform" style="width: 100%">\
                                            <option value="0">Choose one</option>\
                                            <?php foreach($foreign_language_level as $row):?>\
                                                <option value="<?php echo $row['fore_lang_level_id'] ?>"><?php echo $row['fore_lang_level_en_name'];?></option>\
                                            <?php endforeach;?>\
                                        </select>\
                                    </td>\
                                    <td>\
                                        <select name="cbo_speaking[]" id="cbo_speaking" class="uniform" style="width: 100%">\
                                            <option value="0">Choose one</option>\
                                                <?php foreach($foreign_language_level as $row):?>\
                                                   <option value="<?php echo $row['fore_lang_level_id'] ?>"><?php echo $row['fore_lang_level_en_name'];?></option>\
                                                <?php endforeach;?>\
                                        </select>\
                                    </td>\
                                    <td>\
                                                <select name="cbo_reading[]" id="cbo_reading" class="uniform" style="width: 100%">\
                                                    <option value="0">Choose one</option>\
                                                    <?php foreach($foreign_language_level as $row):?>\
                                                                <option value="<?php echo $row['fore_lang_level_id'] ?>"><?php echo $row['fore_lang_level_en_name'];?></option>\
                                                            <?php endforeach;?>\
                                                </select>\
                                            </td>\
                                            <td>\
                                                <select name="cbo_writing[]" id="cbo_writing" class="uniform" style="width: 100%">\
                                                    <option value="0">Choose one</option>\
                                                    <?php foreach($foreign_language_level as $row):?>\
                                                                <option value="<?php echo $row['fore_lang_level_id'] ?>"><?php echo $row['fore_lang_level_en_name'];?></option>\
                                                            <?php endforeach;?>\
                                                </select>\
                                            </td>\
                                            <td style="width: 100px;">\
                                                <a href="javasript:(0)" class="btn btn-success" id="btn-add-lang"><i class="icon-plus"></i></a>\
                                                <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-lang" data-remove="'+ i +'"><i class="icon-trash"></i></a>\
                                            </td>\
                                            <td> </td>\
                                        </tr>');
  });


    $(document).on('click','#btn-remove-lang',function()
    {   
        var count = $('.row-lang').length;
            if (count > 1) {
                var remove_lang = $(this).data("remove");
                  $("#row-lang-"+ remove_lang ).remove();  
             }else{
                alert('Can\'t Delete!');
             }
      

    });


$(document).on('click','#btn-add-course',function()
  {
    i++;
      $('#dynamic-course').append('<tr class="row-course" id="row-course-'+i+'">\
                                    <td>\
                                        <input type="text" name="course_program[]" id="course_program" style="width: 100%">\
                                    </td>\
                                    <td>\
                                        <select name="cbo_tvet[]" id="cbo_tvet" class="uniform" style="width: 100%">\
                                            <option value="0">Choose One</option>\
                                            <option value="1">NO</option>\
                                            <option value="2">YES</option>\
                                        </select>\
                                    </td>\
                                    <td>\
                                        <select name="cbo_program_type[]" id="cbo_program_type" class="uniform" style="width: 100%">\
                                            <option value="0">Choose one</option>\
                                            <?php foreach($course_type as $row):?>\
                                                <option value="<?php echo $row['cour_type_id'] ?>">\
                                                <?php echo $row["cour_type_en_name"];?></option>\
                                             <?php endforeach;?>\
                                         </select>\
                                    </td>\
                                    <td>\
                                        <input type="text" name="year[]" id="year" value="" maxlength="4" style="width: 40px;">\
                                    </td>\
                                    <td>\
                                        <input type="text" name="school_name[]" id="school_name" style="width: 100%">\
                                    </td>\
                                    <td>\
                                        <input type="text" name="location[]" id="location" style="width: 100%">\
                                    </td>\
                                    <td>\
                                        <a href="javasript:(0)" class="btn btn-success" id="btn-add-course"><i class="icon-plus"></i></a>\
                                        <a href="javasript:(0)" class="btn btn-danger" id="btn-remove-course" data-remove="'+ i +'"><i class="icon-trash"></i></a>\
                                    </td>\
                                </tr>');
  });


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
</script>