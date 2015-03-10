$(function() {

    $('#side-menu').metisMenu();

});

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

        host=$('#allergy').val();


        stri=' <tr><td>#</td>  <td>'+host+'</td></tr>';
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

        host=$('#prescription').val();


        stri=' <tr><td>#</td>  <td>'+host+'</td></tr>';
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

        host=$('#diagnosis1').val();


        stri=' <tr><td>#</td>  <td>'+host+'</td></tr>';
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

        host=$('#test_done').val();


        stri=' <tr><td>#</td>  <td>'+host+'</td></tr>';
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