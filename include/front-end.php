<?php
    global $wp;
?>
<form id="crsCForm" method="post" action="<?php echo CRSC_URI.'include/CrsSendMail.php';?>">
     <header class="crscf_header">
         <h3>Calculate your CRS points to determine if you are a good candidate for Permanent Residence in Canada through Express Entry. You will require a score of 440+ points</h3>
         <p>Enter your email address and click the <span class="crs_bold_word">submit</span> button to receive a detailed CRS score summary.</p>
     </header>
     <section class="crscf_human_capital_factors">
         <h1>Core / human capital factors</h1>
         <div class="crscf_single_field crscf_maritial_field clearfix">
             <label class="float-left">Marital Status </label>
             <div class="crs_wrapper float-left">
	             <label>
	                 <input type="radio" name="cc_maritial" value="single" data-maritial="0" checked>
	                 Single
	             </label>
	             <label>
	                 <input type="radio" name="cc_maritial" value="married" data-maritial="1">
	                 Married
	             </label>
             </div>
         </div>
         <div class="crscf_single_field crscf_age_field clearfix" data-single="true">
             <label class="float-left">Age</label>
             <div class="float-left">
	             <select name="cc_age" data-select>
	                <option data-calcvalue="0" value=""> Select </option>
	                <option data-calcvalue="0" value="17 or younger"> 17 or younger </option>
	                <option data-calcvalue="99" value="18"> 18 </option>
	                <option data-calcvalue="105" value="19"> 19 </option>
	                <option data-calcvalue="110" value="20"> 20 </option>
	                <option data-calcvalue="110" value="21"> 21 </option>
	                <option data-calcvalue="110" value="22"> 22 </option>
	                <option data-calcvalue="110" value="23"> 23 </option>
	                <option data-calcvalue="110" value="24"> 24 </option>
	                <option data-calcvalue="110" value="25"> 25 </option>
	                <option data-calcvalue="110" value="26"> 26 </option>
	                <option data-calcvalue="110" value="27"> 27 </option>
	                <option data-calcvalue="110" value="28"> 28 </option>
	                <option data-calcvalue="110" value="29"> 29 </option>
	                <option data-calcvalue="105" value="30"> 30 </option>
	                <option data-calcvalue="99" value="31"> 31 </option>
	                <option data-calcvalue="94" value="32"> 32 </option>
	                <option data-calcvalue="88" value="33"> 33 </option>
	                <option data-calcvalue="83" value="34"> 34 </option>
	                <option data-calcvalue="77" value="35"> 35 </option>
	                <option data-calcvalue="72" value="36"> 36 </option>
	                <option data-calcvalue="66" value="37"> 37 </option>
	                <option data-calcvalue="61" value="38"> 38 </option>
	                <option data-calcvalue="55" value="39"> 39 </option>
	                <option data-calcvalue="50" value="40"> 40 </option>
	                <option data-calcvalue="39" value="41"> 41 </option>
	                <option data-calcvalue="28" value="42"> 42 </option>
	                <option data-calcvalue="17" value="43"> 43 </option>
	                <option data-calcvalue="6" value="44"> 44 </option>
	                <option data-calcvalue="0" value="45 or older"> 45 or older </option>
	             </select>
                 <input type="hidden" name="cc_age_mval" id="cc_age_mval" value="">
             </div>
         </div>
         <div class="crscf_single_field crscf_age_field clearfix" data-spouse="false">
             <label class="float-left">Age</label>
             <div class="float-left">
	             <select name="cc_age_fsp" data-select>
	                <option data-calcvalue="0" value=""> Select </option>
	                <option data-calcvalue="0" value="17 or younger"> 17 or younger </option>
	                <option data-calcvalue="90" value="18"> 18 </option>
	                <option data-calcvalue="95" value="19"> 19 </option>
	                <option data-calcvalue="100" value="20"> 20 </option>
	                <option data-calcvalue="100" value="21"> 21 </option>
	                <option data-calcvalue="100" value="22"> 22 </option>
	                <option data-calcvalue="100" value="23"> 23 </option>
	                <option data-calcvalue="100" value="24"> 24 </option>
	                <option data-calcvalue="100" value="25"> 25 </option>
	                <option data-calcvalue="100" value="26"> 26 </option>
	                <option data-calcvalue="100" value="27"> 27 </option>
	                <option data-calcvalue="100" value="28"> 28 </option>
	                <option data-calcvalue="100" value="29"> 29 </option>
	                <option data-calcvalue="95" value="30"> 30 </option>
	                <option data-calcvalue="90" value="31"> 31 </option>
	                <option data-calcvalue="85" value="32"> 32 </option>
	                <option data-calcvalue="80" value="33"> 33 </option>
	                <option data-calcvalue="75" value="34"> 34 </option>
	                <option data-calcvalue="70" value="35"> 35 </option>
	                <option data-calcvalue="65" value="36"> 36 </option>
	                <option data-calcvalue="60" value="37"> 37 </option>
	                <option data-calcvalue="55" value="38"> 38 </option>
	                <option data-calcvalue="50" value="39"> 39 </option>
	                <option data-calcvalue="45" value="40"> 40 </option>
	                <option data-calcvalue="35" value="41"> 41 </option>
	                <option data-calcvalue="25" value="42"> 42 </option>
	                <option data-calcvalue="15" value="43"> 43 </option>
	                <option data-calcvalue="5" value="44"> 44 </option>
	                <option data-calcvalue="0" value="45 or older"> 45 or older </option>
	             </select>
                 <input type="hidden" name="cc_age_fsp_mval" id="cc_age_fsp_mval" value="">
             </div>
         </div>
         
         
         <div class="crscf_single_field crscf_education_field clearfix" data-single="true">
              <label class="float-left">What is your highest level of education</label>
              <div class="float-left">
	              <select name="cc_education" data-select>
	                    <option data-calcvalue="0" value=""> Select </option>
	                    <option data-calcvalue="0" value="Less than secondary school (high school)"> Less than secondary school (high school) </option>
	                    <option data-calcvalue="30" value="Secondary diploma (high school graduation)"> Secondary diploma (high school graduation) </option>
	                    <option data-calcvalue="90" value="One-year degree"> One-year degree, diploma or certificate </option>
	                    <option data-calcvalue="98" value="Two-year program"> Two-year program</option>
	                    <option data-calcvalue="120" value="Bachelor's degree OR  a three or more year program"> Bachelor&apos;s degree OR  a three or more year program</option>
	                    <option data-calcvalue="128" value="Two or more certificates with program of three or more years"> Two or more certificates with program of three or more years </option>
	                    <option data-calcvalue="135" value="Master's degree"> Master&apos;s degree</option>
	                    <option data-calcvalue="150" value="Doctoral level university degree (Ph.D.)"> Doctoral level university degree (Ph.D.) </option>
	              </select>
              </div>
                 <input type="hidden" name="cc_education_mval" id="cc_education_mval" value="">
         </div>    

         <div class="crscf_single_field crscf_education_field clearfix" data-spouse="false">
              <label class="float-left">What is your highest level of education</label>
              <div class="float-left">
	              <select name="cc_education_fsp" data-select>
	                    <option data-calcvalue="0" value=""> Select </option>
	                    <option data-calcvalue="0" value="Less than secondary school (high school)"> Less than secondary school (high school) </option>
	                    <option data-calcvalue="28" value="Secondary diploma (high school graduation)"> Secondary diploma (high school graduation) </option>
	                    <option data-calcvalue="84" value="One-year degree, diploma or certificate"> One-year degree, diploma or certificate</option>
	                    <option data-calcvalue="91" value="Two-year program"> Two-year program </option>
	                    <option data-calcvalue="112" value="Bachelor's degree OR  a three or more year program"> Bachelor&apos;s degree OR  a three or more year program </option>
	                    <option data-calcvalue="119" value="Two or more certificates with program of three or more years"> Two or more certificates with program of three or more years </option>
	                    <option data-calcvalue="126" value="Master's degree"> Master&apos;s degree </option>
	                    <option data-calcvalue="140" value="Doctoral level university degree (Ph.D.)"> Doctoral level university degree (Ph.D.) </option>
	              </select>
              </div>
                 <input type="hidden" name="cc_education_fsp_mval" id="cc_education_fsp_mval" value="">
         </div>  
         <div class="crscf_language_proficiency">
             <h2>Official languages proficiency</h2>
             
             <div class="crscf_single_field crscf_lang_ability_field" data-single="true">
                 <label>First official language - Canadian Language Benchmark (CLB)</label>
                 <div class="crs_wrapper clearfix">
                     <label>
                          Reading
                          <select name="cc_first_reading" data-select data-lang-single>
                                <option data-calcvalue="0" value="" data-lang-pl="0"> Select </option>
                                <option data-calcvalue="0" value="Less than CLB 4" data-lang-pl="0"> Less than CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 4" data-lang-pl="4"> CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 5" data-lang-pl="5"> CLB 5 </option>
                                <option data-calcvalue="9" value="CLB 6" data-lang-pl="6"> CLB 6 </option>
                                <option data-calcvalue="17" value="CLB 7" data-lang-pl="7"> CLB 7 </option>
                                <option data-calcvalue="23" value="CLB 8" data-lang-pl="8"> CLB 8 </option>
                                <option data-calcvalue="31" value="CLB 9" data-lang-pl="9"> CLB 9 </option>
                                <option data-calcvalue="34" value="CLB 10 or more" data-lang-pl="10"> CLB 10 or more </option>
                          </select>
                 <input type="hidden" name="cc_first_reading_mval" id="cc_first_reading_mval" value="">
                     </label>
                     <label>
                          Writing
                          <select name="cc_first_writing" data-select data-lang-single>
                                <option data-calcvalue="0" value="" data-lang-pl="0"> Select </option>
                                <option data-calcvalue="0" value="Less than CLB 4" data-lang-pl="0"> Less than CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 4" data-lang-pl="4"> CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 5" data-lang-pl="5"> CLB 5 </option>
                                <option data-calcvalue="9" value="CLB 6" data-lang-pl="6"> CLB 6 </option>
                                <option data-calcvalue="17" value="CLB 7" data-lang-pl="7"> CLB 7 </option>
                                <option data-calcvalue="23" value="CLB 8" data-lang-pl="8"> CLB 8 </option>
                                <option data-calcvalue="31" value="CLB 9" data-lang-pl="9"> CLB 9 </option>
                                <option data-calcvalue="34" value="CLB 10 or more" data-lang-pl="10"> CLB 10 or more </option>
                          </select>
                 <input type="hidden" name="cc_first_writing_mval" id="cc_first_writing_mval" value="">
                     </label>
                     <label>
                          Listening
                          <select name="cc_first_listening" data-select data-lang-single>
                                <option data-calcvalue="0" value="" data-lang-pl="0"> Select </option>
                                <option data-calcvalue="0" value="Less than CLB 4" data-lang-pl="0"> Less than CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 4" data-lang-pl="4"> CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 5" data-lang-pl="5"> CLB 5 </option>
                                <option data-calcvalue="9" value="CLB 6" data-lang-pl="6"> CLB 6 </option>
                                <option data-calcvalue="17" value="CLB 7" data-lang-pl="7"> CLB 7 </option>
                                <option data-calcvalue="23" value="CLB 8" data-lang-pl="8"> CLB 8 </option>
                                <option data-calcvalue="31" value="CLB 9" data-lang-pl="9"> CLB 9 </option>
                                <option data-calcvalue="34" value="CLB 10 or more" data-lang-pl="10"> CLB 10 or more </option>
                          </select>
                 <input type="hidden" name="cc_first_listening_mval" id="cc_first_listening_mval" value="">
                     </label>
                     <label>
                          Speaking
                          <select name="cc_first_speaking" data-select data-lang-single>
                                <option data-calcvalue="0" value="" data-lang-pl="0"> Select </option>
                                <option data-calcvalue="0" value="Less than CLB 4" data-lang-pl="0"> Less than CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 4" data-lang-pl="4"> CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 5" data-lang-pl="5"> CLB 5 </option>
                                <option data-calcvalue="9" value="CLB 6" data-lang-pl="6"> CLB 6 </option>
                                <option data-calcvalue="17" value="CLB 7" data-lang-pl="7"> CLB 7 </option>
                                <option data-calcvalue="23" value="CLB 8" data-lang-pl="8"> CLB 8 </option>
                                <option data-calcvalue="31" value="CLB 9" data-lang-pl="9"> CLB 9 </option>
                                <option data-calcvalue="34" value="CLB 10 or more" data-lang-pl="10"> CLB 10 or more </option>
                          </select>
                 <input type="hidden" name="cc_first_speaking_mval" id="cc_first_speaking_mval" value="">
                     </label>
                 </div>
             </div>
             <div class="crscf_single_field crscf_lang_ability_field" data-spouse="false">
                 <label>First official language - Canadian Language Benchmark (CLB)</label>
                 <div class="crs_wrapper clearfix">
                     <label>
                          Reading
                          <select name="cc_first_reading_fsp" data-select data-lang-married>
                                <option data-calcvalue="0" value="" data-lang-pl="0"> Select </option>
                                <option data-calcvalue="0" value="Less than CLB 4" data-lang-pl="0"> Less than CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 4" data-lang-pl="4"> CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 5" data-lang-pl="5"> CLB 5 </option>
                                <option data-calcvalue="8" value="CLB 6" data-lang-pl="6"> CLB 6 </option>
                                <option data-calcvalue="16" value="CLB 7" data-lang-pl="7"> CLB 7 </option>
                                <option data-calcvalue="22" value="CLB 8" data-lang-pl="8"> CLB 8 </option>
                                <option data-calcvalue="29" value="CLB 9" data-lang-pl="9"> CLB 9 </option>
                                <option data-calcvalue="32" value="CLB 10 or more" data-lang-pl="10"> CLB 10 or more </option>
                          </select>
                 <input type="hidden" name="cc_first_reading_fsp_mval" id="cc_first_reading_fsp_mval" value="">
                     </label>
                     <label>
                          Writing
                          <select name="cc_first_writing_fsp" data-select data-lang-married>
                                <option data-calcvalue="0" value="" data-lang-pl="0"> Select </option>
                                <option data-calcvalue="0" value="Less than CLB 4" data-lang-pl="0"> Less than CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 4" data-lang-pl="4"> CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 5" data-lang-pl="5"> CLB 5 </option>
                                <option data-calcvalue="8" value="CLB 6" data-lang-pl="6"> CLB 6 </option>
                                <option data-calcvalue="16" value="CLB 7" data-lang-pl="7"> CLB 7 </option>
                                <option data-calcvalue="22" value="CLB 8" data-lang-pl="8"> CLB 8 </option>
                                <option data-calcvalue="29" value="CLB 9" data-lang-pl="9"> CLB 9 </option>
                                <option data-calcvalue="32" value="CLB 10 or more" data-lang-pl="10"> CLB 10 or more </option>
                          </select>
                 <input type="hidden" name="cc_first_writing_fsp_mval" id="cc_first_writing_fsp_mval" value="">
                     </label>
                     <label>
                          Listening
                          <select name="cc_first_listening_fsp" data-select data-lang-married>
                                <option data-calcvalue="0" value="" data-lang-pl="0"> Select </option>
                                <option data-calcvalue="0" value="Less than CLB 4" data-lang-pl="0"> Less than CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 4" data-lang-pl="4"> CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 5" data-lang-pl="5"> CLB 5 </option>
                                <option data-calcvalue="8" value="CLB 6" data-lang-pl="6"> CLB 6 </option>
                                <option data-calcvalue="16" value="CLB 7" data-lang-pl="7"> CLB 7 </option>
                                <option data-calcvalue="22" value="CLB 8" data-lang-pl="8"> CLB 8 </option>
                                <option data-calcvalue="29" value="CLB 9" data-lang-pl="9"> CLB 9 </option>
                                <option data-calcvalue="32" value="CLB 10 or more" data-lang-pl="10"> CLB 10 or more </option>
                          </select>
                 <input type="hidden" name="cc_first_listening_fsp_mval" id="cc_first_listening_fsp_mval" value="">
                     </label>
                     <label>
                          Speaking
                          <select name="cc_first_speaking_fsp" data-select data-lang-married>
                                <option data-calcvalue="0" value="" data-lang-pl="0"> Select </option>
                                <option data-calcvalue="0" value="Less than CLB 4" data-lang-pl="0"> Less than CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 4" data-lang-pl="4"> CLB 4 </option>
                                <option data-calcvalue="6" value="CLB 5" data-lang-pl="5"> CLB 5 </option>
                                <option data-calcvalue="8" value="CLB 6" data-lang-pl="6"> CLB 6 </option>
                                <option data-calcvalue="16" value="CLB 7" data-lang-pl="7"> CLB 7 </option>
                                <option data-calcvalue="22" value="CLB 8" data-lang-pl="8"> CLB 8 </option>
                                <option data-calcvalue="29" value="CLB 9" data-lang-pl="9"> CLB 9 </option>
                                <option data-calcvalue="32" value="CLB 10 or more" data-lang-pl="10"> CLB 10 or more </option>
                          </select>
                 <input type="hidden" name="cc_first_speaking_fsp_mval" id="cc_first_speaking_fsp_mval" value="">
                     </label>
                 </div>
             </div>
             
             
             <div class="crscf_single_field crscf_lang_ability_field" data-single="true">
                 <label>Second official language - Canadian Language Benchmark (CLB)</label>
                 <div class="crs_wrapper clearfix">
                     <label>
                          Reading
                          <select name="cc_second_reading" data-select>
                                <option data-calcvalue="0" value=""> Select </option>
                                <option data-calcvalue="0" value="CLB 4 or less"> CLB 4 or less </option>
                                <option data-calcvalue="1" value="CLB 5"> CLB 5 </option>
                                <option data-calcvalue="1" value="CLB 6"> CLB 6 </option>
                                <option data-calcvalue="3" value="CLB 7"> CLB 7 </option>
                                <option data-calcvalue="3" value="CLB 8"> CLB 8 </option>
                                <option data-calcvalue="6" value="CLB 9 or more"> CLB 9 or more </option>
                          </select>
                 <input type="hidden" name="cc_second_reading_mval" id="cc_second_reading_mval" value="">
                     </label>
                     <label>
                          Writing
                          <select name="cc_second_writing" data-select>
                                <option data-calcvalue="0" value=""> Select </option>
                                <option data-calcvalue="0" value="CLB 4 or less"> CLB 4 or less </option>
                                <option data-calcvalue="1" value="CLB 5"> CLB 5 </option>
                                <option data-calcvalue="1" value="CLB 6"> CLB 6 </option>
                                <option data-calcvalue="3" value="CLB 7"> CLB 7 </option>
                                <option data-calcvalue="3" value="CLB 8"> CLB 8 </option>
                                <option data-calcvalue="6" value="CLB 9 or more"> CLB 9 or more </option>
                          </select>
                 <input type="hidden" name="cc_second_writing_mval" id="cc_second_writing_mval" value="">
                     </label>
                     <label>
                          Listening
                          <select name="cc_second_listening" data-select>
                                <option data-calcvalue="0" value=""> Select </option>
                                <option data-calcvalue="0" value="CLB 4 or less"> CLB 4 or less </option>
                                <option data-calcvalue="1" value="CLB 5"> CLB 5 </option>
                                <option data-calcvalue="1" value="CLB 6"> CLB 6 </option>
                                <option data-calcvalue="3" value="CLB 7"> CLB 7 </option>
                                <option data-calcvalue="3" value="CLB 8"> CLB 8 </option>
                                <option data-calcvalue="6" value="CLB 9 or more"> CLB 9 or more </option>
                          </select>
                 <input type="hidden" name="cc_second_listening_mval" id="cc_second_listening_mval" value="">
                     </label>
                     <label>
                          Speaking
                          <select name="cc_second_speaking" data-select>
                                <option data-calcvalue="0" value=""> Select </option>
                                <option data-calcvalue="0" value="CLB 4 or less"> CLB 4 or less </option>
                                <option data-calcvalue="1" value="CLB 5"> CLB 5 </option>
                                <option data-calcvalue="1" value="CLB 6"> CLB 6 </option>
                                <option data-calcvalue="3" value="CLB 7"> CLB 7 </option>
                                <option data-calcvalue="3" value="CLB 8"> CLB 8 </option>
                                <option data-calcvalue="6" value="CLB 9 or more"> CLB 9 or more </option>
                          </select>
                 <input type="hidden" name="cc_second_speaking_mval" id="cc_second_speaking_mval" value="">
                     </label>
                 </div>
             </div>
             
             
             <div class="crscf_single_field crscf_lang_ability_field" data-spouse="false">
                 <label>Second official language - Canadian Language Benchmark (CLB)</label>
                 <div class="crs_wrapper clearfix">
                     <label>
                          Reading
                          <select name="cc_second_reading_fsp" data-select>
                                <option data-calcvalue="0" value=""> Select </option>
                                <option data-calcvalue="0" value="CLB 4 or less"> CLB 4 or less </option>
                                <option data-calcvalue="1" value="CLB 5"> CLB 5 </option>
                                <option data-calcvalue="1" value="CLB 6"> CLB 6 </option>
                                <option data-calcvalue="3" value="CLB 7"> CLB 7 </option>
                                <option data-calcvalue="3" value="CLB 8"> CLB 8 </option>
                                <option data-calcvalue="6" value="CLB 9 or more"> CLB 9 or more </option>
                          </select>
                 <input type="hidden" name="cc_second_reading_fsp_mval" id="cc_second_reading_fsp_mval" value="">
                     </label>
                     <label>
                          Writing
                          <select name="cc_second_writing_fsp" data-select>
                                <option data-calcvalue="0" value=""> Select </option>
                                <option data-calcvalue="0" value="CLB 4 or less"> CLB 4 or less </option>
                                <option data-calcvalue="1" value="CLB 5"> CLB 5 </option>
                                <option data-calcvalue="1" value="CLB 6"> CLB 6 </option>
                                <option data-calcvalue="3" value="CLB 7"> CLB 7 </option>
                                <option data-calcvalue="3" value="CLB 8"> CLB 8 </option>
                                <option data-calcvalue="6" value="CLB 9 or more"> CLB 9 or more </option>
                          </select>
                 <input type="hidden" name="cc_second_writing_fsp_mval" id="cc_second_writing_fsp_mval" value="">
                     </label>
                     <label>
                          Listening
                          <select name="cc_second_listening_fsp" data-select>
                                <option data-calcvalue="0" value=""> Select </option>
                                <option data-calcvalue="0" value="CLB 4 or less"> CLB 4 or less </option>
                                <option data-calcvalue="1" value="CLB 5"> CLB 5 </option>
                                <option data-calcvalue="1" value="CLB 6"> CLB 6 </option>
                                <option data-calcvalue="3" value="CLB 7"> CLB 7 </option>
                                <option data-calcvalue="3" value="CLB 8"> CLB 8 </option>
                                <option data-calcvalue="6" value="CLB 9 or more"> CLB 9 or more </option>
                          </select>
                 <input type="hidden" name="cc_second_listening_fsp_mval" id="cc_second_listening_fsp_mval" value="">
                     </label>
                     <label>
                          Speaking
                          <select name="cc_second_speaking_fsp" data-select>
                                <option data-calcvalue="0" value=""> Select </option>
                                <option data-calcvalue="0" value="CLB 4 or less"> CLB 4 or less </option>
                                <option data-calcvalue="1" value="CLB 5"> CLB 5 </option>
                                <option data-calcvalue="1" value="CLB 6"> CLB 6 </option>
                                <option data-calcvalue="3" value="CLB 7"> CLB 7 </option>
                                <option data-calcvalue="3" value="CLB 8"> CLB 8 </option>
                                <option data-calcvalue="6" value="CLB 9 or more"> CLB 9 or more </option>
                          </select>
                 <input type="hidden" name="cc_second_speaking_fsp_mval" id="cc_second_speaking_fsp_mval" value="">
                     </label>
                 </div>
             </div>
         </div><!-- Language proficency end -->
                   
          <div class="crscf_single_field crscf_canada_work_exp_field clearfix" data-single="true">
               <label class="float-left">Canadian work experience</label>
              <div class="float-left">
               <select name="cc_canada_work_exp_single" data-select data-ca-exp>
                    <option data-calcvalue="0" value="" data-ca-work-expl="0"> Select </option>
                    <option data-calcvalue="0" value="None or less than a year" data-ca-work-expl="0"> None or less than a year </option>
                    <option data-calcvalue="35" value="1 year" data-ca-work-expl="1"> 1 year </option>
                    <option data-calcvalue="46" value="2 years" data-ca-work-expl="2"> 2 years </option>
                    <option data-calcvalue="56" value="3 years" data-ca-work-expl="3"> 3 years </option>
                    <option data-calcvalue="63" value="4 years" data-ca-work-expl="4"> 4 years </option>
                    <option data-calcvalue="70" value="5 years or more" data-ca-work-expl="5"> 5 years or more </option>
               </select>
               </div>
                 <input type="hidden" name="cc_canada_work_exp_single_mval" id="cc_canada_work_exp_single_mval" value="">
          </div>
          
          <div class="crscf_single_field crscf_canada_work_exp_field clearfix" data-spouse="false">
               <label class="float-left">Canadian work experience</label>
              <div class="float-left">
               <select name="cc_canada_work_exp_spouse" data-select data-ca-exp>
                    <option data-calcvalue="0" value="" data-ca-work-expl="0"> Select </option>
                    <option data-calcvalue="0" value="None or less than a year" data-ca-work-expl="0"> None or less than a year </option>
                    <option data-calcvalue="40" value="1 year" data-ca-work-expl="1"> 1 year </option>
                    <option data-calcvalue="53" value="2 years" data-ca-work-expl="2"> 2 years </option>
                    <option data-calcvalue="64" value="3 years" data-ca-work-expl="3"> 3 years </option>
                    <option data-calcvalue="72" value="4 years" data-ca-work-expl="4"> 4 years </option>
                    <option data-calcvalue="80" value="5 years or more" data-ca-work-expl="5"> 5 years or more </option>
               </select>
               </div>
                 <input type="hidden" name="cc_canada_work_exp_spouse_mval" id="cc_canada_work_exp_spouse_mval" value="">
          </div>
          
     </section>
     <!-- crscf_human_capital_factors end -->
     
     <section class="crscf_spouse_factor">
         <h1>Spouse or common-law partner factors (if applicable)</h1>
         <h4 data-single="true">Not applicable for single person</h4>
         <div class="crscf_single_field crscf_spouse_education_field clearfix" data-spouse="false">
              <label class="float-left">Spouse&apos;s or common-law partner&apos;s level of education</label>
              <div class="float-left">
              <select name="cc_spouse_education" data-select>
                    <option data-calcvalue="0" value=""> Select </option>
                    <option data-calcvalue="0" value="Less than secondary school (high school)"> Less than secondary school (high school) </option>
                    <option data-calcvalue="2" value="Secondary diploma (high school graduation)"> Secondary diploma (high school graduation) </option>
                    <option data-calcvalue="6" value="One-year degree, diploma or certificate"> One-year degree, diploma or certificate</option>
                    <option data-calcvalue="7" value="Two-year program"> Two-year program</option>
                    <option data-calcvalue="8" value="Bachelor's degree OR  a three or more year program"> Bachelor&apos;s degree OR  a three or more year program </option>
                    <option data-calcvalue="9" value="Two or more certificates with program of three or more years"> Two or more certificates with program of three or more years </option>
                    <option data-calcvalue="10" value="Master's degree"> Master&apos;s degree </option>
                    <option data-calcvalue="10" value="Doctoral level university degree (Ph.D.)"> Doctoral level university degree (Ph.D.) </option>
              </select>
              </div>
                 <input type="hidden" name="cc_spouse_education_mval" id="cc_spouse_education_mval" value="">
         </div>
         <div class="crscf_language_ability" data-spouse="false">
             <h2>Spouse&apos;s or common-law partner&apos;s official languages proficiency</h2>
             <div class="crscf_single_field crscf_lang_ability_field">
                 <label>First official language - Canadian Language Benchmark (CLB)</label>
                 <div class="crs_wrapper clearfix">
                     <label>
                          Reading
                          <select name="cc_spouse_first_reading" data-select>
                                <option data-calcvalue="0" value=""> Select </option>
                                <option data-calcvalue="0" value="CLB 4 or less"> CLB 4 or less </option>
                                <option data-calcvalue="1" value="CLB 5"> CLB 5 </option>
                                <option data-calcvalue="1" value="CLB 6"> CLB 6 </option>
                                <option data-calcvalue="3" value="CLB 7"> CLB 7 </option>
                                <option data-calcvalue="3" value="CLB 8"> CLB 8 </option>
                                <option data-calcvalue="5" value="CLB 9 or more"> CLB 9 or more </option>
                          </select>
                 <input type="hidden" name="cc_spouse_first_reading_mval" id="cc_spouse_first_reading_mval" value="">
                     </label>
                     <label>
                          Writing
                          <select name="cc_spouse_first_writing" data-select>
                                <option data-calcvalue="0" value=""> Select </option>
                                <option data-calcvalue="0" value="CLB 4 or less"> CLB 4 or less </option>
                                <option data-calcvalue="1" value="CLB 5"> CLB 5 </option>
                                <option data-calcvalue="1" value="CLB 6"> CLB 6 </option>
                                <option data-calcvalue="3" value="CLB 7"> CLB 7 </option>
                                <option data-calcvalue="3" value="CLB 8"> CLB 8 </option>
                                <option data-calcvalue="5" value="CLB 9 or more"> CLB 9 or more </option>
                          </select>
                 <input type="hidden" name="cc_spouse_first_writing_mval" id="cc_spouse_first_writing_mval" value="">
                     </label>
                     <label>
                          Listening
                          <select name="cc_spouse_first_listening" data-select>
                                <option data-calcvalue="0" value=""> Select </option>
                                <option data-calcvalue="0" value="CLB 4 or less"> CLB 4 or less </option>
                                <option data-calcvalue="1" value="CLB 5"> CLB 5 </option>
                                <option data-calcvalue="1" value="CLB 6"> CLB 6 </option>
                                <option data-calcvalue="3" value="CLB 7"> CLB 7 </option>
                                <option data-calcvalue="3" value="CLB 8"> CLB 8 </option>
                                <option data-calcvalue="5" value="CLB 9 or more"> CLB 9 or more </option>
                          </select>
                 <input type="hidden" name="cc_spouse_first_listening_mval" id="cc_spouse_first_listening_mval" value="">
                     </label>
                     <label>
                          Speaking
                          <select name="cc_spouse_first_speaking" data-select>
                                <option data-calcvalue="0" value=""> Select </option>
                                <option data-calcvalue="0" value="CLB 4 or less"> CLB 4 or less </option>
                                <option data-calcvalue="1" value="CLB 5"> CLB 5 </option>
                                <option data-calcvalue="1" value="CLB 6"> CLB 6 </option>
                                <option data-calcvalue="3" value="CLB 7"> CLB 7 </option>
                                <option data-calcvalue="3" value="CLB 8"> CLB 8 </option>
                                <option data-calcvalue="5" value="CLB 9 or more"> CLB 9 or more </option>
                          </select>
                 <input type="hidden" name="cc_spouse_first_speaking_mval" id="cc_spouse_first_speaking_mval" value="">
                     </label>
                 </div>
             </div>
         </div>
         <div class="crscf_single_field crscf_spouse_work_exp_inside_field clearfix" data-spouse="false">
               <label class="float-left">Spouse&apos;s Canadian work experience</label>
              <div class="float-left">
               <select name="cc_spouse_work_exp_inside" data-select>
                    <option data-calcvalue="0" value=""> Select </option>
                    <option data-calcvalue="0" value="None or less than 1 year of Canadian Experience"> None or less than a year </option>
                    <option data-calcvalue="5" value="1 year of Canadian Experience"> 1 year </option>
                    <option data-calcvalue="7" value="2 years of Canadian Experience"> 2 years </option>
                    <option data-calcvalue="8" value="3 years of Canadian Experience"> 3 years </option>
                    <option data-calcvalue="9" value="4 years of Canadian Experience"> 4 years </option>
                    <option data-calcvalue="10" value="5 or more years of Canadian Experience"> 5 years or more </option>
               </select>
               </div>
                 <input type="hidden" name="cc_spouse_work_exp_inside_mval" id="cc_spouse_work_exp_inside_mval" value="">
         </div>
         
     </section>
     <!--spouse factor end-->
     
     <section class="crscf_skill_transferability">
          <h1>Skill transferability factors</h1>
          
          <div class="crscf_single_field crscf_edu_lang_field clearfix" data-edu-lang-low>
               <label class="float-left">Education with good official language proficiency (Canadian Language Benchmark Level [CLB] 7 or higher) and a post-secondary degree</label>
              <div class="float-left">
               <select name="cc_edu_lang_low" data-select>
                    <option data-calcvalue="0" value=""> Select </option>
                    <option data-calcvalue="0" value="Secondary school (high school) credential or less"> Secondary school (high school) credential or less </option>
                    <option data-calcvalue="13" value="Post-secondary program credential of one year or longer"> Post-secondary program credential </option>
                    <option data-calcvalue="25" value="Two or more post-secondary program credentials"> Two or more post-secondary program credentials </option>
               </select>
               </div>
                 <input type="hidden" name="cc_edu_lang_low_mval" id="cc_edu_lang_low_mval" value="">
          </div>
          <div class="crscf_single_field crscf_edu_lang_field clearfix" data-edu-lang-high>
               <label class="float-left">Education with good official language proficiency (Canadian Language Benchmark Level [CLB] 7 or higher) and a post-secondary degree</label>
              <div class="float-left">
               <select name="cc_edu_lang_high" data-select>
                    <option data-calcvalue="0" value=""> Select </option>
                    <option data-calcvalue="0" value="Secondary school (high school) credential or less"> Secondary school (high school) credential or less </option>
                    <option data-calcvalue="25" value="Post-secondary program credential"> Post-secondary program credential </option>
                    <option data-calcvalue="50" value="Two or more post-secondary program credentials"> Two or more post-secondary program credentials </option>
               </select>
               </div>
                 <input type="hidden" name="cc_edu_lang_high_mval" id="cc_edu_lang_high_mval" value="">
          </div>
          
          <div class="crscf_single_field crscf_edu_ca_work_exp_field" data-edu-ca-work-exp-low>
               <label class="float-left">Education With Canadian work experience and a post-secondary degree</label>
              <div class="float-left">
               <select name="cc_edu_ca_work_exp_low" data-select>
                    <option data-calcvalue="0" value=""> Select </option>
                    <option data-calcvalue="0" value="Secondary school (high school) credential or less"> Secondary school (high school) credential or less </option>
                    <option data-calcvalue="13" value="Post-secondary program credential"> Post-secondary program credential </option>
                    <option data-calcvalue="25" value="Two or more post-secondary program credentials"> Two or more post-secondary program credentials </option>
               </select>
               </div>
                 <input type="hidden" name="cc_edu_ca_work_exp_low_mval" id="cc_edu_ca_work_exp_low_mval" value="">
          </div>
          <div class="crscf_single_field crscf_edu_ca_work_exp_field clearfix" data-edu-ca-work-exp-high>
               <label class="float-left">With Canadian work experience and a post-secondary degree</label>
              <div class="float-left">
               <select name="cc_edu_ca_work_exp_high" data-select>
                    <option data-calcvalue="0" value=""> Select </option>
                    <option data-calcvalue="0" value="Secondary school (high school) credential or less"> Secondary school (high school) credential or less </option>
                    <option data-calcvalue="25" value="Post-secondary program credential"> Post-secondary program credential </option>
                    <option data-calcvalue="50" value="Two or more post-secondary program credentials"> Two or more post-secondary program credentials </option>
               </select>
               </div>
                 <input type="hidden" name="cc_edu_ca_work_exp_high_mval" id="cc_edu_ca_work_exp_high_mval" value="">
          </div>
          
          
          <div class="crscf_single_field crscf_work_exp_outside_field clearfix" data-fo-exp-low>
               <label class="float-left">Foreign work experience – With good official language proficiency (Canadian Language Benchmark Level [CLB] 7 or higher)</label>
              <div class="float-left">
               <select name="cc_foreign_work_exp_low" data-select>
                    <option data-calcvalue="0" value=""> Select </option>
                    <option data-calcvalue="0" value="No foreign work experience"> No foreign work experience </option>
                    <option data-calcvalue="13" value="1 or 2 years"> 1 or 2 years </option>
                    <option data-calcvalue="25" value="3 years or more"> 3 years or more </option>
               </select>
               </div>
                 <input type="hidden" name="cc_foreign_work_exp_low_mval" id="cc_foreign_work_exp_low_mval" value="">
          </div>
          
          <div class="crscf_single_field crscf_work_exp_outside_field clearfix" data-fo-exp-high>
               <label class="float-left">Foreign work experience – With good official language proficiency (Canadian Language Benchmark Level [CLB] 7 or higher)</label>
              <div class="float-left">
               <select name="cc_foreign_work_exp_high" data-select>
                    <option data-calcvalue="0" value=""> Select </option>
                    <option data-calcvalue="0" value="No foreign work experience"> No foreign work experience </option>
                    <option data-calcvalue="25" value="1 or 2 years"> 1 or 2 years </option>
                    <option data-calcvalue="50" value="3 years or more"> 3 years or more </option>
               </select>
               </div>
                 <input type="hidden" name="cc_foreign_work_exp_high_mval" id="cc_foreign_work_exp_high_mval" value="">
          </div>
          
          <div class="crscf_single_field crscf_ca_fo_work_exp_field clearfix" data-ca-fo-exp-low>
               <label class="float-left">Foreign work experience – With Canadian work experience</label>
              <div class="float-left">
               <select name="cc_canada_foreign_work_exp_low" data-select>
                    <option data-calcvalue="0" value=""> Select </option>
                    <option data-calcvalue="0" value="No foreign work experience"> No foreign work experience </option>
                    <option data-calcvalue="13" value="1 or 2 years"> 1 or 2 years </option>
                    <option data-calcvalue="25" value="3 years or more"> 3 years or more </option>
               </select>
               </div>
                 <input type="hidden" name="cc_canada_foreign_work_exp_low_mval" id="cc_canada_foreign_work_exp_low_mval" value="">
          </div>
          <div class="crscf_single_field crscf_ca_fo_work_exp_field clearfix" data-ca-fo-exp-high>
               <label class="float-left">Foreign work experience – With Canadian work experience</label>
              <div class="float-left">
               <select name="cc_canada_foreign_work_exp_high" data-select>
                    <option data-calcvalue="0" value=""> Select </option>
                    <option data-calcvalue="0" value="No foreign work experience"> No foreign work experience </option>
                    <option data-calcvalue="25" value="1 or 2 years"> 1 or 2 years </option>
                    <option data-calcvalue="50" value="3 years or more"> 3 years or more </option>
               </select>
               </div>
                 <input type="hidden" name="cc_canada_foreign_work_exp_high_mval" id="cc_canada_foreign_work_exp_high_mval" value="">
          </div>
         <div class="crscf_single_field crscf_c_trade_c_field" data-trade-low>
             <label>Do you have Certificate of qualification (trade occupations) – With good official language proficiency (Canadian Language Benchmark Level [CLB] 5 or higher)</label>
             <div class="crs_wrapper">
             <label>
                 <input type="radio" name="cc_c_trade_l" value="No" data-calcvalue="0" data-radio checked>
                 No
             </label>
             <label>
                 <input type="radio" name="cc_c_trade_l" value="Yes" data-calcvalue="25" data-radio>
                 Yes
             </label>
             </div>
                 <input type="hidden" name="cc_c_trade_l_mval" id="cc_c_trade_h_mval" value="">
         </div>
         <div class="crscf_single_field crscf_c_trade_c_field" data-trade-high>
             <label>Do you have Certificate of qualification (trade occupations) – With good official language proficiency (Canadian Language Benchmark Level [CLB] 5 or higher)</label>
             <div class="crs_wrapper">
             <label>
                 <input type="radio" name="cc_c_trade_h" value="No" data-calcvalue="0" data-radio checked>
                 No
             </label>
             <label>
                 <input type="radio" name="cc_c_trade_h" value="Yes" data-calcvalue="50" data-radio>
                 Yes
             </label>
             </div>
                 <input type="hidden" name="cc_c_trade_h_mval" id="cc_c_trade_h_mval" value="">
         </div>
     </section>
     
     
     <section class="crscf_additional">
         <h1>Additional points</h1>

         <div class="crscf_single_field crscf_bs_field">
             <label>Do you or your spouse have a Brother or sister living in Canada who is a citizen or permanent resident of Canada ?</label>
             <div class="crs_wrapper">
	             <label>
	                 <input type="radio" name="cc_has_bs" value="No" data-calcvalue="0" data-radio checked>
	                 No
	             </label>
	             <label>
	                 <input type="radio" name="cc_has_bs" value="Yes" data-calcvalue="15" data-radio>
	                 Yes
	             </label>
             </div>
                 <input type="hidden" name="cc_has_bs_mval" id="cc_has_bs_mval" value="">
         </div>
         
         <div class="crscf_single_field crscf_french_lang_field" data-french-lang-low>
             <label>Do you have NCLC 7 or higher skills in Reading, Writing, Listening and Speaking on French language</label>
             
             <div class="crs_wrapper">
                 <label>
                     <input type="radio" name="cc_french_lang_skills_low" value="No" data-calcvalue="0" data-radio checked>
                     No
                 </label>
                 <label>
                     <input type="radio" name="cc_french_lang_skills_low" value="Yes" data-calcvalue="15" data-radio>
                     Yes
                 </label>
             </div>
                 <input type="hidden" name="cc_french_lang_skills_low_mval" id="cc_french_lang_skills_low_mval" value="">
         </div>
         <div class="crscf_single_field crscf_french_lang_field" data-french-lang-high>
             <label>Do you have NCLC 7 or higher skills in Reading, Writing, Listening and Speaking on French language</label>
             
             <div class="crs_wrapper">
                 <label>
                     <input type="radio" name="cc_french_lang_skills_high" value="No" data-calcvalue="0" data-radio checked>
                     No
                 </label>
                 <label>
                     <input type="radio" name="cc_french_lang_skills_high" value="Yes" data-calcvalue="30" data-radio>
                     Yes
                 </label>
             </div>
                 <input type="hidden" name="cc_french_lang_skills_high_mval" id="cc_french_lang_skills_high_mval" value="">
         </div>
          
         <div class="crscf_single_field crscf_study_canada_field">
             <label>Did you study in Canada?</label>
             <div class="crs_wrapper">
	             <label>
	                 <input type="radio" name="cc_study_canada" value="Did not study in Canada / less than 1 year credential" data-calcvalue="0" data-radio checked>
	                 Did not study in Canada / less than 1 year credential
	             </label>
	             <label>
	                 <input type="radio" name="cc_study_canada" data-calcvalue="15" value="Post-secondary education in  Canada - credential of one or two years" data-radio>
	                 Post-secondary education in  Canada - credential of one or two years
	             </label>
	             <label>
	                 <input type="radio" name="cc_study_canada" data-calcvalue="30" value="Post-secondary education in  Canada - credential three years or longer" data-radio>
	                 Post-secondary education in  Canada - credential three years or longer
	             </label>
             </div>
                 <input type="hidden" name="cc_study_canada_mval" id="cc_study_canada_mval" value="">
         </div>
         
         <div class="crscf_noc_info">
             <p>Skilled Worker Experience is defined by the <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/eligibility/find-national-occupation-code.html" target="_blank">Canadian National Occupational Classification (NOC)</a> and means: Managerial jobs (NOC skill type 0), Professional jobs (NOC skill type A), Technical jobs and Skilled trades (NOC skill type B). NOC 00 Managerial jobs get additional points. See definition of NOC 00 <a href="http://www23.statcan.gc.ca/imdb/p3VD.pl?Function=getVD&TVD=122372&CVD=122375&CPV=001&CST=01012011&CLV=3&MLV=4" target="_blank">here</a></p>
         </div>
         
          <div class="crscf_single_field crscf_work_permit">
               <label>Do you have an LMIA work permit OR an LMIA-exempt, ICT, employer-specific work permit and worked 1 year in Canada on this work permit?</label>
               <div class="crs_wrapper">
	               <label>
	                    <input type="radio" name="cc_work_permit" value="No" data-calcvalue="0" data-radio checked>
	                    No
	               </label>
	               <label>
	                    <input type="radio" name="cc_work_permit" value="Yes - for a managerial position (NOC 00)" data-calcvalue="200" data-radio>
	                    Yes - for a managerial position (NOC 00)
	               </label>
	               <label>
	                    <input type="radio" name="cc_work_permit" value="Yes - for skilled position (see definition above)" data-calcvalue="50" data-radio>
	                    Yes - for skilled position (see definition above)
	               </label>
               </div>
               <input type="hidden" name="cc_work_permit_mval" id="cc_work_permit_mval" value="">
          </div>
          <div class="crscf_single_field crscf_pnp">
               <label>Do you have a Provincial or territorial nomination</label>
               <div class="crs_wrapper">
	               <label>
	                    <input type="radio" name="cc_pnp" value="No" data-calcvalue="0" data-radio checked>
	                    No
	               </label>
	               <label>
	                    <input type="radio" name="cc_pnp" value="Yes" data-calcvalue="600" data-radio>
	                    Yes
	               </label>
               </div>
                 <input type="hidden" name="cc_pnp_mval" id="cc_pnp_mval" value="">
          </div>

         
     </section>


     <section class="crscf_submit_note">
         <p><strong>* Remember to <span class="crs_bold_word">Submit</span> your score to receive an email with a detailed breakdown of your results.</strong></p>
     </section>
     <section class="crscf_email">
         <div class="crscf_single_field crscf_email_field">
             <label for="cc_email">E-mail <span class="crscf_required_sign">*</span></label>
             <input type="email" name="cc_email" id="cc_email" required>
         </div>
         <div class="crscf_btns">
             <input type="submit" value="Submit">
             <input type="button" value="Clear Form" id="clearForm">
         </div>
     </section>

     <footer class="crscf_result">
         <div class="crscf_single_field crscf_total_field">
             <h2 class="d-inline-block">Express Entry CRS Total Points</h2>
             <input type="text" name="cc_total_points" value="0" readonly data-total>
         </div>
         <div class="crscf_single_field crscf_core_factor_field">
             <label>Human / Core Factors</label>
             <input type="text" name="cc_core_factor" value="0" readonly data-core>
         </div>
         <div class="crscf_single_field crscf_spouse_factor_field">
             <label>Spouse or common-law partner factors (if applicable)</label>
             <input type="text" name="cc_spouse_factor" value="0" readonly data-sf>
         </div>
         <div class="crscf_single_field crscf_trans_ability_field">
             <label>Transferability Points</label>
             <input type="text" name="cc_trans_ability" value="0" readonly data-ta>
         </div>
         <div class="crscf_single_field crscf_addi_points_field">
             <label>Additional Points</label>
             <input type="text" name="cc_addi_points" value="0" readonly data-addi>
         </div>
     </footer>
</form>