// var currentTab = 0; // Current tab is set to be the first tab (0)
var current_workExperience = 1;
var current_project = 1;
var button_indecator = 0;
var current_edu = 1;
var current_language = 1;
var main_path = "http://localhost/cv/public/";
showTab(currentTab); // Display the current tab
openModal();

function openModal() {
    $('.modal.cv_steps_modal').toggleClass('show');
}

$(document).ready(function () {
    $('button.close').on('click', function () {
        $('.modal').removeClass('show');
    });
    $('.continue_create_cv').on('click', function () {
        $('.modal.cv_steps_modal').removeClass('show');
    });
    animateTabsElem(currentTab);
    $('input[type=tel]').attr('name', 'phone');
    SetInitSkillContent();
    SetInitSummaryContent();
})

function CheckWordDates() {
    var valid=true;
    $('input[input_name=work_start_date]').each(function () {
        work_num = $(this).attr('work_num');
        this_val = new Date($(this).val());
        if (this_val != "") {
            end_date_val = new Date($('input.end_date[work_num=' + work_num + ']').val());
            if (this_val > end_date_val) {
                $(this).parent().append('<label class="wpforms-error" >Start Date must be minimum than end date</label>');
                $(this).css('border', '1px solid red');
                valid=false;
                return false;
            }
        }
    });
    $('input[input_name=work_end_date]').each(function () {
        work_num = $(this).attr('work_num');
        this_val = new Date($(this).val());
        if (this_val != "") {
            start_date_val = new Date($('input.start_date[work_num=' + work_num + ']').val());
            if (this_val < start_date_val) {
                $(this).parent().append('<label class="wpforms-error" >End Date must be maximum than end date</label>');
                $(this).css('border', '1px solid red');
                valid=false;
                return false;
            }
        }
    });
    return valid;
}
function CheckProjectDates() {
    var valid=true;
    $('input[input_name=project_start_date]').each(function () {
        project_num = $(this).attr('project_num');
        this_val = new Date($(this).val());
        if (this_val != "") {
            end_date_val = new Date($('input.end_date[project_num=' + project_num + ']').val());
            if (this_val > end_date_val) {
                $(this).parent().append('<label class="wpforms-error" >Start Date must be minimum than end date</label>');
                $(this).css('border', '1px solid red');
                valid=false;
                return false;
            }
        }
    });
    $('input[input_name=project_end_date]').each(function () {
        project_num = $(this).attr('project_num');
        this_val = new Date($(this).val());
        if (this_val != "") {
            start_date_val = new Date($('input.start_date[project_num=' + project_num + ']').val());
            if (this_val < start_date_val) {
                $(this).parent().append('<label class="wpforms-error" >End Date must be maximum than end date</label>');
                $(this).css('border', '1px solid red');
                valid=false;
                return false;
            }
        }
    });
    return valid;
}
function CheckEducationDates(){
    var valid=true;
    $('input[input_name=education_start_date]').each(function () {
        education_num = $(this).attr('education_num');
        this_val = new Date($(this).val());
        if (this_val != "") {
            end_date_val = new Date($('input.end_date[education_num=' + education_num + ']').val());
            if (this_val > end_date_val) {
                $(this).parent().append('<label class="wpforms-error" >Start Date must be minimum than end date</label>');
                $(this).css('border', '1px solid red');
                valid=false;
                return false;
            }
        }
    });
    $('input[input_name=education_end_date]').each(function () {
        education_num = $(this).attr('education_num');
        this_val = new Date($(this).val());
        if (this_val != "") {
            start_date_val = new Date($('input.start_date[education_num=' + education_num + ']').val());
            if (this_val < start_date_val) {
                $(this).parent().append('<label class="wpforms-error" >End Date must be maximum than end date</label>');
                $(this).css('border', '1px solid red');
                valid=false;
                return false;
            }
        }
    });
    return valid;
}
function CheckCourseDates(){
    var valid=true;
    $('input[input_name=course_start_date]').each(function () {
        course_num = $(this).attr('course_num');
        this_val = new Date($(this).val());
        if (this_val != "") {
            end_date_val = new Date($('input.end_date[course_num=' + course_num + ']').val());
            if (this_val > end_date_val) {
                $(this).parent().append('<label class="wpforms-error" >Start Date must be minimum than end date</label>');
                $(this).css('border', '1px solid red');
                valid=false;
                return false;
            }
        }
    });
    $('input[input_name=course_end_date]').each(function () {
        education_num = $(this).attr('education_num');
        this_val = new Date($(this).val());
        if (this_val != "") {
            start_date_val = new Date($('input.start_date[course_num=' + course_num + ']').val());
            if (this_val < start_date_val) {
                $(this).parent().append('<label class="wpforms-error" >End Date must be maximum than end date</label>');
                $(this).css('border', '1px solid red');
                valid=false;
                return false;
            }
        }
    });
    return valid;
}
function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("section-tab");
    x[n].style.display = "block";
    current_step_title = $('.cv-step-box[num=' + n + ']').attr('step_title');
    $('#step_head_title').html(current_step_title);

    //... and fix the Previous/Next buttons:
    if (n == 0) {
        $('.cv-footer-wizard').addClass('direction-rtl');
        document.getElementById("prevBtn").style.display = "none";
    } else {
        $('.cv-footer-wizard').removeClass('direction-rtl');
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        next_step_title = $('.cv-step-box[num=' + (n + 1) + ']').attr('step_title');
        document.getElementById("nextBtn").innerHTML = "Next: " + next_step_title;
    }
    if(n==5){
        getAllSkillRelatedToJobTitle();
    }
    //... and run a function that will display the correct step indicator:
    //fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("section-tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm(n)) {
        return false;
    }
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        // document.getElementById("regForm").submit();
        return false;
    }
    if (n == -1) $('.cv-step-num[num=' + (currentTab + 1) + ']').removeClass('active');
    $('.cv-step-num[num=' + currentTab + ']').addClass('active');
    // Otherwise, display the correct tab:
    $('.wp-page-el').removeClass('elementor-619');
    if(currentTab===7){
        $('.wp-page-el').addClass('elementor-619');
    }
    showTab(currentTab);
    animateTabsElem(currentTab)
    // if (currentTab == 5) {
    //     getAllSkillRelatedToJobTitle();
    // }
}
function animateTabsElem(currentTab){
    $('.hello-element').removeClass('animate_text');
    $('.hello-element').addClass('elementor-invisible');
    $('.hello-element[current_tab='+currentTab+']').removeClass('elementor-invisible');
    $('.hello-element[current_tab='+currentTab+']').addClass('animate_text');
}
function validateForm(n) {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("section-tab");
    y = x[currentTab].getElementsByClassName("input_required");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
        }
    }
    if (currentTab == 1 && !CheckWordDates()) valid = false;
    if (currentTab == 2 && !CheckProjectDates()) valid = false;
    if (currentTab == 3 && !CheckEducationDates()) valid = false;
    if (currentTab == 4 && !CheckCourseDates()) valid = false;
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        return storeCVData(currentTab);
        //   document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}

function getFormBasedOnStep(step_num) {
    if (step_num === 0) {
        return document.getElementById('cv_heading_form');
    }
    if (step_num === 1) {
        return document.getElementById('work_history_form');
    }
    if (step_num === 2) {
        return document.getElementById('project_form');
    }
    if (step_num === 3) {
        return document.getElementById('education_form');
    }
    if (step_num === 4) {
        return document.getElementById('courses_form');
    }
    if (step_num === 5) {
        SetSkillsContent();
        return document.getElementById('skills_form');
    }
    if (step_num === 6) {
        SetSummaryContent();
        return document.getElementById('summary_form');
    }
    if (step_num === 7) {
        return document.getElementById('languages_form');
    }
}
function SetSkillsContent(){
    $('input[name=skills_content]').val(tinymce.get('wpforms-591-field_1').getContent());
}
function SetSummaryContent(){
    $('input[name=summary_content]').val(tinymce.get('wpforms-614-field_1').getContent());
}
function storeCVData(step_num) {
    var valid = true;
    var loggedCustomer = $('input[name=customer]').val();
    if (step_num == 0 && loggedCustomer == '') {
        $('#cv_heading_form').submit();
    } else if (step_num == 8) {
        $('#finalise').submit();
    } else {
        var form = getFormBasedOnStep(step_num);
        $.ajax({
            method: "post",
            url: main_path + "cv-builder/saveCV?step=" + step_num,
            data: new FormData(form),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                redirect = JSON.parse(data).redirect;
                if (redirect != "" && typeof redirect !== 'undefined') {
                    return location.href = data.redirect;
                }
            },
            error: function (data) {
                console.log(data);
                valid = false;
            }
        });
    }
    return valid;
}

function AddWorkExperience() {
    current_workExperience++;
    $.post(main_path + 'cv-builder/AddNewWorkHistory', {current_workExperience: current_workExperience}, function (data) {
        $('#work_history_container').append(data);
    });
}
function RemoveAddedItem(Id){
    $("#"+Id).remove();
}
function AddProject() {
    current_project++;
    $.post(main_path + 'cv-builder/AddProject', {current_project: current_project}, function (data) {
        $('#project_section_container').append(data);
    });
}

function AddEducation() {
    current_edu++;
    $.post(main_path + 'cv-builder/AddEducation', {current_edu: current_edu}, function (data) {
        $('#education_section_container').append(data);
    });
}

function AddCourse() {
    current_course++;
    $.post(main_path + 'cv-builder/AddCourse', {current_course: current_course}, function (data) {
        $('#course_contianer_section').append(data);
    });
}

function AddLanguage() {
    current_language++;
    $.post(main_path + 'cv-builder/AddLanguage', {current_language: current_language}, function (data) {
        $('#languages_section').append(data);
    });
}

function getAllSkillRelatedToJobTitle() {
    $('#skills_suggestions').html('<i class="fa fa-spinner"></i>');
    var search_keys=$('input[name=search_skills_job_title]').val();
    $.ajax({
        method: "post",
        url: main_path + "cv-builder/getSkillsRelatedToJobTitle",
        data:{search_keys:search_keys},
        cache: false,
        success: function (data) {
            $('#skills_suggestions').html(data);
        },
        error: function (data) {
            console.log(data);
            valid = false;
        }
    });
}
function getAllSummariesRelatedToJobTitle() {
    $('#skills_suggestions').html('<i class="fa fa-spinner"></i>');
    var search_keys=$('input[name=search_summaries_job_title]').val();
    $.ajax({
        method: "post",
        url: main_path + "cv-builder/getAllSummariesRelatedToJobTitle",
        data:{search_keys:search_keys},
        cache: false,
        success: function (data) {
            $('#summaries_suggestions').html(data);
        },
        error: function (data) {
            console.log(data);
            valid = false;
        }
    });
}
function addSummaryData(id,content){
    $('#summary_form').append('<input type="hidden" class="summaries_idss a_summary_id_'+id+'" name="summaries_ids[]" value="' + id + '"/>');
    var el = tinymce.get("wpforms-614-field_1").dom.create('p', {id: id, 'class': 'myclass'}, content);
    tinymce.get("wpforms-614-field_1").selection.setNode(el);
    $('.summaries_data[summary_id=' + id + ']').addClass('checked');
    $('.summaries_data[summary_id=' + id + ']').find("span.add-remove").html('<i class="fas fa-minus-circle"></i>');
    $('.summaries_data[summary_id=' + id + ']').attr('onclick','removeSummaryDate("'+id+'","'+content+'")')

}
function removeSummaryDate(id,content){
    tinymce.get("wpforms-614-field_1").dom.remove(id);
    $('.a_summary_id_'+id).remove();
    $('.summaries_data[summary_id=' + id + ']').removeClass('checked');
    $('.summaries_data[summary_id=' + id + ']').find("span.add-remove").html('<i class="fas fa-plus-circle"></i>');
    $('.summaries_data[summary_id=' + id + ']').attr('onclick','addSummaryData("'+id+'","'+content+'")')
}
function addSkillData(skill_id, skill_content) {
    $('#skills_form').append('<input type="hidden" class="skills_idss a_skill_id_'+skill_id+'" name="skills_ids[]" value="' + skill_id + '"/>');
    var el = tinymce.get("wpforms-591-field_1").dom.create('p', {id: skill_id, 'class': 'myclass'}, skill_content);
    tinymce.get("wpforms-591-field_1").selection.setNode(el);
    $('.skills_data[skill_id=' + skill_id + ']').addClass('checked');
    $('.skills_data[skill_id=' + skill_id + ']').find("span.add-remove").html('<i class="fas fa-minus-circle"></i>');
    $('.skills_data[skill_id=' + skill_id + ']').attr('onclick','removeSkillDate("'+skill_id+'","'+skill_content+'")')
}
function removeSkillDate(skill_id,skill_content){
    tinymce.get("wpforms-591-field_1").dom.remove(skill_id);
    $('.a_skill_id_'+skill_id).remove();
    $('.skills_data[skill_id=' + skill_id + ']').removeClass('checked');
    $('.skills_data[skill_id=' + skill_id + ']').find("span.add-remove").html('<i class="fas fa-plus-circle"></i>');
    $('.skills_data[skill_id=' + skill_id + ']').attr('onclick','addSkillData("'+skill_id+'","'+skill_content+'")')

}
function SetInitSkillContent(){
    $('#wpforms-591-field_1').html($('input[name=skills_content]').val());
}
function SetInitSummaryContent(){
    $('#wpforms-614-field_1').html($('input[name=summary_content]').val());
}
function previewCV(){
    storeCVData(currentTab)
    $('.preview_cv_modal').addClass('show');
    cv_id=$('input[name=customer_cv_id]').val();
    $.ajax({
        method: "post",
        url: main_path + "cv-builder/PreviewCV/"+cv_id,
        cache: false,
        success: function (data) {
            $('#preview_cv_modal_content').html(data);
        },
        error: function (data) {
            console.log(data);
            valid = false;
        }
    });
}
