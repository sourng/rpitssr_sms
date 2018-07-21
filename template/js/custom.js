'use strict';

  function tab(id) {
      $('#tab_' + id).click();
  }

  function save() {
      //Biographic Data 
      var kh_fname = $('input#kh_fname').val();
      var kh_lname = $('input#kh_lname').val();
      var en_fname = $('input#en_fname').val();
      var en_lname = $('input#en_lname').val();
      var sex = $('select#sex').val();
      var dob = $('input#dobirthday').val();
      var natuonal_id = $('input#natuonal_id').val();
      var ins_staff_id = $('input#ins_staff_id').val();
      var num_of_dep = $('input#num_of_dep').val();
      var marital = $('select#marital').val();
      var gov_off_id = $('input#gov_off_id').val();
      var min_off_id = $('input#min_off_id').val();
      var pob = $('input#pob').val();
      var cur_resident = $('input#cur_resident').val();
      var cbo_province = $('select#cbo_province').val();
      var cbo_district = $('select#cbo_district').val();
      var cbo_commune = $('select#cbo_commune').val();
      var tel_num = $('input#tel_num').val();
      var e_mail = $('input#e_mail').val();
      var emer_cont_name = $('input#emer_cont_name').val();
      var emer_cont_phone = $('input#emer_cont_phone').val();
      var user_avertar = $('input#user_avertar').val();

      //Employment Data  
      var emp_start_date = $('input#emp_start_date').val();
      var emp_end_date = $('input#emp_end_date').val();
      var emp_type = $('select#emp_type').val();
      var cont_value = $('input#cont_value').val();
      var duty_type = $('select#duty_type').val();
      var non_teach_staff_duty = $('select#non_teach_staff_duty').val();
      var staff_work_sch = $('select#staff_work_sch').val();

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

      //Qualifications
      var cbo_teacher_exam = $('select#cbo_teacher_exam').val();
      var cbo_teacher_passed = $('select#cbo_teacher_passed').val();
      var cbo_association = $('select#cbo_association').val();
      var teaching = $('input#teaching').val();
      var other = $('input#other').val();

      //History
      var his_position = $('input#his_position').val();
      var his_start_date = $('input#his_start_date').val();
      var his_end_date = $('input#his_end_date').val();
      var his_organization = $('input#his_organization').val();
      var his_location = $('input#his_location').val();

      if (kh_fname == '') {
          $('input#kh_fname').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (kh_lname == '') {
          $('input#kh_lname').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (en_fname == '') {
          $('input#en_fname').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (en_lname == '') {
          $('input#en_lname').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (sex == 0) {
          $('select#sex').parent().css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (dob == '') {
          $('input#dobirthday').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (natuonal_id == '') {
          $('input#natuonal_id').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (ins_staff_id == '') {
          $('input#ins_staff_id').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (num_of_dep == '') {
          $('input#num_of_dep').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (marital == 0) {
          $('select#marital').parent().css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (gov_off_id == '') {
          $('input#gov_off_id').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (min_off_id == '') {
          $('input#min_off_id').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (pob == '') {
          $('input#pob').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (cur_resident == '') {
          $('input#cur_resident').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (cbo_province == 0) {
          $('select#cbo_province').parent().css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (cbo_district == 0) {
          $('select#cbo_district').parent().css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (cbo_commune == 0) {
          $('select#cbo_commune').parent().css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (tel_num == '') {
          $('input#tel_num').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (e_mail == '') {
          $('input#e_mail').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (emer_cont_name == '') {
          $('input#emer_cont_name').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (emer_cont_phone == '') {
          $('input#emer_cont_phone').css('border', 'solid 1px #f00');
          tab('bio_data');
      } else if (user_avertar == '') {
          $('input#user_avertar').parent().css('border', 'solid 1px #f00');
          tab('bio_data');

          //Employment Data

      } else if (emp_start_date == '') {
          $('input#emp_start_date').css('border', 'solid 1px #f00');
          tab('emp_data');
      } else if (emp_end_date == '') {
          $('input#emp_end_date').css('border', 'solid 1px #f00');
          tab('emp_data');
      } else if (emp_type == 0) {
          $('select#emp_type').parent().css('border', 'solid 1px #f00');
          tab('emp_data');
      } else if (cont_value == '') {
          $('input#cont_value').css('border', 'solid 1px #f00');
          tab('emp_data');
      } else if (duty_type == 0) {
          $('select#duty_type').parent().css('border', 'solid 1px #f00');
          tab('emp_data');
      } else if (non_teach_staff_duty == 0) {
          $('select#non_teach_staff_duty').parent().css('border', 'solid 1px #f00');
          tab('emp_data');
      } else if (staff_work_sch == 0) {
          $('select#staff_work_sch').parent().css('border', 'solid 1px #f00');
          tab('emp_data');

          //Education and Training
      } else if (cbo_general_education == 0) {
          $('select#cbo_general_education').parent().css('border', 'solid 1px #f00');
          tab('edu_data');
      } else if (cbo_language == 0) {
          $('select#cbo_language').parent().css('border', 'solid 1px #f00');
          tab('edu_data');
      } else if (cbo_listening == 0) {
          $('select#cbo_listening').parent().css('border', 'solid 1px #f00');
          tab('edu_data');
      } else if (cbo_speaking == 0) {
          $('select#cbo_speaking').parent().css('border', 'solid 1px #f00');
          tab('edu_data');
      } else if (cbo_reading == 0) {
          $('select#cbo_reading').parent().css('border', 'solid 1px #f00');
          tab('edu_data');
      } else if (cbo_writing == 0) {
          $('select#cbo_writing').parent().css('border', 'solid 1px #f00');
          tab('edu_data');

      } else if (course_program == 0) {
          $('input#course_program').css('border', 'solid 1px #f00');
          tab('edu_data');
      } else if (cbo_tvet == 0) {
          $('select#cbo_tvet').parent().css('border', 'solid 1px #f00');
          tab('edu_data');
      } else if (cbo_program_type == 0) {
          $('select#cbo_program_type').parent().css('border', 'solid 1px #f00');
          tab('edu_data');
      } else if (year == '') {
          $('input#year').css('border', 'solid 1px #f00');
          tab('edu_data');
      } else if (school_name == '') {
          $('input#school_name').css('border', 'solid 1px #f00');
          tab('edu_data');
      } else if (location == '') {
          $('input#location').css('border', 'solid 1px #f00');
          tab('edu_data');

          //Qualifications
      } else if (cbo_teacher_exam == 0) {
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

        //History
  
      } else if (his_position == '') {
          $('input#his_position').css('border', 'solid 1px #f00');
          tab('his_data');
      } else if (his_start_date == '') {
          $('input#his_start_date').css('border', 'solid 1px #f00');
          tab('his_data');
      } else if (his_end_date == '') {
          $('input#his_end_date').css('border', 'solid 1px #f00');
          tab('his_data');
      } else if (his_organization == '') {
          $('input#his_organization').css('border', 'solid 1px #f00');
          tab('his_data');
      } else if (his_location == '') {
          $('input#his_location').css('border', 'solid 1px #f00');
          tab('his_data');

      } else {

          //Biographic Data              
          $('input#kh_fname').css('border', 'solid 1px #eee');
          $('input#kh_lname').css('border', 'solid 1px #eee');
          $('input#en_fname').css('border', 'solid 1px #eee');
          $('input#en_lname').css('border', 'solid 1px #eee');
          $('select#sex').parent().css('border', 'solid 1px #eee');
          $('input#dobirthday').css('border', 'solid 1px #eee');
          $('input#natuonal_id').css('border', 'solid 1px #eee');
          $('input#ins_staff_id').css('border', 'solid 1px #eee');
          $('input#num_of_dep').css('border', 'solid 1px #eee');
          $('select#marital').parent().css('border', 'solid 1px #eee');
          $('input#gov_off_id').css('border', 'solid 1px #eee');
          $('input#min_off_id').css('border', 'solid 1px #eee');
          $('input#pob').css('border', 'solid 1px #eee');
          $('input#cur_resident').css('border', 'solid 1px #eee');
          $('select#cbo_province').parent().css('border', 'solid 1px #eee');
          $('select#cbo_district').parent().css('border', 'solid 1px #eee');
          $('select#cbo_commune').parent().css('border', 'solid 1px #eee');
          $('input#tel_num').css('border', 'solid 1px #eee');
          $('input#e_mail').css('border', 'solid 1px #eee');
          $('input#emer_cont_name').css('border', 'solid 1px #eee');
          $('input#emer_cont_phone').css('border', 'solid 1px #eee');
          $('input#user_avertar').parent().css('border', 'solid 1px #eee');
          //Employment Data
          $('input#emp_start_date').css('border', 'solid 1px #eee');
          $('input#emp_end_date').css('border', 'solid 1px #eee');
          $('select#emp_type').parent().css('border', 'solid 1px #eee');
          $('input#cont_value').css('border', 'solid 1px #eee');
          $('select#duty_type').parent().css('border', 'solid 1px #eee');
          $('select#non_teach_staff_duty').parent().css('border', 'solid 1px #eee');
          $('select#staff_work_sch').parent().css('border', 'solid 1px #eee');

          //Education and Training
          $('select#cbo_general_education').parent().css('border', 'solid 1px #eee');
          $('select#cbo_language').parent().css('border', 'solid 1px #eee');
          $('select#cbo_listening').parent().css('border', 'solid 1px #eee');
          $('select#cbo_speaking').parent().css('border', 'solid 1px #eee');
          $('select#cbo_reading').parent().css('border', 'solid 1px #eee');
          $('select#cbo_writing').parent().css('border', 'solid 1px #eee');

          $('input#course_program').css('border', 'solid 1px #eee');
          $('select#cbo_tvet').parent().css('border', 'solid 1px #eee');
          $('select#cbo_program_type').parent().css('border', 'solid 1px #eee');
          $('input#year').css('border', 'solid 1px #eee');
          $('input#school_name').css('border', 'solid 1px #eee');
          $('input#location').css('border', 'solid 1px #eee');

          //Qualifications            
          $('select#cbo_teacher_exam').parent().css('border', 'solid 1px #eee');
          $('select#cbo_teacher_passed').parent().css('border', 'solid 1px #eee');
          $('select#cbo_association').parent().css('border', 'solid 1px #eee');
          $('input#teaching').css('border', 'solid 1px #eee');
          $('input#other').css('border', 'solid 1px #eee');

          //History
          $('input#his_position').css('border', 'solid 1px #eee');
          $('input#his_start_date').css('border', 'solid 1px #eee');
          $('input#his_end_date').css('border', 'solid 1px #eee');
          $('input#his_organization').css('border', 'solid 1px #eee');
          $('input#his_location').css('border', 'solid 1px #eee');


           $('form#form-teacher').submit();
         
      }
  
  };

  $("input#natuonal_id").keypress(number);
  $("input#ins_staff_id").keypress(number);
  $("input#num_of_dep").keypress(number);
  $("input#gov_off_id").keypress(number);
  $("input#min_off_id").keypress(number);
  $("input#tel_num").keypress(number);
  $("input#emer_cont_phone").keypress(number);
  $("input#cont_value").keypress(number);
  $("input#year").keypress(number);
  $("input#teaching").keypress(number);


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

  function change(select, change) {
      var id = $('select#cbo_' + select).val();
      $.ajax({
          url: 'index.php?change/' + change + '/' + id,
          method: 'GET',
          success: function(data) {
              $('select#cbo_' + change).html(data);

          }
      })
  };


  
    
