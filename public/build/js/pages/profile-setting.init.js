/*
Template Name: Velzon - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Profile-setting init js
*/

// Profile Foreground Img
if (document.querySelector("#profile-foreground-img-file-input")) {
    document.querySelector("#profile-foreground-img-file-input").addEventListener("change", function () {
        var preview = document.querySelector(".profile-wid-img");
        var file = document.querySelector(".profile-foreground-img-file-input")
            .files[0];
        var reader = new FileReader();
        reader.addEventListener(
            "load",
            function () {
                preview.src = reader.result;
            },
            false
        );
        if (file) {
            reader.readAsDataURL(file);
        }
    });
}

// Profile Foreground Img
if (document.querySelector("#profile-img-file-input")) {
    document.querySelector("#profile-img-file-input").addEventListener("change", function () {
        var preview = document.querySelector(".user-profile-image");
        var file = document.querySelector(".profile-img-file-input").files[0];
        var reader = new FileReader();
        reader.addEventListener(
            "load",
            function () {
                preview.src = reader.result;
            },
            false
        );
        if (file) {
            reader.readAsDataURL(file);
        }
    });
}


var count = 2;

// var genericExamples = document.querySelectorAll("[data-trigger]");
// for (i = 0; i < genericExamples.length; ++i) {
//     var element = genericExamples[i];
//     new Choices(element, {
//         placeholderValue: "This is a placeholder set in the config",
//         searchPlaceholderValue: "This is a search placeholder",
//         searchEnabled: false,
//     });
// }

function new_link() {
    count++;
    var div1 = document.createElement('div');
    div1.id = count;

    var delLink = '<div class="row"><div class="col-lg-12">' +
    '<div class="mb-3">' +
    '<label for="jobTitle1" class="form-label">Job Title</label>' +
    '<input type="text" class="form-control" name="job_title[]" id="jobTitle1" placeholder="Job title">' +
    '</div></div>' +
    '<div class="col-lg-6">' +
    '<div class="mb-3">' +
    '<label for="companyName" class="form-label">Company Name</label>' +
    '<input type="text" class="form-control" name="company_name[]" id="companyName" placeholder="Company name">' +
    '</div>' +
    '</div>' +
    '<div class="col-lg-6">' +
    '<div class="mb-3">' +
    '<label for="choices-single-default3" class="form-label">Experience Years</label>' +
    '<div class="row">' +
    '<div class="col-lg-5">' +
    '<select class="form-control" data-trigger name="experience_start_year[]"> ' +
    '<option value="">Select years</option>' +
    '<option value="2001">2001</option>' +
    '<option value="2003">2002</option>' +
    '<option value="2003">2003</option>' +
    '<option value="2004">2004</option>' +
    '<option value="2005">2005</option>' +
    '<option value="2006">2006</option>' +
    '<option value="2007">2007</option>' +
    '<option value="2008">2008</option>' +
    '<option value="2009">2009</option>' +
    '<option value="20010">2010</option>' +
    '<option value="2011">2011</option>' +
    '<option value="2012">2012</option>' +
    '<option value="2013">2013</option>' +
    '<option value="2014">2014</option>' +
    '<option value="2015">2015</option>' +
    '<option value="2016">2016</option>' +
    '<option value="2017">2017</option>' +
    '<option value="2018">2018</option>' +
    '<option value="2019">2019</option>' +
    '<option value="2020">2020</option>' +
    '<option value="2021">2021</option>' +
    '<option value="2022">2022</option>' +
    '</select>' +
    '</div>' +
    '<div class="col-auto align-self-center">to</div>' +
    '<div class="col-lg-5">' +
    '<select class="form-control" data-trigger name="experience_end_year[]">' +
    '<option value="">Select years</option>' +
    '<option value="2001">2001</option>' +
    '<option value="2003">2002</option>' +
    '<option value="2003">2003</option>' +
    '<option value="2004">2004</option>' +
    '<option value="2005">2005</option>' +
    '<option value="2006">2006</option>' +
    '<option value="2007">2007</option>' +
    '<option value="2008">2008</option>' +
    '<option value="2009">2009</option>' +
    '<option value="20010">2010</option>' +
    '<option value="2011">2011</option>' +
    '<option value="2012">2012</option>' +
    '<option value="2013">2013</option>' +
    '<option value="2014">2014</option>' +
    '<option value="2015">2015</option>' +
    '<option value="2016">2016</option>' +
    '<option value="2017">2017</option>' +
    '<option value="2018">2018</option>' +
    '<option value="2019">2019</option>' +
    '<option value="2020">2020</option>' +
    '<option value="2021">2021</option>' +
    '<option value="2022">2022</option>' +
    '</select></div></div></div></div>' +
    '<div class="col-lg-12">' +
    '<div class="mb-3">' +
    '<label for="jobDescription" class="form-label">Job Description</label>' +
    '<textarea class="form-control" name="job_description[]" id="jobDescription" rows="3" placeholder="Enter description"></textarea>' +
    '</div></div><div class="hstack gap-2 justify-content-end"><a class="btn btn-success" href="javascript:deleteEl(' + count + ')">Delete</a></div></div>';


    div1.innerHTML = document.getElementById('newForm').innerHTML + delLink;

    document.getElementById('newlink').appendChild(div1);

    var genericExamples = document.querySelectorAll("[data-trigger]");
    Array.from(genericExamples).forEach(function (genericExamp) {
        var element = genericExamp;
        new Choices(element, {
            placeholderValue: "This is a placeholder set in the config",
            searchPlaceholderValue: "This is a search placeholder",
            searchEnabled: false,
        });
    });
}

function deleteEl(eleId) {
    d = document;
    var ele = d.getElementById(eleId);
    var parentEle = d.getElementById('newlink');
    parentEle.removeChild(ele);
}

function updatePassword(element) {
    var request = new XMLHttpRequest();
    // Instantiating the request object
    request.open("POST", "update-password", true);
    var params = '_token='+document.getElementsByName('_token')[0].value+'&current_password='+document.getElementById('oldpasswordInput').value+'&password='+document.getElementById('newpasswordInput').value+'&password_confirmation='+document.getElementById('confirmpasswordInput').value;
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    // Defining event listener for readystatechange event
    request.onreadystatechange = function() {//Call a function when the state changes.
        if(request.readyState == 4 && request.status == 200) {
            response = JSON.parse(request.responseText);
            if(response.isSuccess) {
                Toastify({
                    text: response.Message,
                    className: "success",
                    duration: 3000
                }).showToast();
                document.querySelector('#changePassword > form').reset();
            } else {
                Toastify({
                    text: response.Message,
                    className: "danger",
                    duration: 3000
                }).showToast();
            }
        }
    }
    // Sending the request to the server
    request.send(params);
}
