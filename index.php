<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor-View</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>

            <form>
                <div class="form2 show" id="form2" >
                    <div class="form-group">
                        <label for="uni">CHOOSE MENTOR</label><br>
                        <div class="contain-input">
                            <div class="list3" id="list3" style="width: 100%; float: left;"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="uni">CHOOSE STUDENT</label><br>
                        <div class="contain-input" >
                            <div class="list2" id="list2" style="width: 100%; float: left;"></div>
                        </div>
                    </div>
                    <div >
                        <button class="button1" onclick="assign();" style="margin-top: 2rem;">SUBMIT</button>
                    </div>
                </div>
            </form>
</body>
<script>
    
getmentor();

function getmentor() {

    $.ajax({
        type: 'POST',
        url: "ajax/cgetmentor.php",
        data: {
            //token: token
        },
        success: function(data) {
            //$('#list').html(data);
            $('#list3').html(data);
        }
    });
}

getstudent();
function getstudent() {

$.ajax({
    type: 'POST',
    url: "ajax/cgetstudent.php",
    data: {
        //token: token
    },
    success: function(data) {
        //$('#list').html(data);
        $('#list2').html(data);
    }
});
}

function assign() {
    var mentor = document.getElementById('mentor').value;
    var student = document.getElementById('student').value;
    if (mentor != ""&& student!="") {
        $.ajax({
            type: 'POST',
            url: "ajax/addstudent.php",
            data: {
                mentor:mentor,
                student:student
            },
            success: function(data) {
                if (data == 0) {
                    alert('assign added successfully');
                    window.location = "index.php";
                }
            }
        });
    } else {
        alert('please fill all details');
    }
};


    </script>
</html>