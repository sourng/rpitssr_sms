<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*  
 *   
 *   
 *    
 *      
 *   
 *   
 */

class Admin extends CI_Controller
{
    
    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->load->model('m_teacher', '', true);
    }
    
    /***default functin, redirects to login page if no admin logged in yet***/
    public function index()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
    }
    
    /***ADMIN DASHBOARD***/
    function dashboard()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('index', $page_data);
    }
    
    
    /****MANAGE STUDENTS CLASSWISE*****/
    function student($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
<<<<<<< HEAD
            $data['class_id']=$this->input->post('class_id');
			$data['txt_family_kh'] = $this->input->post('txt_family_kh');
=======
            $data['khname']        = $this->input->post('khname');
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['sex']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['password']    = $this->input->post('password');
            $data['father_name'] = $this->input->post('father_name');
            $data['mother_name'] = $this->input->post('mother_name');
            $data['class_id']    = $this->input->post('class_id');
            $data['roll']        = $this->input->post('roll');
            $this->db->insert('student', $data);

            //$data['class_id'] = $this->input->post('class_id');

			$data['txt_family_kh']        = $this->input->post('txt_family_kh');
>>>>>>> 08a3741c6001fed811bc182423d1ce8f7c291ee8
            $data['txt_first_kh']        = $this->input->post('txt_first_kh');
            $data['txt_family_en']    = $this->input->post('txt_family_en');
            $data['txt_first_en']         = $this->input->post('txt_first_en');
            $data['cbo_sex']     = $this->input->post('cbo_sex');
            $data['txt_birthdate']       = $this->input->post('txt_birthdate');
            $data['txt_national_id']       = $this->input->post('txt_national_id');
            $data['txt_institution_student_id']    = $this->input->post('txt_institution_student_id');
            $data['txt_dependants'] = $this->input->post('txt_dependants');
            $data['cbo_marital'] = $this->input->post('cbo_marital');
            $data['txt_travel_distance']    = $this->input->post('txt_travel_distance');
            $data['cbo_transport_method']        = $this->input->post('cbo_transport_method');
            $data['txt_birth_place']= $this->input->post('txt_birth_place');
            $data['txt_resident_line1'] = $this->input->post('txt_resident_line1');
            $data['cbo_province'] = $this->input->post('cbo_province');
            $data['cbo_district'] = $this->input->post('cbo_district');
            $data['cbo_commune'] = $this->input->post('cbo_commune');
            $data['txt_parent_name'] = $this->input->post('txt_parent_name');
            $data['txt_parent_phone'] = $this->input->post('txt_parent_phone');
            $data['txt_parent_email'] = $this->input->post('txt_parent_email');
            $data['rd_parent_address'] = $this->input->post('rd_parent_address');
            $data['cbo_general_education'] = $this->input->post('cbo_general_education');
            $data['rd_enrol_ge'] = $this->input->post('rd_enrol_ge');  
            $data['txt_last_year_enrol'] = $this->input->post('txt_last_year_enrol');                           
            $image_id = uniqid() . '.jpg';
            $data['file_photo'] = $image_id;//$this->input->post('file_photo');
            $this->db->insert('my_student', $data);
<<<<<<< HEAD

            $student_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' . $image_id);

            // Programe
            $txt_coursename= $this->input->post('txt_coursename');
            $cbo_istvet= $this->input->post('cbo_istvet');
            $cbo_program_type= $this->input->post('cbo_program_type');
            $txt_course_year= $this->input->post('txt_course_year');
            $txt_school_name= $this->input->post('txt_school_name');
            $txt_school_location= $this->input->post('txt_school_location'); 

            $data4=array();
            foreach ($txt_coursename as $i => $name) {
                $data4[$i] = array(
                    'stu_id' => $student_id,
                    'txt_coursename' => $txt_coursename[$i],
                    'cbo_istvet' => $cbo_istvet[$i],
                    'cbo_program_type' => $cbo_program_type[$i],
                    'txt_course_year' => $txt_course_year[$i],
                    'txt_school_name' => $txt_school_name[$i],
                    'txt_school_location' => $txt_school_location[$i],

                        
            );
             $this->db->insert('my_student_course', $data4[$i]);
            };
            
            //Info Work
            $data3['stu_id'] = $student_id;
            $data3['cbo_emp_status'] = $this->input->post('cbo_emp_status');            
            $data3['txt_job_title'] = $this->input->post('txt_job_title');
            $data3['cbo_emp_remun'] = $this->input->post('cbo_emp_remun');
            $data3['txt_personal_income'] = $this->input->post('txt_personal_income');
            $data3['cbo_emp_type'] = $this->input->post('cbo_emp_type');
            $data3['txt_family_income'] = $this->input->post('txt_family_income');
            $data3['cbo_emp_prevent_reason'] = $this->input->post('cbo_emp_prevent_reason');
            $data3['rd_orphan'] = $this->input->post('rd_orphan');
            $data3['cbo_disability_type'] = $this->input->post('cbo_disability_type');
            $data3['cbo_disability_happen'] = $this->input->post('cbo_disability_happen');
            $data3['cbo_minority'] = $this->input->post('cbo_minority');
            $this->db->insert('my_student_work', $data3);
            

            //$this->email_model->account_opening_email('student', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
           // redirect(base_url() . 'index.php?admin/student/' . $data['class_id'], 'refresh');
           redirect('admin/student/'.$data['class_id'],refresh);
=======
            $this->db->insert('my_student_course', $data1);

            $student_id = mysql_insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' . $student_id . '.jpg');
            $this->email_model->account_opening_email('student', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            redirect(base_url() . 'index.php?admin/student/' . $data['class_id'], 'refresh');
>>>>>>> 08a3741c6001fed811bc182423d1ce8f7c291ee8
        }



        if ($param2 == 'do_update') {
            $data['khname']        = $this->input->post('khname');
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['sex']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['password']    = $this->input->post('password');
            $data['father_name'] = $this->input->post('father_name');
            $data['mother_name'] = $this->input->post('mother_name');
            $data['class_id']    = $this->input->post('class_id');
            $data['roll']        = $this->input->post('roll');
            
            $this->db->where('student_id', $param3);
            $this->db->update('student', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' . $param3 . '.jpg');
            $this->crud_model->clear_cache();
            
            redirect(base_url() . 'index.php?admin/student/' . $param1, 'refresh');
        } else if ($param2 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('my_student', array(
                'stu_id' => $param3
            ))->result_array();
        } else if ($param2 == 'personal_profile') {
            $page_data['personal_profile']   = true;
            $page_data['current_student_id'] = $param3;
        } else if ($param2 == 'academic_result') {
            $page_data['academic_result']    = true;
            $page_data['current_student_id'] = $param3;
        }
        if ($param2 == 'delete') {
            $this->db->where('student_id', $param3);
            $this->db->delete('student');
            redirect(base_url() . 'index.php?admin/student/' . $param1, 'refresh');
        }
        $page_data['class_id']   = $param1;
        $page_data['students']   = $this->db->get_where('my_student', array(
            'class_id' => $param1
        ))->result_array();
        $page_data['page_name']  = 'student';
        $page_data['page_title'] = get_phrase('manage_student');
        $this->load->view('index', $page_data);
    }
     /****MANAGE PARENTS CLASSWISE*****/
    function parent($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']                   = $this->input->post('name');
            $data['email']                  = $this->input->post('email');
            $data['password']               = $this->input->post('password');
            $data['student_id']             = $param2;
            $data['relation_with_student']  = $this->input->post('relation_with_student');
            $data['phone']                  = $this->input->post('phone');
            $data['address']                = $this->input->post('address');
            $data['profession']             = $this->input->post('profession');
            $this->db->insert('parent', $data);
            $this->email_model->account_opening_email('parent', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            
            $class_id   =   $this->db->get_where('student', array('student_id'=>$data['student_id']))->row()->class_id;
            redirect(base_url() . 'index.php?admin/parent/' . $class_id , 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']                   = $this->input->post('name');
            $data['email']                  = $this->input->post('email');
            $data['password']               = $this->input->post('password');
            $data['relation_with_student']  = $this->input->post('relation_with_student');
            $data['phone']                  = $this->input->post('phone');
            $data['address']                = $this->input->post('address');
            $data['profession']             = $this->input->post('profession');
            
            $this->db->where('parent_id', $param2);
            $this->db->update('parent', $data);
            
            redirect(base_url() . 'index.php?admin/parent/' . $param3, 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('parent', array(
                'parent_id' => $param3
            ))->result_array();
        } 
        if ($param1 == 'delete') {
            $this->db->where('parent_id', $param2);
            $this->db->delete('parent');
            redirect(base_url() . 'index.php?admin/parent/' . $param3, 'refresh');
        }
        $page_data['class_id']   = $param1;
        $page_data['students']   = $this->db->get_where('student', array(
            'class_id' => $param1
        ))->result_array();
        $page_data['page_name']  = 'parent';
        $page_data['page_title'] = get_phrase('manage_parent');
        $this->load->view('index', $page_data);
    }
    
    /****MANAGE TEACHERS*****/
    
    function teacher($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {        

            $data['kh_fname'] = $this->input->post('kh_fname');
            $data['kh_lname'] = $this->input->post('kh_lname');
            $data['en_fname'] = $this->input->post('en_fname');
            $data['en_lname'] = $this->input->post('en_lname');
            $data['sex_id'] = $this->input->post('sex');
            $data['dob'] = $this->input->post('dob');
            $data['natuonal_id'] = $this->input->post('natuonal_id');
            $data['ins_staff_id'] = $this->input->post('ins_staff_id');
            $data['num_of_dep'] = $this->input->post('num_of_dep');
            $data['marital_id'] = $this->input->post('marital');
            $data['gov_off_id'] = $this->input->post('gov_off_id');
            $data['min_off_id'] = $this->input->post('min_off_id');
            $data['pob'] = $this->input->post('pob');
            $data['cur_resident'] = $this->input->post('cur_resident');
            $data['prov_id'] = $this->input->post('cbo_province');
            $data['dist_id'] = $this->input->post('cbo_district');
            $data['comm_id'] = $this->input->post('cbo_commune');
            $data['tel_num'] = $this->input->post('tel_num');
            $data['e_mail'] = $this->input->post('e_mail');
            //$data['password'] = $this->input->post('password');
            //$data[''] = $this->input->post('conf_password');
            $data['emer_cont_name'] = $this->input->post('emer_cont_name');
            $data['emer_cont_phone'] = $this->input->post('emer_cont_phone');           
            $profile_image = uniqid(time(), true).'.jpg';            
            $data['user_avertar'] = $profile_image;
            $this->db->insert('teacher', $data);
            $teacher_id = $this->db->insert_id();
            move_uploaded_file($_FILES['user_avertar']['tmp_name'], './uploads/teacher_image/' . $profile_image);
            
            // End save to tbl_teacher
            

            $data2['teacher_id'] = $teacher_id;
            $data2['emp_start_date'] = $this->input->post('emp_start_date');
            $data2['emp_end_date'] = $this->input->post('emp_end_date');
            $data2['emp_type_id'] = $this->input->post('emp_type');
            $data2['cont_value'] = $this->input->post('cont_value');
            $data2['duty_type_id'] = $this->input->post('duty_type');
            $data2['non_teach_staff_duty_id'] = $this->input->post('non_teach_staff_duty');
            $data2['staff_work_sch'] = $this->input->post('staff_work_sch');
            $this->db->insert('tbl_employment', $data2);
            // End save to tbl_employment 
         

            /* For One Row
            $data3['gen_edu_id'] = $this->input->post('cbo_general_education');
            $data3['fore_lang_id'] = $this->input->post('cbo_language');
            $data3['listen_level_id'] = $this->input->post('cbo_listening');
            $data3['speak_level_id'] = $this->input->post('cbo_speaking');
            $data3['read_level_id'] = $this->input->post('cbo_reading');
            $data3['wirte_level_id'] = $this->input->post('cbo_writing');
            $this->db->insert('tbl_employment_education_training', $data3);
            */
            $gen_edu_id = $this->input->post('cbo_general_education');
            $fore_lang_id = $this->input->post('cbo_language');
            $listen_level_id = $this->input->post('cbo_listening');
            $speak_level_id = $this->input->post('cbo_speaking');
            $read_level_id = $this->input->post('cbo_reading');
            $wirte_level_id = $this->input->post('cbo_writing');
            $data3 =array();
            foreach ($fore_lang_id as $i => $name) {
                $data3[$i] = array(
                    'teacher_id' => $teacher_id,
                    'gen_edu_id' => $gen_edu_id,
                    'fore_lang_id' => $fore_lang_id[$i],
                    'listen_level_id' => $listen_level_id[$i],
                    'speak_level_id' => $speak_level_id[$i],
                    'read_level_id' => $read_level_id[$i],
                    'wirte_level_id' => $wirte_level_id[$i],
                );
                $this->db->insert('tbl_employment_education_training', $data3[$i]);                    
            }
           
            // End save to tbl_employment_education_training



            /* for One Row
            $data4['teacher_id'] = $teacher_id;
            $data4['emp_cou_name'] = $this->input->post('course_program');
            $data4['tvet'] = $this->input->post('cbo_tvet');
            $data4['cour_type_id'] = $this->input->post('cbo_program_type');
            $data4['year'] = $this->input->post('year');
            $data4['school'] = $this->input->post('school_name');
            $data4['location'] = $this->input->post('location');
            $this->db->insert('tbl_employment_course', $data4);
            */
            $emp_cou_name = $this->input->post('course_program');
            $tvet = $this->input->post('cbo_tvet');
            $cour_type_id = $this->input->post('cbo_program_type');
            $year = $this->input->post('year');
            $school = $this->input->post('school_name');
            $location = $this->input->post('location');
            $data4 =array();           
              foreach ($emp_cou_name as $i => $name) {
                $data4[$i] = array(
                    'teacher_id' => $teacher_id,
                    'emp_cou_name' => $emp_cou_name[$i],
                    'cour_type_id' => $cour_type_id[$i],
                    'tvet' => $tvet[$i],
                    'year' => $year[$i],
                    'school' => $school[$i],
                    'location' => $location[$i],
                );
            $this->db->insert('tbl_employment_course', $data4[$i]);                    
            }

            

            // End save to tbl_employment_course


            
            $data5['teacher_id'] = $teacher_id;
            $data5['tea_exam_id'] = $this->input->post('cbo_teacher_exam');
            $data5['tea_passed'] = $this->input->post('cbo_teacher_passed');
            $data5['mem_ass_id'] = $this->input->post('cbo_association');
            $data5['teaching'] = $this->input->post('teaching');
            $data5['other'] = $this->input->post('other');
            $this->db->insert('tbl_employment_qualification', $data5);
            // End save to tbl_employment_qualification



           /* For One row
            $data6['teacher_id'] = $teacher_id;
            $data6['his_position'] = $this->input->post('his_position');
            $data6['his_start_date'] = $this->input->post('his_start_date');
            $data6['his_end_date'] = $this->input->post('his_end_date');
            $data6['his_organization'] = $this->input->post('his_organization');
            $data6['his_location'] = $this->input->post('his_location');
            $this->db->insert('tbl_employment_history', $data6);
            */  

            $his_position = $this->input->post('his_position');
            $his_start_date = $this->input->post('his_start_date');
            $his_end_date = $this->input->post('his_end_date');
            $his_organization = $this->input->post('his_organization');
            $his_location = $this->input->post('his_location');
            $data6 =array();
            foreach ($his_position as $i => $name) {
                $data6[$i] = array(
                    'teacher_id' => $teacher_id,
                    'his_position' => $his_position[$i],
                    'his_start_date' => $his_start_date[$i],
                    'his_end_date' => $his_end_date[$i],
                    'his_organization' => $his_organization[$i],
                    'his_location' => $his_location[$i],
                );
             $this->db->insert('tbl_employment_history', $data6[$i]);                    
            }
           
            // End save to tbl_employment_history

            //redirect(base_url() . 'index.php?admin/teacher/', 'refresh');

           /* 
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $teacher_id . '.jpg');
            $this->email_model->account_opening_email('teacher', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            */
        }
        if ($param1 == 'do_update') {

                            
            

            $data['kh_fname'] = $this->input->post('kh_fname');
            $data['kh_lname'] = $this->input->post('kh_lname');
            $data['en_fname'] = $this->input->post('en_fname');
            $data['en_lname'] = $this->input->post('en_lname');
            $data['sex_id'] = $this->input->post('sex');
            $data['dob'] = $this->input->post('dob');
            $data['natuonal_id'] = $this->input->post('natuonal_id');
            $data['ins_staff_id'] = $this->input->post('ins_staff_id');
            $data['num_of_dep'] = $this->input->post('num_of_dep');
            $data['marital_id'] = $this->input->post('marital');
            $data['gov_off_id'] = $this->input->post('gov_off_id');
            $data['min_off_id'] = $this->input->post('min_off_id');
            $data['pob'] = $this->input->post('pob');
            $data['cur_resident'] = $this->input->post('cur_resident');
            $data['prov_id'] = $this->input->post('cbo_province');
            $data['dist_id'] = $this->input->post('cbo_district');
            $data['comm_id'] = $this->input->post('cbo_commune');
            $data['tel_num'] = $this->input->post('tel_num');
            $data['e_mail'] = $this->input->post('e_mail');
            //$data['password'] = $this->input->post('password');
            //$data[''] = $this->input->post('conf_password');
            $data['emer_cont_name'] = $this->input->post('emer_cont_name');
            $data['emer_cont_phone'] = $this->input->post('emer_cont_phone'); 
            $data['user_avertar'] = $this->input->post('user_avertar2');     
                if ($this->input->post('user_avertar2') == '') {
                    $profile_image = uniqid(time(), true).'.jpg';
                    $data['user_avertar'] = $profile_image;           
                    move_uploaded_file($_FILES['user_avertar']['tmp_name'], './uploads/teacher_image/' . $profile_image);           
                }             
           // End save to tbl_teacher


            $data2['emp_start_date'] = $this->input->post('emp_start_date');
            $data2['emp_end_date'] = $this->input->post('emp_end_date');
            $data2['emp_type_id'] = $this->input->post('emp_type');
            $data2['cont_value'] = $this->input->post('cont_value');
            $data2['duty_type_id'] = $this->input->post('duty_type');
            $data2['non_teach_staff_duty_id'] = $this->input->post('non_teach_staff_duty');
            $data2['staff_work_sch'] = $this->input->post('staff_work_sch');
            // End save to tbl_employment

            $data5['tea_exam_id'] = $this->input->post('cbo_teacher_exam');
            $data5['tea_passed'] = $this->input->post('cbo_teacher_passed');
            $data5['mem_ass_id'] = $this->input->post('cbo_association');
            $data5['teaching'] = $this->input->post('teaching');
            $data5['other'] = $this->input->post('other');
            // End save to tbl_employment_qualification           
            
             $teacher_id = $param2;          
             $table = array
            (
                'tbl_employment_history',                
                'tbl_employment_course',
                'tbl_employment_education_training'
            );
            $this->db->where('teacher_id', $teacher_id); 
            $this->db->delete($table);                     
            $this->db->update('tbl_employment_qualification', $data5);          
            $this->db->update('tbl_employment', $data2);
            $this->db->update('teacher', $data);

            $gen_edu_id = $this->input->post('cbo_general_education');
            $fore_lang_id = $this->input->post('cbo_language');
            $listen_level_id = $this->input->post('cbo_listening');
            $speak_level_id = $this->input->post('cbo_speaking');
            $read_level_id = $this->input->post('cbo_reading');
            $wirte_level_id = $this->input->post('cbo_writing');
            $data3 =array();
            foreach ($fore_lang_id as $i => $name) {
                $data3[$i] = array(
                    'teacher_id' => $teacher_id,
                    'gen_edu_id' => $gen_edu_id,
                    'fore_lang_id' => $fore_lang_id[$i],
                    'listen_level_id' => $listen_level_id[$i],
                    'speak_level_id' => $speak_level_id[$i],
                    'read_level_id' => $read_level_id[$i],
                    'wirte_level_id' => $wirte_level_id[$i],
                );
                $this->db->insert('tbl_employment_education_training', $data3[$i]);                    
            }


            // End save to tbl_employment_education_training
            
            $emp_cou_name = $this->input->post('course_program');
            $tvet = $this->input->post('cbo_tvet');
            $cour_type_id = $this->input->post('cbo_program_type');
            $year = $this->input->post('year');
            $school = $this->input->post('school_name');
            $location = $this->input->post('location');
            $data4 =array();           
              foreach ($emp_cou_name as $i => $name) {
                $data4[$i] = array(
                    'teacher_id' => $teacher_id,
                    'emp_cou_name' => $emp_cou_name[$i],
                    'tvet' => $tvet[$i],
                    'cour_type_id' => $cour_type_id[$i],
                    'year' => $year[$i],
                    'school' => $school[$i],
                    'location' => $location[$i],
                );
            $this->db->insert('tbl_employment_course', $data4[$i]);                    
            }
           
            // End save to tbl_employment_course
            
           
            $his_position = $this->input->post('his_position');
            $his_start_date = $this->input->post('his_start_date');
            $his_end_date = $this->input->post('his_end_date');
            $his_organization = $this->input->post('his_organization');
            $his_location = $this->input->post('his_location');
            $data6 =array();
            foreach ($his_position as $i => $name) {
                $data6[$i] = array(
                    'teacher_id' => $teacher_id,
                    'his_position' => $his_position[$i],
                    'his_start_date' => $his_start_date[$i],
                    'his_end_date' => $his_end_date[$i],
                    'his_organization' => $his_organization[$i],
                    'his_location' => $his_location[$i],
                );
             $this->db->insert('tbl_employment_history', $data6[$i]);                    
            }
            // End save to tbl_employment_history


            

             redirect(base_url() . 'index.php?admin/teacher/', 'refresh');

            
           
           
          

        } else if ($param1 == 'personal_profile') {
            $page_data['personal_profile']   = true;
            $page_data['current_teacher_id'] = $param2;
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('teacher', array(
                'teacher_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $table = array
            (
                'tbl_employment_history',
                'tbl_employment_qualification',
                'tbl_employment_course',
                'tbl_employment_education_training',
                'tbl_employment','teacher'
            );
            $this->db->where('teacher_id', $param2);
            $this->db->delete($table);
            redirect(base_url() . 'index.php?admin/teacher/', 'refresh');
        }
       
        $page_data['page_name']  = 'teacher';
        $page_data['page_title'] = get_phrase('manage_teacher');

        // Me add
       
        $page_data['sex'] = $this->m_teacher->get_sex();
        $page_data['marital'] = $this->m_teacher->get_marital();
        $page_data['province'] = $this->m_teacher->get_province();
        $page_data['district'] = $this->m_teacher->get_district();
        $page_data['commune'] = $this->m_teacher->get_commune();
        $page_data['employment_type'] = $this->m_teacher->get_employment_type();
        $page_data['duty_type'] = $this->m_teacher->get_duty_type();
        $page_data['duty_teaching'] = $this->m_teacher->get_duty_teaching();
        $page_data['schedule'] = $this->m_teacher->get_schedule();
        $page_data['general_education'] = $this->m_teacher->get_general_education();
        $page_data['foreign_language'] = $this->m_teacher->get_foreign_language();
        $page_data['foreign_language_level'] = $this->m_teacher->get_foreign_language_level();
        $page_data['course_type'] = $this->m_teacher->get_course_type();
        $page_data['teacher_exam'] = $this->m_teacher->get_teacher_exam();
        $page_data['member_of_pro_association'] = $this->m_teacher->get_member_of_pro_association();
        $page_data['teachers'] = $this->m_teacher->get_teacher_view();

        $this->load->view('index', $page_data);
    }
    
    /****MANAGE SUBJECTS*****/
    function subject($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']       = $this->input->post('name');
            $data['class_id']   = $this->input->post('class_id');
            $data['teacher_id'] = $this->input->post('teacher_id');
            $this->db->insert('subject', $data);
            redirect(base_url() . 'index.php?admin/subject/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']       = $this->input->post('name');
            $data['class_id']   = $this->input->post('class_id');
            $data['teacher_id'] = $this->input->post('teacher_id');
            
            $this->db->where('subject_id', $param2);
            $this->db->update('subject', $data);
            redirect(base_url() . 'index.php?admin/subject/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('subject', array(
                'subject_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('subject_id', $param2);
            $this->db->delete('subject');
            redirect(base_url() . 'index.php?admin/subject/', 'refresh');
        }
        $page_data['subjects']   = $this->db->get('subject')->result_array();
        $page_data['page_name']  = 'subject';
        $page_data['page_title'] = get_phrase('manage_subject');
        $this->load->view('index', $page_data);
    }
    
    /****MANAGE CLASSES*****/
    function classes($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']         = $this->input->post('name');
            $data['name_numeric'] = $this->input->post('name_numeric');
            $data['teacher_id']   = $this->input->post('teacher_id');
            $this->db->insert('class', $data);
            redirect(base_url() . 'index.php?admin/classes/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']         = $this->input->post('name');
            $data['name_numeric'] = $this->input->post('name_numeric');
            $data['teacher_id']   = $this->input->post('teacher_id');
            
            $this->db->where('class_id', $param2);
            $this->db->update('class', $data);
            redirect(base_url() . 'index.php?admin/classes/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('class', array(
                'class_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('class_id', $param2);
            $this->db->delete('class');
            redirect(base_url() . 'index.php?admin/classes/', 'refresh');
        }
        $page_data['classes']    = $this->db->get('class')->result_array();
        $page_data['page_name']  = 'class';
        $page_data['page_title'] = get_phrase('manage_class');
        $this->load->view('index', $page_data);
    }
    
    /****MANAGE EXAMS*****/
    function exam($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']    = $this->input->post('name');
            $data['date']    = $this->input->post('date');
            $data['comment'] = $this->input->post('comment');
            $this->db->insert('exam', $data);
            redirect(base_url() . 'index.php?admin/exam/', 'refresh');
        }
        if ($param1 == 'edit' && $param2 == 'do_update') {
            $data['name']    = $this->input->post('name');
            $data['date']    = $this->input->post('date');
            $data['comment'] = $this->input->post('comment');
            
            $this->db->where('exam_id', $param3);
            $this->db->update('exam', $data);
            redirect(base_url() . 'index.php?admin/exam/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('exam', array(
                'exam_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('exam_id', $param2);
            $this->db->delete('exam');
            redirect(base_url() . 'index.php?admin/exam/', 'refresh');
        }
        $page_data['exams']      = $this->db->get('exam')->result_array();
        $page_data['page_name']  = 'exam';
        $page_data['page_title'] = get_phrase('manage_exam');
        $this->load->view('index', $page_data);
    }
    
    /****MANAGE EXAM MARKS*****/
    function marks($exam_id = '', $class_id = '', $subject_id = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($this->input->post('operation') == 'selection') {
            $page_data['exam_id']    = $this->input->post('exam_id');
            $page_data['class_id']   = $this->input->post('class_id');
            $page_data['subject_id'] = $this->input->post('subject_id');
            
            if ($page_data['exam_id'] > 0 && $page_data['class_id'] > 0 && $page_data['subject_id'] > 0) {
                redirect(base_url() . 'index.php?admin/marks/' . $page_data['exam_id'] . '/' . $page_data['class_id'] . '/' . $page_data['subject_id'], 'refresh');
            } else {
                $this->session->set_flashdata('mark_message', 'Choose exam, class and subject');
                redirect(base_url() . 'index.php?admin/marks/', 'refresh');
            }
        }
        if ($this->input->post('operation') == 'update') {
            $data['mark_obtained'] = $this->input->post('mark_obtained');
            $data['attendance']    = $this->input->post('attendance');
            $data['comment']       = $this->input->post('comment');
            
            $this->db->where('mark_id', $this->input->post('mark_id'));
            $this->db->update('mark', $data);
            
            redirect(base_url() . 'index.php?admin/marks/' . $this->input->post('exam_id') . '/' . $this->input->post('class_id') . '/' . $this->input->post('subject_id'), 'refresh');
        }
        $page_data['exam_id']    = $exam_id;
        $page_data['class_id']   = $class_id;
        $page_data['subject_id'] = $subject_id;
        
        $page_data['page_info'] = 'Exam marks';
        
        $page_data['page_name']  = 'marks';
        $page_data['page_title'] = get_phrase('manage_exam_marks');
        $this->load->view('index', $page_data);
    }
    
    
    /****MANAGE GRADES*****/
    function grade($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['grade_point'] = $this->input->post('grade_point');
            $data['mark_from']   = $this->input->post('mark_from');
            $data['mark_upto']   = $this->input->post('mark_upto');
            $data['comment']     = $this->input->post('comment');
            $this->db->insert('grade', $data);
            redirect(base_url() . 'index.php?admin/grade/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['grade_point'] = $this->input->post('grade_point');
            $data['mark_from']   = $this->input->post('mark_from');
            $data['mark_upto']   = $this->input->post('mark_upto');
            $data['comment']     = $this->input->post('comment');
            
            $this->db->where('grade_id', $param2);
            $this->db->update('grade', $data);
            redirect(base_url() . 'index.php?admin/grade/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('grade', array(
                'grade_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('grade_id', $param2);
            $this->db->delete('grade');
            redirect(base_url() . 'index.php?admin/grade/', 'refresh');
        }
        $page_data['grades']     = $this->db->get('grade')->result_array();
        $page_data['page_name']  = 'grade';
        $page_data['page_title'] = get_phrase('manage_grade');
        $this->load->view('index', $page_data);
    }
    
    /**********MANAGING CLASS ROUTINE******************/
    function class_routine($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['class_id']   = $this->input->post('class_id');
            $data['subject_id'] = $this->input->post('subject_id');
            $data['time_start'] = $this->input->post('time_start') + (12 * ($this->input->post('starting_ampm') - 1));
            $data['time_end']   = $this->input->post('time_end') + (12 * ($this->input->post('ending_ampm') - 1));
            $data['day']        = $this->input->post('day');
            $this->db->insert('class_routine', $data);
            redirect(base_url() . 'index.php?admin/class_routine/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['class_id']   = $this->input->post('class_id');
            $data['subject_id'] = $this->input->post('subject_id');
            $data['time_start'] = $this->input->post('time_start') + (12 * ($this->input->post('starting_ampm') - 1));
            $data['time_end']   = $this->input->post('time_end') + (12 * ($this->input->post('ending_ampm') - 1));
            $data['day']        = $this->input->post('day');
            
            $this->db->where('class_routine_id', $param2);
            $this->db->update('class_routine', $data);
            redirect(base_url() . 'index.php?admin/class_routine/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('class_routine', array(
                'class_routine_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('class_routine_id', $param2);
            $this->db->delete('class_routine');
            redirect(base_url() . 'index.php?admin/class_routine/', 'refresh');
        }
        $page_data['page_name']  = 'class_routine';
        $page_data['page_title'] = get_phrase('manage_class_routine');
        $this->load->view('index', $page_data);
    }
    /******MANAGE BILLING / INVOICES WITH STATUS*****/
    function invoice($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($param1 == 'create') {
            $data['student_id']         = $this->input->post('student_id');
            $data['title']              = $this->input->post('title');
            $data['description']        = $this->input->post('description');
            $data['amount']             = $this->input->post('amount');
            $data['status']             = $this->input->post('status');
            $data['creation_timestamp'] = strtotime($this->input->post('date'));
            
            $this->db->insert('invoice', $data);
            redirect(base_url() . 'index.php?admin/invoice', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['student_id']         = $this->input->post('student_id');
            $data['title']              = $this->input->post('title');
            $data['description']        = $this->input->post('description');
            $data['amount']             = $this->input->post('amount');
            $data['status']             = $this->input->post('status');
            $data['creation_timestamp'] = strtotime($this->input->post('date'));
            
            $this->db->where('invoice_id', $param2);
            $this->db->update('invoice', $data);
            redirect(base_url() . 'index.php?admin/invoice', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('invoice', array(
                'invoice_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('invoice_id', $param2);
            $this->db->delete('invoice');
            redirect(base_url() . 'index.php?admin/invoice', 'refresh');
        }
        $page_data['page_name']  = 'invoice';
        $page_data['page_title'] = get_phrase('manage_invoice/payment');
        $this->db->order_by('creation_timestamp', 'desc');
        $page_data['invoices'] = $this->db->get('invoice')->result_array();
        $this->load->view('index', $page_data);
    }
    /**********MANAGE LIBRARY / BOOKS********************/
    function book($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['price']       = $this->input->post('price');
            $data['author']      = $this->input->post('author');
            $data['class_id']    = $this->input->post('class_id');
            $data['status']      = $this->input->post('status');
            $this->db->insert('book', $data);
            redirect(base_url() . 'index.php?admin/book', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['price']       = $this->input->post('price');
            $data['author']      = $this->input->post('author');
            $data['class_id']    = $this->input->post('class_id');
            $data['status']      = $this->input->post('status');
            
            $this->db->where('book_id', $param2);
            $this->db->update('book', $data);
            redirect(base_url() . 'index.php?admin/book', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('book', array(
                'book_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('book_id', $param2);
            $this->db->delete('book');
            redirect(base_url() . 'index.php?admin/book', 'refresh');
        }
        $page_data['books']      = $this->db->get('book')->result_array();
        $page_data['page_name']  = 'book';
        $page_data['page_title'] = get_phrase('manage_library_books');
        $this->load->view('index', $page_data);
        
    }
    /**********MANAGE TRANSPORT / VEHICLES / ROUTES********************/
    function transport($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['route_name']        = $this->input->post('route_name');
            $data['number_of_vehicle'] = $this->input->post('number_of_vehicle');
            $data['description']       = $this->input->post('description');
            $data['route_fare']        = $this->input->post('route_fare');
            $this->db->insert('transport', $data);
            redirect(base_url() . 'index.php?admin/transport', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['route_name']        = $this->input->post('route_name');
            $data['number_of_vehicle'] = $this->input->post('number_of_vehicle');
            $data['description']       = $this->input->post('description');
            $data['route_fare']        = $this->input->post('route_fare');
            
            $this->db->where('transport_id', $param2);
            $this->db->update('transport', $data);
            redirect(base_url() . 'index.php?admin/transport', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('transport', array(
                'transport_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('transport_id', $param2);
            $this->db->delete('transport');
            redirect(base_url() . 'index.php?admin/transport', 'refresh');
        }
        $page_data['transports'] = $this->db->get('transport')->result_array();
        $page_data['page_name']  = 'transport';
        $page_data['page_title'] = get_phrase('manage_transport');
        $this->load->view('index', $page_data);
        
    }
    /**********MANAGE DORMITORY / HOSTELS / ROOMS ********************/
    function dormitory($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']           = $this->input->post('name');
            $data['number_of_room'] = $this->input->post('number_of_room');
            $data['description']    = $this->input->post('description');
            $this->db->insert('dormitory', $data);
            redirect(base_url() . 'index.php?admin/dormitory', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']           = $this->input->post('name');
            $data['number_of_room'] = $this->input->post('number_of_room');
            $data['description']    = $this->input->post('description');
            
            $this->db->where('dormitory_id', $param2);
            $this->db->update('dormitory', $data);
            redirect(base_url() . 'index.php?admin/dormitory', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('dormitory', array(
                'dormitory_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('dormitory_id', $param2);
            $this->db->delete('dormitory');
            redirect(base_url() . 'index.php?admin/dormitory', 'refresh');
        }
        $page_data['dormitories'] = $this->db->get('dormitory')->result_array();
        $page_data['page_name']   = 'dormitory';
        $page_data['page_title']  = get_phrase('manage_dormitory');
        $this->load->view('index', $page_data);
        
    }
    
    /***MANAGE EVENT / NOTICEBOARD, WILL BE SEEN BY ALL ACCOUNTS DASHBOARD**/
    function noticeboard($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($param1 == 'create') {
            $data['notice_title']     = $this->input->post('notice_title');
            $data['notice']           = $this->input->post('notice');
            $data['create_timestamp'] = strtotime($this->input->post('create_timestamp'));
            $this->db->insert('noticeboard', $data);
            redirect(base_url() . 'index.php?admin/noticeboard/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['notice_title']     = $this->input->post('notice_title');
            $data['notice']           = $this->input->post('notice');
            $data['create_timestamp'] = strtotime($this->input->post('create_timestamp'));
            $this->db->where('notice_id', $param2);
            $this->db->update('noticeboard', $data);
            $this->session->set_flashdata('flash_message', get_phrase('notice_updated'));
            redirect(base_url() . 'index.php?admin/noticeboard/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('noticeboard', array(
                'notice_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('notice_id', $param2);
            $this->db->delete('noticeboard');
            redirect(base_url() . 'index.php?admin/noticeboard/', 'refresh');
        }
        $page_data['page_name']  = 'noticeboard';
        $page_data['page_title'] = get_phrase('manage_noticeboard');
        $page_data['notices']    = $this->db->get('noticeboard')->result_array();
        $this->load->view('index', $page_data);
    }
    
    /*****SITE/SYSTEM SETTINGS*********/
    function system_settings($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        
        if ($param2 == 'do_update') {
            $this->db->where('type', $param1);
            $this->db->update('settings', array(
                'description' => $this->input->post('description')
            ));
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'index.php?admin/system_settings/', 'refresh');
        }
        if ($param1 == 'upload_logo') {
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'index.php?admin/system_settings/', 'refresh');
        }
        $page_data['page_name']  = 'system_settings';
        $page_data['page_title'] = get_phrase('system_settings');
        $page_data['settings']   = $this->db->get('settings')->result_array();
        $this->load->view('index', $page_data);
    }
    
    /*****LANGUAGE SETTINGS*********/
    function manage_language($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        
        if ($param1 == 'edit_phrase') {
            $page_data['edit_profile']  = $param2;  
        }
        if ($param1 == 'update_phrase') {
            $language   =   $param2;
            $total_phrase   =   $this->input->post('total_phrase');
            for($i = 1 ; $i < $total_phrase ; $i++)
            {
                //$data[$language]  =   $this->input->post('phrase').$i;
                $this->db->where('phrase_id' , $i);
                $this->db->update('language' , array($language => $this->input->post('phrase'.$i)));
            }
            redirect(base_url() . 'index.php?admin/manage_language/edit_phrase/'.$language, 'refresh');
        }
        if ($param1 == 'do_update') {
            $language        = $this->input->post('language');
            $data[$language] = $this->input->post('phrase');
            $this->db->where('phrase_id', $param2);
            $this->db->update('language', $data);
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'index.php?admin/manage_language/', 'refresh');
        }
        if ($param1 == 'add_phrase') {
            $data['phrase'] = $this->input->post('phrase');
            $this->db->insert('language', $data);
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'index.php?admin/manage_language/', 'refresh');
        }
        if ($param1 == 'add_language') {
            $language = $this->input->post('language');
            $this->load->dbforge();
            $fields = array(
                $language => array(
                    'type' => 'LONGTEXT'
                )
            );
            $this->dbforge->add_column('language', $fields);
            
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'index.php?admin/manage_language/', 'refresh');
        }
        if ($param1 == 'delete_language') {
            $language = $param2;
            $this->load->dbforge();
            $this->dbforge->drop_column('language', $language);
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            
            redirect(base_url() . 'index.php?admin/manage_language/', 'refresh');
        }
        $page_data['page_name']        = 'manage_language';
        $page_data['page_title']       = get_phrase('manage_language');
        //$page_data['language_phrases'] = $this->db->get('language')->result_array();
        $this->load->view('index', $page_data); 
    }
    
    /*****BACKUP / RESTORE / DELETE DATA PAGE**********/
    function backup_restore($operation = '', $type = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($operation == 'create') {
            $this->crud_model->create_backup($type);
        }
        if ($operation == 'restore') {
            $this->crud_model->restore_backup();
            $this->session->set_flashdata('backup_message', 'Backup Restored');
            redirect(base_url() . 'index.php?admin/backup_restore/', 'refresh');
        }
        if ($operation == 'delete') {
            $this->crud_model->truncate($type);
            $this->session->set_flashdata('backup_message', 'Data removed');
            redirect(base_url() . 'index.php?admin/backup_restore/', 'refresh');
        }
        
        $page_data['page_info']  = 'Create backup / restore from backup';
        $page_data['page_name']  = 'backup_restore';
        $page_data['page_title'] = get_phrase('manage_backup_restore');
        $this->load->view('index', $page_data);
    }
    
    /******MANAGE OWN PROFILE AND CHANGE PASSWORD***/
    function manage_profile($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($param1 == 'update_profile_info') {
            $data['name']  = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            
            $this->db->where('admin_id', $this->session->userdata('admin_id'));
            $this->db->update('admin', $data);
            $this->session->set_flashdata('flash_message', get_phrase('account_updated'));
            redirect(base_url() . 'index.php?admin/manage_profile/', 'refresh');
        }
        if ($param1 == 'change_password') {
            $data['password']             = $this->input->post('password');
            $data['new_password']         = $this->input->post('new_password');
            $data['confirm_new_password'] = $this->input->post('confirm_new_password');
            
            $current_password = $this->db->get_where('admin', array(
                'admin_id' => $this->session->userdata('admin_id')
            ))->row()->password;
            if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
                $this->db->where('admin_id', $this->session->userdata('admin_id'));
                $this->db->update('admin', array(
                    'password' => $data['new_password']
                ));
                $this->session->set_flashdata('flash_message', get_phrase('password_updated'));
            } else {
                $this->session->set_flashdata('flash_message', get_phrase('password_mismatch'));
            }
            redirect(base_url() . 'index.php?admin/manage_profile/', 'refresh');
        }
        $page_data['page_name']  = 'manage_profile';
        $page_data['page_title'] = get_phrase('manage_profile');
        $page_data['edit_data']  = $this->db->get_where('admin', array(
            'admin_id' => $this->session->userdata('admin_id')
        ))->result_array();
        $this->load->view('index', $page_data);
    }
    

}
