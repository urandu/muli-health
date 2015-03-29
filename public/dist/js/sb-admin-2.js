$(function() {

    $('#side-menu').metisMenu();

});


window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";
window.onhashchange=function(){window.location.hash="no-back-button";}


//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});

function add_allergy()
{


    url = "http://localhost/muli/doctor/add_allergy";



    var posting_comment = $.post(url, { allergy: $('#allergy').val(),visit_id:$('#visit_id').val(),patient_id:$('#patient_id').val() });

    posting_comment.error(function () {

        alert("Error in saving allergy please try again");

    });

    posting_comment.done(function (data)
    {

       // host=$('#allergy').val();


        stri=' <tr><td>#</td>  <td>'+data+'</td></tr>';
        //alert(stri);
        $('#allergy_body').append(stri);
        $('#allergy').val(null);
        $('#allergy_holder').remove();
    });
}

function add_prescription()
{


    url = "http://localhost/muli/doctor/add_prescription";



    var posting_comment = $.post(url, { prescription: $('#prescription').val(),visit_id:$('#visit_id').val(),patient_id:$('#patient_id').val() });

    posting_comment.error(function () {

        alert("Error in saving prescription please try again");

    });

    posting_comment.done(function (data)
    {

       // host=$('#prescription').val();


        stri=' <tr><td>#</td>  <td>'+data+'</td></tr>';
        //alert(stri);
        $('#prescription_body').append(stri);
        $('#prescription').val(null);
    });
}


function add_diagnosis()
{


    url = "http://localhost/muli/doctor/add_diagnosis";



    var posting_comment = $.post(url, { diagnosis: $('#diagnosis1').val(),visit_id:$('#visit_id').val(),patient_id:$('#patient_id').val() });

    posting_comment.error(function () {

        alert("Error in saving diagnosis please try again");

    });

    posting_comment.done(function (data)
    {

        //host=$('#diagnosis1').val();


        stri=' <tr><td>#</td>  <td>'+data+'</td></tr>';
        //alert(stri);
        $('#diagnosis_body').append(stri);
        $('#diagnosis1').val(null);
    });
}

function add_lab_test()
{


    url = "http://localhost/muli/doctor/add_lab_test";



    var posting_comment = $.post(url, { test_done: $('#test_done').val(),visit_id:$('#visit_id').val(),patient_id:$('#patient_id').val() });

    posting_comment.error(function () {

        alert("Error in saving test please try again");

    });

    posting_comment.done(function (data)
    {

        //host=$('#test_done').val();


        stri=' <tr><td>#</td>  <td>'+data+'</td></tr>';
        //alert(stri);
        $('#lab_test_body').append(stri);
        $('#test_done').val(null);
    });
}



function add_medical_profile()
{


    url = "http://localhost/muli/doctor/add_medical_profile";



    var posting_comment = $.post(url, { complaint_history: $('#history1').val(),present_complaint: $('#complaint1').val(),visit_id:$('#visit_id').val(),patient_id:$('#patient_id').val() });

    posting_comment.error(function () {

        alert("Error in saving diagnosis please try again");

    });

    posting_comment.done(function (data)
    {

        host=$('#save_medical_profile').val('saved');



    });
}



function save_lab_result(test_id)
{

    url = "http://localhost/muli/lab/save_lab_result";



    var posting_comment = $.post(url, { test_id:test_id,test_result: $('#result_input_'+test_id).val() });

    posting_comment.error(function () {

        alert("Error in saving test result please try again");

    });

    posting_comment.done(function (data)
    {

        //host=$('#save_medical_profile').val('saved');
        alert('result successfully saved');



    });


}




function add_drug()
{


    url = "http://localhost/muli/admin_home/add_drug";



    var posting_comment = $.post(url, { drug_name: $('#drug_name').val(),price:$('#drug_cost').val() });

    posting_comment.error(function () {

        alert("Error in saving drug please try again");

    });

    posting_comment.done(function (data)
    {

        // host=$('#prescription').val();


        stri=' <tr>  <td>'+$('#drug_name').val()+'</td><td>'+$('#drug_cost').val()+'</td></tr>';
        //alert(stri);
        $('#drug_body').append(stri);
        $('#drug_name').val(null);
        $('#drug_cost').val(null);
    });
}




function add_lab_test_name()
{


    url = "http://localhost/muli/admin_home/add_lab_test_name";



    var posting_comment = $.post(url, { test_name: $('#test_name').val(),test_cost:$('#test_cost').val() });

    posting_comment.error(function () {

        alert("Error in saving lab test please try again");

    });

    posting_comment.done(function (data)
    {

        // host=$('#prescription').val();


        stri=' <tr>  <td>'+$('#test_name').val()+'</td><td>'+$('#test_cost').val()+'</td></tr>';
        //alert(stri);
        $('#lab_test_name_body').append(stri);
        $('#test_name').val(null);
        $('#test_cost').val(null);
    });
}




function add_disease()
{


    url = "http://localhost/muli/admin_home/add_disease";



    var posting_comment = $.post(url, { disease_name: $('#test_name').val() });

    posting_comment.error(function () {

        alert("Error in saving disease test please try again");

    });

    posting_comment.done(function (data)
    {

        // host=$('#prescription').val();


        stri=' <tr>  <td>'+$('#disease_name').val()+'</td></tr>';
        //alert(stri);
        $('#disease_body').append(stri);
        $('#disease_name').val(null);

    });
}



function add_allergy_name()
{


    url = "http://localhost/muli/admin_home/add_allergy_name";



    var posting_comment = $.post(url, { allergy_name: $('#allergy_name').val() });

    posting_comment.error(function () {

        alert("Error in saving allergy name test please try again");

    });

    posting_comment.done(function (data)
    {

        // host=$('#prescription').val();


        stri=' <tr>  <td>'+$('#allergy_name').val()+'</td></tr>';
        //alert(stri);
        $('#allergy_name_body').append(stri);
        $('#allergy_name').val(null);

    });
}