<?php
   //initilize variable
   $maritialStatus = $_POST['cc_maritial'];
   $emailAddress = $_POST["cc_email"];
      
   $cc_spouse_education = "";
   
   $cc_spouse_first_reading = "";
   $cc_spouse_first_writing = "";
   $cc_spouse_first_listening = "";
   $cc_spouse_first_speaking = "";
   
   $cc_spouse_work_exp_inside = "";
   
   $cc_spouse_education_mval = 0;
   
   $cc_spouse_first_reading_mval = 0;
   $cc_spouse_first_writing_mval = 0;
   $cc_spouse_first_listening_mval = 0;
   $cc_spouse_first_speaking_mval = 0;
   
   $cc_spouse_work_exp_inside_mval = 0;
   
   
   if($maritialStatus == "single") {
       $cc_age = $_POST['cc_age'];
       $cc_age_mval = !empty($_POST['cc_age_mval']) ? $_POST['cc_age_mval'] : 0;
       $cc_education = $_POST['cc_education'];
       $cc_education_mval = !empty($_POST['cc_education_mval']) ? $_POST['cc_education_mval'] : 0;
       
       $cc_first_reading = $_POST['cc_first_reading'];
       $cc_first_reading_mval = !empty($_POST['cc_first_reading_mval']) ? $_POST['cc_first_reading_mval'] : 0;
       $cc_first_writing = $_POST['cc_first_writing'];
       $cc_first_writing_mval = !empty($_POST['cc_first_writing_mval']) ? $_POST['cc_first_writing_mval'] : 0;
       $cc_first_listening = $_POST['cc_first_listening'];
       $cc_first_listening_mval = !empty($_POST['cc_first_listening_mval']) ? $_POST['cc_first_listening_mval'] : 0;
       $cc_first_speaking = $_POST['cc_first_speaking'];
       $cc_first_speaking_mval = !empty($_POST['cc_first_speaking_mval']) ? $_POST['cc_first_speaking_mval'] : 0;
       
       $cc_second_reading = $_POST['cc_second_reading'];
       $cc_second_reading_mval = !empty($_POST['cc_second_reading_mval']) ? $_POST['cc_second_reading_mval'] : 0;
       $cc_second_writing = $_POST['cc_second_writing'];
       $cc_second_writing_mval = !empty($_POST['cc_second_writing_mval']) ? $_POST['cc_second_writing_mval'] : 0;
       $cc_second_listening = $_POST['cc_second_listening'];
       $cc_second_listening_mval = !empty($_POST['cc_second_listening_mval']) ? $_POST['cc_second_listening_mval'] : 0;
       $cc_second_speaking = $_POST['cc_second_speaking'];
       $cc_second_speaking_mval = !empty($_POST['cc_second_speaking_mval']) ? $_POST['cc_second_speaking_mval'] : 0;
       
       $cc_canada_work_exp = $_POST['cc_canada_work_exp_single'];
       $cc_canada_work_exp_mval = !empty($_POST['cc_canada_work_exp_single_mval']) ? $_POST['cc_canada_work_exp_single_mval'] : 0;
       
   }elseif($maritialStatus == "married") {
       $cc_age = $_POST['cc_age_fsp'];
       $cc_age_mval = !empty($_POST['cc_age_fsp_mval']) ? $_POST['cc_age_fsp_mval'] : 0;
       $cc_education = $_POST['cc_education_fsp'];
       $cc_education_mval = !empty($_POST['cc_education_fsp_mval']) ? $_POST['cc_education_fsp_mval'] : 0;
       
       $cc_first_reading = $_POST['cc_first_reading_fsp'];
       $cc_first_reading_mval = !empty($_POST['cc_first_reading_fsp_mval']) ? $_POST['cc_first_reading_fsp_mval'] : 0;
       $cc_first_writing = $_POST['cc_first_speaking_fsp'];
       $cc_first_writing_mval = !empty($_POST['cc_first_writing_fsp_mval']) ? $_POST['cc_first_writing_fsp_mval'] : 0;
       $cc_first_listening = $_POST['cc_first_listening_fsp'];
       $cc_first_listening_mval = !empty($_POST['cc_first_listening_fsp_mval']) ? $_POST['cc_first_listening_fsp_mval'] : 0;
       $cc_first_speaking = $_POST['cc_first_speaking_fsp'];
       $cc_first_speaking_mval = !empty($_POST['cc_first_speaking_fsp_mval']) ? $_POST['cc_first_speaking_fsp_mval'] : 0;
       
       $cc_second_reading = $_POST['cc_second_reading_fsp'];
       $cc_second_reading_mval = !empty($_POST['cc_second_reading_fsp_mval']) ? $_POST['cc_second_reading_fsp_mval'] : 0;
       $cc_second_writing = $_POST['cc_second_writing_fsp'];
       $cc_second_writing_mval = !empty($_POST['cc_second_writing_fsp_mval']) ? $_POST['cc_second_writing_fsp_mval'] : 0;
       $cc_second_listening = $_POST['cc_second_listening_fsp'];
       $cc_second_listening_mval = !empty($_POST['cc_second_listening_fsp_mval']) ? $_POST['cc_second_listening_fsp_mval'] : 0;
       $cc_second_speaking = $_POST['cc_second_speaking_fsp'];
       $cc_second_speaking_mval = !empty($_POST['cc_second_speaking_fsp_mval']) ? $_POST['cc_second_speaking_fsp_mval'] : 0;
       
       $cc_canada_work_exp = $_POST['cc_canada_work_exp_spouse'];
       $cc_canada_work_exp_mval = !empty($_POST['cc_canada_work_exp_spouse_mval']) ? $_POST['cc_canada_work_exp_spouse_mval'] : 0;
       
       $cc_spouse_education = $_POST['cc_spouse_education'];
       $cc_spouse_education_mval = !empty($_POST['cc_spouse_education_mval']) ? $_POST['cc_spouse_education_mval'] : 0;
       
       $cc_spouse_first_reading = $_POST['cc_spouse_education'];
       $cc_spouse_first_reading_mval = !empty($_POST['cc_spouse_first_reading_mval']) ? $_POST['cc_spouse_first_reading_mval'] : 0;
       $cc_spouse_first_writing = $_POST['cc_spouse_first_writing'];
       $cc_spouse_first_writing_mval = !empty($_POST['cc_spouse_first_writing_mval']) ? $_POST['cc_spouse_first_writing_mval'] : 0;
       $cc_spouse_first_listening = $_POST['cc_spouse_first_listening'];
       $cc_spouse_first_listening_mval = !empty($_POST['cc_spouse_first_listening_mval']) ? $_POST['cc_spouse_first_listening_mval'] : 0;
       $cc_spouse_first_speaking = $_POST['cc_spouse_first_speaking'];
       $cc_spouse_first_speaking_mval = !empty($_POST['cc_spouse_first_speaking_mval']) ? $_POST['cc_spouse_first_speaking_mval'] : 0;
       
       $cc_spouse_work_exp_inside = $_POST['cc_spouse_work_exp_inside'];
       $cc_spouse_work_exp_inside_mval = !empty($_POST['cc_spouse_work_exp_inside_mval']) ? $_POST['cc_spouse_work_exp_inside_mval'] : 0;
       
   }else {
       die("You dont't select your marritial status.");
   }
   
   $cc_edu_lang = setSingleData( $_POST['cc_edu_lang_low'], $_POST['cc_edu_lang_high']);
   $cc_edu_lang_mval = setSingleData( $_POST['cc_edu_lang_low_mval'], $_POST['cc_edu_lang_high_mval']);
   $cc_edu_ca_work_exp = setSingleData( $_POST['cc_edu_ca_work_exp_low'], $_POST['cc_edu_ca_work_exp_high']);
   $cc_edu_ca_work_exp_mval = setSingleData( $_POST['cc_edu_ca_work_exp_low_mval'], $_POST['cc_edu_ca_work_exp_high_mval']);
   $cc_foreign_work_exp = setSingleData( $_POST['cc_foreign_work_exp_low'], $_POST['cc_foreign_work_exp_high']);
   $cc_foreign_work_exp_mval = setSingleData( $_POST['cc_foreign_work_exp_low_mval'], $_POST['cc_foreign_work_exp_high_mval']);
   $cc_canada_foreign_work_exp = setSingleData( $_POST['cc_canada_foreign_work_exp_low'], $_POST['cc_canada_foreign_work_exp_high']);
   $cc_canada_foreign_work_exp_mval = setSingleData( $_POST['cc_canada_foreign_work_exp_low_mval'], $_POST['cc_canada_foreign_work_exp_high_mval']);
   $cc_c_trade = setSingleData( $_POST['cc_c_trade_l'], $_POST['cc_c_trade_h']);
   $cc_c_trade_mval = !empty($_POST['cc_c_trade_l_mval']) ? $_POST['cc_c_trade_h_mval'] : 0;
   $cc_has_bs = $_POST['cc_has_bs'];
   $cc_has_bs_mval = !empty($_POST['cc_has_bs_mval']) ? $_POST['cc_has_bs_mval'] : 0;
   $cc_french_lang_skills = setSingleData( $_POST['cc_french_lang_skills_low'], $_POST['cc_french_lang_skills_high']);
   $cc_french_lang_skills_mval = setSingleData( $_POST['cc_french_lang_skills_low_mval'], $_POST['cc_french_lang_skills_high_mval']);

   $cc_study_canada = $_POST['cc_study_canada'];
   $cc_study_canada_mval = !empty($_POST['cc_study_canada_mval']) ? $_POST['cc_study_canada_mval'] : 0;
   $cc_work_permit = $_POST['cc_work_permit'];
   $cc_work_permit_mval = !empty($_POST['cc_work_permit_mval']) ? $_POST['cc_work_permit_mval'] : 0;
   $cc_pnp = $_POST['cc_pnp'];
   $cc_pnp_mval = !empty($_POST['cc_pnp_mval']) ? $_POST['cc_pnp_mval'] : 0;
   
   $totalResult = $_POST['cc_total_points'];
   $coreFactor = $_POST['cc_core_factor'];
   $spouseFactor = $_POST['cc_spouse_factor'];
   $transAbility = $_POST['cc_trans_ability'];
   $addiPoint = $_POST['cc_addi_points'];