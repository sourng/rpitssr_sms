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
                                               <option value="<?php echo $row["fore_lang_id"] ?>"><?php echo $row["fore_lang_en_name"];?></option>\
                                            <?php endforeach;?>\
                                        </select></td>\
                                    <td>\
                                        <select name="cbo_listening[]" id="cbo_listening" class="uniform" style="width: 100%">\
                                            <option value="0">Choose one</option>\
                                            <?php foreach($foreign_language_level as $row):?>\
                                                <option value="<?php echo $row["fore_lang_level_id"] ?>"><?php echo $row["fore_lang_level_en_name"];?></option>\
                                            <?php endforeach;?>\
                                        </select>\
                                    </td>\
                                    <td>\
                                        <select name="cbo_speaking[]" id="cbo_speaking" class="uniform" style="width: 100%">\
                                            <option value="0">Choose one</option>\
                                                <?php foreach($foreign_language_level as $row):?>\
                                                   <option value="<?php echo $row["fore_lang_level_id"] ?>"><?php echo $row["fore_lang_level_en_name"];?></option>\
                                                <?php endforeach;?>\
                                        </select>\
                                    </td>\
                                    <td>\
                                                <select name="cbo_reading[]" id="cbo_reading" class="uniform" style="width: 100%">\
                                                    <option value="0">Choose one</option>\
                                                    <?php foreach($foreign_language_level as $row):?>\
                                                                <option value="<?php echo $row["fore_lang_level_id"] ?>"><?php echo $row["fore_lang_level_en_name"];?></option>\
                                                            <?php endforeach;?>\
                                                </select>\
                                            </td>\
                                            <td>\
                                                <select name="cbo_writing[]" id="cbo_writing" class="uniform" style="width: 100%">\
                                                    <option value="0">Choose one</option>\
                                                    <?php foreach($foreign_language_level as $row):?>\
                                                                <option value="<?php echo $row["fore_lang_level_id"] ?>"><?php echo $row["fore_lang_level_en_name"];?></option>\
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
                                                <option value="<?php echo $row["cour_type_id"] ?>">\
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