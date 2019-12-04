<?php
function emailMessage () { 
    require_once dirname(__FILE__) ."/all_variables.php";
    $emailMessage = <<<TEMPLATE
        <html>
            <head>
                <style>\r\n
                    body {
                        padding-left: 20px;
                        padding-right: 20px;
                    }
                    h3 {
                        color: #103465;
                        font-size: 18px;
                    }\r\n
                    .blue_dark {
                        color: #103465;
                    }
                    .template_header {
                        border-bottom: 1px solid #ddd;
                    }\r\n
                    .main_table {
                        width: 100%;
                    }
                    .col1 {
                        width: 80%;                        
                    }\r\n
                    .col2 {
                        width: 20%;
                        text-align: right;
                    }
                    .info {
                        color: #444;
                    }
                </style>\r\n
            </head>
            <body>
                <div class="template_header">
                    <img src='http://www.imigrim.com/wp-content/uploads/2018/10/main-logo-1-e1538810037941.png' alt='logo' width='200px;margin-top: 20px;'/>\r\n
                    <h2 style='text-align: center;'>Express Entry CRS Score</h2>\r\n
                    <h3>Candidate</h3>\r\n
                    <p>Email: <a href='mailto:{$emailAddress}' target='__blank'>{$emailAddress}</a></p>\r\n
                    <h3>Express Entry Total CRS Score: {$totalResult}</h3>\r\n
                </div>
                <div class="template_body">
                    <div class="human_core_factor">
                        <h4 style="margin-bottom: 30px;">Component Categories of CRS scoring system:</h4>\r\n
                        <h3>Human Capital / Core Factors: {$coreFactor}</h3>\r\n
                        <p class="info">These factors are the main (core factors) that include personal characteristics (Maximum points of 500 without a spouse,  460 points with a spouse for this section)</p>\r\n
                        <p class="info"><strong>Note: Core / human capital + Spouse or common-law partner factors = Maximum 500 points</strong></p>\r\n
                        <table class="main_table">
                            <thead>
                                <tr>
                                    <td class="col1"></td>
                                    <td class="col2"><b style="text-decoration: underline">Score</b></td>
                                </tr>\r\n
                                <tr><td><br/></td><td></td></tr>\r\n
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col1">Age: <strong class="blue_dark">{$cc_age}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_age_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 110 single, 100 married)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr><td><br/></td><td></td></tr>
                                <tr>
                                    <td class="col1">Highest level of education: <strong class="blue_dark">{$cc_education}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_education_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 110 single, 100 married)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                
                                <tr><td><br/></td><td></td></tr>
                                <tr>
                                    <td class="col1">First Official languages proficiency: <span class="info">(max points: 136 single [34 points per ability], 128 married [32 points per ability])</span></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                
                                <tr>
                                    <td class="col1"><strong class="blue_dark">Reading: {$cc_first_reading}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_first_reading_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><strong class="blue_dark">Writing: {$cc_first_writing}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_first_writing_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><strong class="blue_dark">Listening: {$cc_first_listening}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_first_listening_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><strong class="blue_dark">Speaking: {$cc_first_speaking}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_first_speaking_mval}</strong></td>
                                </tr>\r\n
                                
                                <tr><td><br/></td><td></td></tr>\r\n
                                <tr>
                                    <td class="col1">Second Official languages proficiency: <span class="info">(max points: 24 single, 24 married [6 points per ability])</span></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                
                                <tr>
                                    <td class="col1"><strong class="blue_dark">Reading: {$cc_second_reading}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_second_reading_mval}</strong></td>
                                </tr>
                                <tr>
                                    <td class="col1"><strong class="blue_dark">Writing: {$cc_second_writing}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_second_writing_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><strong class="blue_dark">Listening: {$cc_second_listening}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_second_listening_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><strong class="blue_dark">Speaking: {$cc_second_speaking}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_second_speaking_mval}</strong></td>
                                </tr>\r\n
                                
                                <tr><td><br/></td><td></td></tr>\r\n
                                <tr>
                                    <td class="col1">Canadian work experience: <strong class="blue_dark">{$cc_canada_work_exp}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_canada_work_exp_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 80 single, 70 married)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                
                            </tbody>
                        </table>
                    </div>\r\n
                    
                    <div class="spouse_factor">
                        <h3>Spouse or common-law partner factors (if applicable): {$spouseFactor}</h3>\r\n
                        <table class="main_table">
                            <tbody>
                                <tr>
                                    <td class="col1">Spouse's or common-law partner’s level of education: <strong class="blue_dark">{$cc_spouse_education}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_spouse_education_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 10)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr><td><br/></td><td></td></tr>\r\n
                                
                                <tr>
                                    <td class="col1">Spouse's or common-law partner's official languages proficiency: <span class="info">(max points: 20, 5 points per ability)</span></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                
                                <tr>
                                    <td class="col1"><strong class="blue_dark">Reading: {$cc_spouse_first_reading}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_spouse_first_reading_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><strong class="blue_dark">Writing: {$cc_spouse_first_writing}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_spouse_first_writing_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><strong class="blue_dark">Listening: {$cc_spouse_first_listening}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_spouse_first_listening_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><strong class="blue_dark">Speaking: {$cc_spouse_first_speaking}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_spouse_first_speaking_mval}</strong></td>
                                </tr>\r\n
                                
                                <tr><td><br/></td><td></td></tr>
                                <tr>
                                    <td class="col1">Spouse's Canadian work experience: <strong class="blue_dark">{$cc_spouse_work_exp_inside}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_spouse_work_exp_inside_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 10)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                            </tbody>
                        </table>
                    </div>\r\n
                    
                    <div class="transferability_factor">
                        <h3>Skill transferability factors: {$transAbility}</h3>\r\n
                        <p class="info">(Maximum 100 points for this section)</p>\r\n
                        <table class="main_table">
                            <tbody>
                                <tr>
                                    <td class="col1">Education with good official language proficiency: <strong class="blue_dark">{$cc_edu_lang}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_edu_lang_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 25 [CLB 7 to CLB 8], 50 [CLB 9 or more] on all four first official language abilities)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr><td><br/></td><td></td></tr>\r\n
                                
                                <tr>
                                    <td class="col1">Education with Canadian work experience and a post-secondary degree: <strong class="blue_dark">{$cc_edu_ca_work_exp}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_edu_ca_work_exp_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 25 [1 year of Canadian work experience], 50 [2 years or more of Canadian work experience])</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr><td><br/></td><td></td></tr>\r\n
                                
                                <tr>
                                    <td class="col1">Foreign work experience – With good official language proficiency: <strong class="blue_dark">{$cc_foreign_work_exp}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_foreign_work_exp_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 25 [CLB 7 to CLB 8], 50 [CLB 9 or more] on all four first official language abilities)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr><td><br/></td><td></td></tr>\r\n
                                
                                <tr>
                                    <td class="col1">Foreign work experience – With Canadian work experience: <strong class="blue_dark">{$cc_canada_foreign_work_exp}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_canada_foreign_work_exp_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 25 [1 year of Canadian work experience], 50 [2 years or more of Canadian work experience])</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr><td><br/></td><td></td></tr>\r\n
                                
                                <tr>
                                    <td class="col1">Certificate of qualification (trade occupations) – With good official language proficiency: <strong class="blue_dark">{$cc_c_trade}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_c_trade_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 25 [CLB 5 to CLB 6], 50 [CLB 7 or more] on all four first official language abilities)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                
                            </tbody>
                        </table>
                    </div>\r\n
                    
                    <div class="spouse_factor">
                        <h3>Additional points: {$addiPoint}</h3>\r\n
                        <p>(Maximum 600 points)</p>\r\n
                        <table class="main_table">
                            <tbody>
                                <tr>
                                    <td class="col1">Brother or sister living in Canada who is a citizen or permanent resident of Canada: <strong class="blue_dark">{$cc_has_bs}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_has_bs_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 15)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr><td><br/></td><td></td></tr>\r\n
                                
                                <tr>
                                    <td class="col1">Scored NCLC 7: <strong class="blue_dark">{$cc_french_lang_skills}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_french_lang_skills_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 15 [CLB 4 or lower], 30 [CLB 5 or higher] on all four first official language abilities)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr><td><br/></td><td></td></tr>\r\n
                                
                                <tr>
                                    <td class="col1">Study in Canada: <strong class="blue_dark">{$cc_study_canada}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_study_canada_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 30)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr><td><br/></td><td></td></tr>\r\n
                                
                                <tr>
                                    <td class="col1">LMIA work permit OR an LMIA-exempt: <strong class="blue_dark">{$cc_work_permit}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_work_permit_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 200)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr><td><br/></td><td></td></tr>\r\n
                                
                                <tr>
                                    <td class="col1">Provincial or territorial nomination: <strong class="blue_dark">{$cc_pnp}</strong></td>
                                    <td class="col2"><strong class="blue_dark">{$cc_pnp_mval}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1"><span class="info">(max points: 600)</span></strong></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </body>
        </html>
    
TEMPLATE;
    
    return $emailMessage;
}
function setSingleData($dataLow, $dataHigh) {
    if(!empty($dataLow) &&
        $dataLow != 0 &&
        $dataLow != "" &&
        $dataLow != "No") {
        return $dataLow;
    }elseif(!empty($dataHigh) &&
        $dataHigh != 0 &&
        $dataHigh != "" &&
        $dataHigh != "No") {
        return $dataHigh;
    }else {
        return 0;
    }
}
