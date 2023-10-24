// var currentTab = 0; // Current tab is set to be the first tab (0)
var current_workExperience=1;
var current_project=1;
var button_indecator=0;
var current_edu=1;
var current_language=1;
showTab(currentTab); // Display the current tab
openModal();
var main_path="http://localhost/cv/public/";
function openModal(){
    $('.modal').toggleClass('show');
}
$(document).ready(function(){
    $('button.close').on('click',function (){
        $('.modal').removeClass('show');
    });
    $('.continue_create_cv').on('click',function (){
        $('.modal').removeClass('show');
    });
})
function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("section-tab");
    x[n].style.display = "block";
    current_step_title=$('.cv-step-box[num='+n+']').attr('step_title');
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
        next_step_title=$('.cv-step-box[num='+(n+1)+']').attr('step_title');
        document.getElementById("nextBtn").innerHTML = "Next: "+next_step_title;
    }
    //... and run a function that will display the correct step indicator:
    //fixStepIndicator(n)
}
function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("section-tab");
    // Exit the function if any field in the current tab is invalid:
    if (n==1 && !validateForm(n)) return false;
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
    if(n==-1) $('.cv-step-num[num='+(currentTab+1)+']').removeClass('active');
    $('.cv-step-num[num='+currentTab+']').addClass('active');
    // Otherwise, display the correct tab:
    showTab(currentTab);
    if(currentTab==5){
        getAllSkillRelatedToJobTitle();
    }
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
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        return storeCVData(currentTab);
        //   document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    // return valid; // return the valid status
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
function getFormBasedOnStep(step_num){
    if(step_num===0){
        return document.getElementById('cv_heading_form');
    }
    if(step_num===1){
        return document.getElementById('work_history_form');
    }
    if(step_num===2){
        return document.getElementById('project_form');
    }
    if(step_num===3){
        return document.getElementById('education_form');
    }
    if(step_num===4){
        return document.getElementById('courses_form');
    }
    if(step_num===5){
        return document.getElementById('skills_form');
    }
    if(step_num===6){
        return document.getElementById('summary_form');
    }
    if(step_num===7){
        return document.getElementById('languages_form');
    }
}
function storeCVData(step_num){
    var valid =true;
    var loggedCustomer=$('input[name=customer]').val();
    if(step_num==0 && loggedCustomer==''){
       $('#cv_heading_form').submit();
    }else{
        var form=getFormBasedOnStep(step_num);

        $.ajax({
            method: "post",
            url: main_path + "cv-builder/saveCV?step=" + step_num,
            data: new FormData(form),
            contentType: false,
            cache: false,
            processData:false,
            success: function (data) {
                redirect=JSON.parse(data).redirect;
                if(redirect!="" && typeof redirect !== 'undefined'){
                    return location.href=data.redirect;
                }
            },
            error: function (data) {
                console.log(data);
                valid=false;
            }
        });
    }
    return valid;
}
function AddWorkExperience(){
    current_workExperience++;
    $.post(main_path+'cv-builder/AddNewWorkHistory', {current_workExperience:current_workExperience}, function (data) {
        $('#work_history_container').append(data);
    });
}
function AddProject(){
    current_project++;
    $.post(main_path+'cv-builder/AddProject', {current_project:current_project}, function (data) {
        $('#project_section_container').append(data);
    });
}
function AddEducation(){
    current_edu++;
    $.post(main_path+'cv-builder/AddEducation', {current_edu:current_edu}, function (data) {
        $('#education_section_container').append(data);
    });
}
function AddCourse(){
    current_course++;
    $.post(main_path+'cv-builder/AddCourse', {current_course:current_course}, function (data) {
        $('#course_contianer_section').append(data);
    });
}
function AddLanguage(){
    current_language++;
    $.post(main_path+'cv-builder/AddLanguage', {current_language:current_language}, function (data) {
        $('#languages_section').append(data);
    });
}
function getAllSkillRelatedToJobTitle(){
    $('#skills_suggestions').html('<i class="fa fa-spinner"></i>');
    $.ajax({
        method: "post",
        url: main_path + "cv-builder/getSkillsRelatedToJobTitle",
        contentType: false,
        cache: false,
        processData:false,
        success: function (data) {
           $('#skills_suggestions').html(data);
        },
        error: function (data) {
            console.log(data);
            valid=false;
        }
    });
}
function addSkillData(skill_id,skill_content){
    $('#skills_form').append('<input type="hidden" class="skills_idss" name="skills_ids[]" value="'+skill_id+'"/>');
    $('.skill_content').append(skill_content+'\r\n');
    $('.skills_data[skill_id='+skill_id+']').remove();
}
