/*DOM Elements*/
(function($){
    //constat variables
    var CLICK = "click"
        CHANGE = "change",
        TRUE = "true",
        FALSE = "false",
        ATTR_VALUE = "value",
        LSB = "[",
        RSB = "]",
        EQ = "=",
        LQ = '"',
        RQ = '"',
        H = '#',
        NAME = "name",
        MVAL = "_mval",
        AGE = "cc_age",
        AGE_FSP = "cc_age_fsp",
        EDU = "cc_education",
        EDU_FSP = "cc_education_fsp",
        SPOUSE_EDU = "cc_spouse_education",
        STUDY = "cc_study_canada",
        TRADE_LOW = "cc_c_trade_l",
        TRADE_HIGH = "cc_c_trade_h",
        HIGH = "high",
        LOW = "low",
        FIRST_READING = "cc_first_reading",
        FIRST_READING_FSP = "cc_first_reading_fsp",
        FIRST_WRITING = "cc_first_writing",
        FIRST_WRITING_FSP = "cc_first_writing_fsp",
        FIRST_LISTENING = "cc_first_listening",
        FIRST_LISTENING_FSP = "cc_first_listening_fsp",
        FIRST_SPEAKING = "cc_first_speaking",
        FIRST_SPEAKING_FSP = "cc_first_speaking_fsp",
        SECOND_READING = "cc_second_reading",
        SECOND_READING_FSP = "cc_second_reading_fsp",
        SECOND_WRITING = "cc_second_writing",
        SECOND_WRITING_FSP = "cc_second_writing_fsp",
        SECOND_LISTENING = "cc_second_listening",
        SECOND_LISTENING_FSP = "cc_second_listening_fsp",
        SECOND_SPEAKING = "cc_second_speaking",
        SECOND_SPEAKING_FSP = "cc_second_speaking_fsp",
        SPOUSE_FIRST_READING = "cc_spouse_first_reading",
        SPOUSE_FIRST_WRITING = "cc_spouse_first_writing",
        SPOUSE_FIRST_LISTENING = "cc_spouse_first_listening",
        SPOUSE_FIRST_SPEAKING = "cc_spouse_first_speaking",
        FO_WORK_EXP_LOW = "cc_foreign_work_exp_low",
        FO_WORK_EXP_HIGH = "cc_foreign_work_exp_high",
        
        CANADA_WORK_EXP_SINGLE = "cc_canada_work_exp_single",
        CANADA_WORK_EXP_SPOUSE = "cc_canada_work_exp_spouse",
        CA_FO_WORK_EXP_LOW = "cc_canada_foreign_work_exp_low",
        CA_FO_WORK_EXP_HIGH = "cc_canada_foreign_work_exp_high",
        SPOUSE_WORK_EXP_INSIDE = "cc_spouse_work_exp_inside",
        EDU_LANG_LOW = "cc_edu_lang_low",
        EDU_LANG_HIGH = "cc_edu_lang_high",
        EDU_CA_WORK_EXP_LOW = "cc_edu_ca_work_exp_low",
        EDU_CA_WORK_EXP_HIGH = "cc_edu_ca_work_exp_high",
        FRENCH_LANG_SKILLS_LOW = "cc_french_lang_skills_low",
        FRENCH_LANG_SKILLS_HIGH = "cc_french_lang_skills_high"
        
        HAS_BS = "cc_has_bs",
        
        WORK_PERMIT = "cc_work_permit",
        PNP = "cc_pnp"
        
    // global variable
    var ageVal = 0,
        ageValFsp = 0,
        eduVal = 0,
        eduValFsp = 0,
        spouseEduVal = 0,
        studyVal = 0,
        tradeValL = 0,
        tradeValH = 0,
        hasBSVal = 0,
        
        firstReadingVal = 0,
        firstReadingValFsp = 0,
        firstWritingVal = 0,
        firstWritingValFsp = 0,
        firstListeningVal = 0,
        firstListeningValFsp = 0,
        firstSpeakingVal = 0,
        firstSpeakingValFsp = 0,
        secondReadingVal = 0,
        secondReadingValFsp = 0,
        secondWritingVal = 0,
        secondWritingValFsp = 0,
        secondListeningVal = 0,
        secondListeningValFsp = 0,
        secondSpeakingVal = 0,
        secondSpeakingValFsp = 0,
        spouseFirstReadingVal = 0,
        spouseFirstWritingVal = 0,
        spouseFirstListeningVal = 0,
        spouseFirstSpeakingVal = 0,
        
        foWorkExpLow = 0,
        foWorkExpHigh = 0,
        caWorkExpSingle = 0,
        caWorkExpSpouse = 0,
        caFoWorkExpLow = 0,
        caFoWorkExpHigh = 0,
        
        eduLangLowVal = 0,
        eduLangHighVal = 0,
        
        eduCaWorkExpLow = 0,
        eduCaWorkExpHigh = 0,
        
        frenchLangSkillsLow = 0,
        frenchLangSkillsHigh = 0,
        
        spouseWorkExpInVal = 0,
        workPermitVal = 0,
        pnpVal = 0
    
    // dom elements
    function Crs_de() {
        //dom attribute
        this.da = {
            m: "data-maritial",
            s: "data-spouse",
            sn: "data-single",
            sl: "data-select",
            lns: "data-lang-single",
            lnm: "data-lang-married",
            lnpl: "data-lang-pl",
            trh: "data-trade-high",
            trl: "data-trade-low",
            feh: "data-fo-exp-high",
            fel: "data-fo-exp-low",
            cfeh: "data-ca-fo-exp-high",
            cfel: "data-ca-fo-exp-low",
            cwel: "data-ca-work-expl",
            cv: "data-calcvalue",
            tr: "data-total",
            tc: "data-core",
            sf: "data-sf",
            tt: "data-ta",
            ta: "data-addi",
            rd: "data-radio",
            ce: "data-ca-exp",
            elh: "data-edu-lang-high",
            ell: "data-edu-lang-low",
            ecwel: "data-edu-ca-work-exp-low",
            ecweh: "data-edu-ca-work-exp-high",
            fll : "data-french-lang-low",
            flh : "data-french-lang-high"
        }
        this.ms = $(LSB + this.da.m + RSB)
        this.ds = $(LSB + this.da.s + RSB)
        this.dsn = $(LSB + this.da.sn + RSB)
        this.dsl = $(LSB + this.da.sl + RSB)
        this.dlns = $(LSB + this.da.lns + RSB)
        this.dlnm = $(LSB + this.da.lnm + RSB)
        this.dlnpl = $(LSB + this.da.lnpl + RSB)
        this.dtrh = $(LSB + this.da.trh + RSB)
        this.dtrl = $(LSB + this.da.trl + RSB)
        this.dfeh = $(LSB + this.da.feh + RSB)
        this.dfel = $(LSB + this.da.fel + RSB)
        this.dcfeh = $(LSB + this.da.cfeh + RSB)
        this.dcfel = $(LSB + this.da.cfel + RSB)
        this.dtr = $(LSB + this.da.tr + RSB)
        this.dtc = $(LSB + this.da.tc + RSB)
        this.dsf = $(LSB + this.da.sf + RSB)
        this.dtt = $(LSB + this.da.tt + RSB)
        this.dta = $(LSB + this.da.ta + RSB)
        this.drd = $(LSB + this.da.rd + RSB)
        this.dce = $(LSB + this.da.ce + RSB)
        this.delh = $(LSB + this.da.elh + RSB)
        this.dell = $(LSB + this.da.ell + RSB)
        this.decweh = $(LSB + this.da.ecweh + RSB)
        this.decwel = $(LSB + this.da.ecwel + RSB)
        this.dfll = $(LSB + this.da.fll + RSB)
        this.dflh = $(LSB + this.da.flh + RSB)
        
        this.getIntVal = function(elmName, calcVal) {
            var calcVal = parseInt(calcVal);
            
            switch(elmName) {
                case AGE : ageVal = calcVal
                break
                case AGE_FSP : ageValFsp = calcVal
                break
                case EDU : eduVal = calcVal
                break
                case EDU_FSP : eduValFsp = calcVal
                break
                case SPOUSE_EDU : spouseEduVal = calcVal
                break
                case STUDY : studyVal = calcVal
                break
                case TRADE_LOW : tradeValL = calcVal
                break
                case TRADE_HIGH : tradeValH = calcVal
                break
                case HAS_BS : hasBSVal = calcVal
                break
                case FIRST_READING : firstReadingVal = calcVal
                break
                case FIRST_READING_FSP : firstReadingValFsp = calcVal
                break
                case FIRST_WRITING : firstWritingVal = calcVal
                break
                case FIRST_WRITING_FSP : firstWritingValFsp = calcVal
                break
                case FIRST_LISTENING : firstListeningVal = calcVal
                break
                case FIRST_LISTENING_FSP : firstListeningValFsp = calcVal
                break
                case FIRST_SPEAKING : firstSpeakingVal = calcVal
                break
                case FIRST_SPEAKING_FSP : firstSpeakingValFsp = calcVal
                break
                case SECOND_READING : secondReadingVal = calcVal
                break
                case SECOND_READING_FSP : secondReadingValFsp = calcVal
                break
                case SECOND_WRITING : secondWritingVal = calcVal
                break
                case SECOND_WRITING_FSP : secondWritingValFsp = calcVal
                break
                case SECOND_LISTENING : secondListeningVal = calcVal
                break
                case SECOND_LISTENING_FSP : secondListeningValFsp = calcVal
                break
                case SECOND_SPEAKING : secondSpeakingVal = calcVal
                break
                case SECOND_SPEAKING_FSP : secondSpeakingValFsp = calcVal
                break
                case SPOUSE_FIRST_READING : spouseFirstReadingVal = calcVal
                break
                case SPOUSE_FIRST_WRITING : spouseFirstWritingVal = calcVal
                break
                case SPOUSE_FIRST_LISTENING : spouseFirstListeningVal = calcVal
                break
                case SPOUSE_FIRST_SPEAKING : spouseFirstSpeakingVal = calcVal
                break
                case FO_WORK_EXP_LOW : foWorkExpLow = calcVal
                break
                case FO_WORK_EXP_HIGH : foWorkExpHigh = calcVal
                break
                case CANADA_WORK_EXP_SINGLE : caWorkExpSingle = calcVal
                break
                case CANADA_WORK_EXP_SPOUSE : caWorkExpSpouse = calcVal
                break
                case CA_FO_WORK_EXP_LOW : caFoWorkExpLow = calcVal
                break
                case CA_FO_WORK_EXP_HIGH : caFoWorkExpHigh = calcVal
                break
                case EDU_LANG_LOW : eduLangLowVal = calcVal
                break
                case EDU_LANG_HIGH : eduLangHighVal = calcVal
                break
                case EDU_CA_WORK_EXP_LOW : eduCaWorkExpLow = calcVal
                break
                case EDU_CA_WORK_EXP_HIGH : eduCaWorkExpHigh = calcVal
                break
                case FRENCH_LANG_SKILLS_LOW : frenchLangSkillsLow = calcVal
                break
                case FRENCH_LANG_SKILLS_HIGH : frenchLangSkillsHigh = calcVal
                break
                
                case SPOUSE_WORK_EXP_INSIDE : spouseWorkExpInVal = calcVal
                break
                case WORK_PERMIT : workPermitVal = calcVal
                break
                case PNP : pnpVal = calcVal
                break
           }
        }
        this.hCoreFactorRes = function() {
            var totalRes = ageVal + ageValFsp + eduVal + eduValFsp  
                           + firstReadingVal + firstReadingValFsp + firstWritingVal + firstWritingValFsp
                           + firstListeningVal + firstListeningValFsp + firstSpeakingVal + firstSpeakingValFsp
                           + secondReadingVal + secondReadingValFsp + secondWritingVal + secondWritingValFsp
                           + secondListeningVal + secondListeningValFsp + secondSpeakingVal + secondSpeakingValFsp
                           + caWorkExpSingle + caWorkExpSpouse
            this.dtc.val( totalRes )
            return totalRes;
        }
        this.spouseFactorRes = function() {
            var totalRes = spouseEduVal + spouseFirstReadingVal + spouseFirstWritingVal + spouseFirstListeningVal
                           + spouseFirstSpeakingVal + spouseWorkExpInVal;
            this.dsf.val(totalRes)
            return totalRes
        }
        this.transferAbilityRes = function() {
            var totalRes = foWorkExpHigh + foWorkExpLow + caFoWorkExpLow + caFoWorkExpHigh
                           + eduLangLowVal + eduLangHighVal + eduCaWorkExpLow + eduCaWorkExpHigh
                           + tradeValL + tradeValH
            this.dtt.val( totalRes )
            return totalRes;
        }
        this.addiRes = function() {
            var totalRes = studyVal + hasBSVal + frenchLangSkillsLow
                           + frenchLangSkillsHigh + workPermitVal + pnpVal
            this.dta.val( totalRes )
            return totalRes;
        }
        this.setTotalRes = function() {
            var totalRes = this.hCoreFactorRes() + this.transferAbilityRes() 
                           + this.addiRes() + this.spouseFactorRes()
            this.dtr.val( totalRes )
        }
        
        this.initialize = function() {
            if(this.ds.attr(this.da.s) != TRUE) {
                this.ds.hide();    
            }
            
            this.dtrh.hide()
            this.dtrl.hide()
            this.dfeh.hide()
            this.dfel.hide()
            this.dcfeh.hide()
            this.dcfel.hide()
            this.delh.hide()
            this.dell.hide()
            this.decweh.hide()
            this.decwel.hide()
            this.dfll.hide()
            this.dflh.hide()
            
        }
        this.initialize()
    }
    var crsDom = new Crs_de()
    $(document).ready(function(){
        // maritial status click event
        crsDom.ms.on(CHANGE, function() {
            if(this.checked) {
                if($(this).attr(crsDom.da.m) != 0) {
                    
                    if(crsDom.ds.attr(crsDom.da.s) != TRUE &&
                       crsDom.ds.attr(crsDom.da.sn) != FALSE) {
                        crsDom.ds.attr(crsDom.da.s, TRUE)
                        crsDom.dsn.attr(crsDom.da.sn, FALSE)
                        
                        
                        ageVal = 0
                        eduVal = 0
                        firstReadingVal = 0
                        firstWritingVal = 0
                        firstListeningVal = 0
                        firstSpeakingVal = 0
                        secondReadingVal = 0
                        secondWritingVal = 0
                        secondListeningVal = 0
                        secondSpeakingVal = 0
                        caWorkExpSingle = 0
                        
                        
                        var spouseElm = $(LSB + crsDom.da.s + EQ + LQ + TRUE + RQ + RSB);
                        var spouseSelm = spouseElm.find(LSB + crsDom.da.sl + RSB);
                        for(var i = 0;
                            i < spouseSelm.length;
                            i++) {
                                var calcVal = $(spouseSelm[i]).find(LSB  + ATTR_VALUE + EQ + LQ +
                                               $(spouseSelm[i]).val() + RQ +  RSB)
                                               .attr(crsDom.da.cv)
                                var currentElmName = $(spouseSelm[i]).attr(NAME)
                                crsDom.getIntVal(currentElmName, calcVal)
                            };
                            
                        
                        crsDom.setTotalRes()
                        crsDom.ds.show()
                        crsDom.dsn.hide()
                    }
                    
                }else {
                    
                    if(crsDom.ds.attr(crsDom.da.s) != FALSE &&
                       crsDom.dsn.attr(crsDom.da.sn) != TRUE) {
                        crsDom.ds.attr(crsDom.da.s, FALSE)
                        crsDom.dsn.attr(crsDom.da.sn, TRUE)
                        
                        ageValFsp = 0
                        eduValFsp = 0
                        spouseEduVal = 0
                        firstReadingValFsp = 0
                        firstWritingValFsp = 0
                        firstListeningValFsp = 0
                        firstSpeakingValFsp = 0
                        secondReadingValFsp = 0
                        secondWritingValFsp = 0
                        secondListeningValFsp = 0
                        secondSpeakingValFsp = 0
                        
                        spouseFirstReadingVal = 0
                        spouseFirstWritingVal = 0
                        spouseFirstListeningVal = 0
                        spouseFirstSpeakingVal = 0
                        
                        caWorkExpSpouse = 0
                        
                        spouseWorkExpInVal = 0
                        
                        var singleElm = $(LSB + crsDom.da.sn + EQ + LQ + TRUE + RQ + RSB);
                        var singleSelm = singleElm.find(LSB + crsDom.da.sl + RSB);
                        for(var i = 0;
                            i < singleSelm.length;
                            i++) {
                                var calcVal = $(singleSelm[i]).find(LSB  + ATTR_VALUE + EQ + LQ +
                                               $(singleSelm[i]).val() + RQ +  RSB)
                                               .attr(crsDom.da.cv)
                                var currentElmName = $(singleSelm[i]).attr(NAME)
                                crsDom.getIntVal(currentElmName, calcVal)
                            };
                        
                        
                        crsDom.setTotalRes()
                        crsDom.ds.hide()
                        crsDom.dsn.show()
                    }
                }  
            }
        })
        

        // all select event
        crsDom.dsl.on(CHANGE, function() {
            var calcVal = $(this).find(LSB  + ATTR_VALUE + EQ + LQ + $(this).val() + RQ +  RSB)
                                 .attr(crsDom.da.cv)
            var currentElmName = $(this).attr(NAME)
            var mVal = $(H + currentElmName + MVAL).val(calcVal)
            crsDom.getIntVal(currentElmName, calcVal)
            crsDom.setTotalRes()
        })
        // all radio button event
        crsDom.drd.on(CHANGE, function() {
            if(this.checked) {
                var calcVal = $(this).attr(crsDom.da.cv)
                var currentElmName = $(this).attr(NAME)
                var mVal = $(H + currentElmName + MVAL).val(calcVal)
                crsDom.getIntVal(currentElmName, calcVal)
                crsDom.setTotalRes()
            }
        })
        
        //language proficency event
        crsDom.dlns.on(CHANGE, function() {
            //check all field for trade occupations
            var profLevel = ""
            var showTrade = ""
            var showFoExp = ""
            var showEduLang = ""
            var showFrenchLang = ""
            var i=0
            var il = 0
            var ih = 0
            // trade
            for(;i < crsDom.dlns.length; i++) {
                profLevel = $(crsDom.dlns[i]).find(LSB  + ATTR_VALUE + EQ + LQ + $(crsDom.dlns[i]).val() + RQ +  RSB).attr(crsDom.da.lnpl);
                
                if(profLevel != 0 && profLevel >= 5 && profLevel < 7 ) {
                    il++
                    if(il == crsDom.dlns.length) {
                        showTrade = LOW
                    }else {
                        showTrade = LOW
                    }
                }else if(profLevel >= 7 && profLevel <= 10) {
                    ih++
                    if(ih == crsDom.dlns.length) {
                        showTrade = HIGH
                    }else {
                        showTrade = LOW
                    }
                }else {
                    showTrade = ""
                    break
                }
            }          
            if(showTrade == LOW) {
                crsDom.dtrl.show()
                crsDom.dtrh.hide()
            }else if(showTrade == HIGH) {
                crsDom.dtrh.show()
                crsDom.dtrl.hide()
            }else {
                crsDom.dtrh.hide()
                crsDom.dtrl.hide()
            }
            
            // Foreign experience and Education with language
            i=0; il = 0; ih = 0
            for(;i < crsDom.dlns.length; i++) {
                profLevel = $(crsDom.dlns[i]).find(LSB  + ATTR_VALUE + EQ + LQ + $(crsDom.dlns[i]).val() + RQ +  RSB).attr(crsDom.da.lnpl);
                if(profLevel != 0 && profLevel >= 7 && profLevel < 9 ) {
                    il++
                    if(il == crsDom.dlns.length) {
                        showFoExp = LOW
                        showEduLang = LOW
                    }else {
                        showFoExp = LOW
                        showEduLang = LOW
                    }
                }else if(profLevel >= 9) {
                    ih++
                    if(ih == crsDom.dlns.length) {
                        showFoExp = HIGH
                        showEduLang = HIGH
                    }else {
                        showFoExp = LOW
                        showEduLang = LOW
                    }
                }else {
                    showFoExp = ""
                    showEduLang = ""
                    break
                }
            }
            
            if(showFoExp == LOW) {
                crsDom.dfel.show()
                crsDom.dfeh.hide()
            }else if(showFoExp == HIGH) {
                crsDom.dfeh.show()
                crsDom.dfel.hide()
            }else {
                crsDom.dfeh.hide()
                crsDom.dfel.hide()
            }
            if(showEduLang == LOW) {
                crsDom.dell.show()
                crsDom.delh.hide()
            }else if(showEduLang == HIGH) {
                crsDom.delh.show()
                crsDom.dell.hide()
            }else {
                crsDom.delh.hide()
                crsDom.dell.hide()
            }
            
            // for french language skills
            i=0; il = 0; ih = 0
            for(;i < crsDom.dlns.length; i++) {
                profLevel = $(crsDom.dlns[i]).find(LSB  + ATTR_VALUE + EQ + LQ + $(crsDom.dlns[i]).val() + RQ +  RSB).attr(crsDom.da.lnpl);
                
                if(profLevel != 0 && profLevel <= 4) {
                    il++
                    if(il == crsDom.dlns.length) {
                        showFrenchLang = LOW
                    }else {
                        showFrenchLang = LOW
                    }
                }else if(profLevel > 5 && profLevel <= 10) {
                    ih++
                    if(ih == crsDom.dlns.length) {
                        showFrenchLang = HIGH
                    }else {
                        showFrenchLang = LOW
                    }
                }else {
                    showFrenchLang = ""
                    break
                }
            }         
            if(showFrenchLang == LOW) {
                crsDom.dfll.show()
                crsDom.dflh.hide()
            }else if(showFrenchLang == HIGH) {
                crsDom.dflh.show()
                crsDom.dfll.hide()
            }else {
                crsDom.dflh.hide()
                crsDom.dfll.hide()
            }
            
            
            $(crsDom.dtrl.find(crsDom.drd)[0]).prop("checked", true).triggerHandler(CHANGE)
            $(crsDom.dtrh.find(crsDom.drd)[0]).prop("checked", true).triggerHandler(CHANGE)
            crsDom.dfel.find(crsDom.dsl).prop('selectedIndex', 0).triggerHandler(CHANGE)
            crsDom.dfeh.find(crsDom.dsl).prop('selectedIndex', 0).triggerHandler(CHANGE)
            crsDom.dell.find(crsDom.dsl).prop('selectedIndex', 0).triggerHandler(CHANGE)
            crsDom.delh.find(crsDom.dsl).prop('selectedIndex', 0).triggerHandler(CHANGE)
            $(crsDom.dfll.find(crsDom.drd)[0]).prop("checked", true).triggerHandler(CHANGE)
            $(crsDom.dflh.find(crsDom.drd)[0]).prop("checked", true).triggerHandler(CHANGE)
        })
        crsDom.dlnm.on(CHANGE, function() {
            //check all field for trade occupations
            var profLevel = ""
            var showTrade = ""
            var showFoExp = ""
            var showEduLang = ""
            var showFrenchLang = ""
            var i=0
            var il = 0
            var ih = 0
            // trade
            for(;i < crsDom.dlnm.length; i++) {
                profLevel = $(crsDom.dlnm[i]).find(LSB  + ATTR_VALUE + EQ + LQ + $(crsDom.dlnm[i]).val() + RQ +  RSB).attr(crsDom.da.lnpl);
                
                if(profLevel != 0 && profLevel >= 5 && profLevel < 7 ) {
                    il++
                    if(il == crsDom.dlns.length) {
                        showTrade = LOW
                    }else {
                        showTrade = LOW
                    }
                }else if(profLevel >= 7 && profLevel <= 10) {
                    ih++
                    if(ih == crsDom.dlns.length) {
                        showTrade = HIGH
                    }else {
                        showTrade = LOW
                    }
                }else {
                    showTrade = ""
                    break
                }
            }         
            if(showTrade == LOW) {
                crsDom.dtrl.show()
                crsDom.dtrh.hide()
            }else if(showTrade == HIGH) {
                crsDom.dtrh.show()
                crsDom.dtrl.hide()
            }else {
                crsDom.dtrh.hide()
                crsDom.dtrl.hide()
            }
            
            // Foreign experience and Education with language
            i=0; il = 0; ih = 0
            for(;i < crsDom.dlnm.length; i++) {
                profLevel = $(crsDom.dlnm[i]).find(LSB  + ATTR_VALUE + EQ + LQ + $(crsDom.dlnm[i]).val() + RQ +  RSB).attr(crsDom.da.lnpl);
                if(profLevel != 0 && profLevel >= 7 && profLevel < 9 ) {
                    il++
                    if(il == crsDom.dlnm.length) {
                        showFoExp = LOW
                        showEduLang = LOW
                    }else {
                        showFoExp = LOW
                        showEduLang = LOW
                    }
                }else if(profLevel >= 9) {
                    ih++
                    if(ih == crsDom.dlnm.length) {
                        showFoExp = HIGH
                        showEduLang = HIGH
                    }else {
                        showFoExp = LOW
                        showEduLang = LOW
                    }
                }else {
                    showFoExp = ""
                    showEduLang = ""
                    break
                }
            }
            
            if(showFoExp == LOW) {
                crsDom.dfel.show()
                crsDom.dfeh.hide()
            }else if(showFoExp == HIGH) {
                crsDom.dfeh.show()
                crsDom.dfel.hide()
            }else {
                crsDom.dfeh.hide()
                crsDom.dfel.hide()
            }
            if(showEduLang == LOW) {
                crsDom.dell.show()
                crsDom.delh.hide()
            }else if(showEduLang == HIGH) {
                crsDom.delh.show()
                crsDom.dell.hide()
            }else {
                crsDom.delh.hide()
                crsDom.dell.hide()
            }
            
            // for french language skills
            i=0; il = 0; ih = 0
            for(;i < crsDom.dlnm.length; i++) {
                profLevel = $(crsDom.dlnm[i]).find(LSB  + ATTR_VALUE + EQ + LQ + $(crsDom.dlnm[i]).val() + RQ +  RSB).attr(crsDom.da.lnpl);
                
                if(profLevel != 0 && profLevel <= 4) {
                    il++
                    if(il == crsDom.dlnm.length) {
                        showFrenchLang = LOW
                    }else {
                        showFrenchLang = LOW
                    }
                }else if(profLevel > 5 && profLevel <= 10) {
                    ih++
                    if(ih == crsDom.dlnm.length) {
                        showFrenchLang = HIGH
                    }else {
                        showFrenchLang = LOW
                    }
                }else {
                    showFrenchLang = ""
                    break
                }
            }         
            if(showFrenchLang == LOW) {
                crsDom.dfll.show()
                crsDom.dflh.hide()
            }else if(showFrenchLang == HIGH) {
                crsDom.dflh.show()
                crsDom.dfll.hide()
            }else {
                crsDom.dflh.hide()
                crsDom.dfll.hide()
            }
            
            
            $(crsDom.dtrl.find(crsDom.drd)[0]).prop("checked", true).triggerHandler(CHANGE)
            $(crsDom.dtrh.find(crsDom.drd)[0]).prop("checked", true).triggerHandler(CHANGE)
            crsDom.dfel.find(crsDom.dsl).prop('selectedIndex', 0).triggerHandler(CHANGE)
            crsDom.dfeh.find(crsDom.dsl).prop('selectedIndex', 0).triggerHandler(CHANGE)
            crsDom.dell.find(crsDom.dsl).prop('selectedIndex', 0).triggerHandler(CHANGE)
            crsDom.delh.find(crsDom.dsl).prop('selectedIndex', 0).triggerHandler(CHANGE)
            $(crsDom.dfll.find(crsDom.drd)[0]).prop("checked", true).triggerHandler(CHANGE)
            $(crsDom.dflh.find(crsDom.drd)[0]).prop("checked", true).triggerHandler(CHANGE)
        })
        
        //Canadian work experience
        crsDom.dce.on(CHANGE, function() {
            //check all field for canadian work experience
            var caFoExpLevel = ""
            var showCaFoExp = ""
            var showEduCaExp = ""
            
            caFoExpLevel = $(this).find(LSB  + ATTR_VALUE + EQ + LQ + $(this).val() + RQ +  RSB).attr(crsDom.da.cwel);
            
            if(caFoExpLevel != 0 && caFoExpLevel == 1) {
                showCaFoExp = LOW
                showEduCaExp = LOW
            }else if(caFoExpLevel >= 2) {
                showCaFoExp = HIGH
                showEduCaExp = HIGH
            }else {
                showCaFoExp = ""
                showEduCaExp = ""
            }
                
            if(showCaFoExp == LOW) {
                crsDom.dcfel.show()
                crsDom.dcfeh.hide()
            }else if(showCaFoExp == HIGH) {
                crsDom.dcfeh.show()
                crsDom.dcfel.hide()
            }else {
                crsDom.dcfeh.hide()
                crsDom.dcfel.hide()
            } 
            if(showEduCaExp == LOW) {
                crsDom.decwel.show()
                crsDom.decweh.hide()
            }else if(showEduCaExp == HIGH) {
                crsDom.decweh.show()
                crsDom.decwel.hide()
            }else {
                crsDom.decweh.hide()
                crsDom.decwel.hide()
            }
            
            crsDom.dcfel.find(crsDom.dsl).prop('selectedIndex', 0).triggerHandler(CHANGE)
            crsDom.dcfeh.find(crsDom.dsl).prop('selectedIndex', 0).triggerHandler(CHANGE)
            crsDom.decwel.find(crsDom.dsl).prop('selectedIndex', 0).triggerHandler(CHANGE)
            crsDom.decweh.find(crsDom.dsl).prop('selectedIndex', 0).triggerHandler(CHANGE)
        })
        
        // clear all form data
        $('#clearForm').on(CLICK, function() {
            var confirmClear = confirm("Are you sure to clear all data")
            if(confirmClear) {
                $('#crsCForm')[0].reset()
            }
        })  
    })

})(jQuery)











