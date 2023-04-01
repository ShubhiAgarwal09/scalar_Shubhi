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
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6" >
                            <h2>Mentor Assignment List</h2>
                <div class="box-footer">
                    <div class="tabledesign">
                        <div class="listclass" id="listclass"></div>
                    </div>
                </div>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
            </div>
            <h2>Evaluate Students</h2>
                
            <form class="form1 show" >
            
                    <div class="form-group">
                        <label for="uni">Choose Who you are</label><br>
                        <select name="list4" id="list4" class="form-control" onchange="getstudent2();">
                            <option value="0">Select Mentor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tclass" style="margin-top: 2rem;">Choose student to evaluate</label><br>
                        <select name="list5" id="list5" class="form-control">
                            <option value="0">Select Student ID</option>
                        </select>
                    </div>
            <div class="form-group">
                <label for="idea">Idea</label><br>
                <input type="number" name="idea" id="idea" placeholder="Ideation phase marks" class="form-control">
            </div>
            <div class="form-group">
                <label for="execution">Execution</label><br>
                <input type="number" name="exceution" id="execution" placeholder="Execution phase marks" class="form-control">
            </div>
            <div class="form-group">
                <label for="viva">Viva</label><br>
                <input type="number" name="viva" id="viva" placeholder="Viva marks " class="form-control">
            </div>
            <div >
                <button class="button1" onclick="evaluate1()" style="margin-top: 2rem;">SUBMIT</button>
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
            $('#list3').html(data);
        }
    });
}
getmentor2();
function getmentor2() {

$.ajax({
    type: 'POST',
    url: "ajax/cgetmentor.php",
    data: {
        //token: token
    },
    success: function(data) {
        $('#list4').html(data);
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
                alert(data);
                if (data == 0) {
                    alert('assign added successfully');
                    //window.location = "index.php";
                }
            }
        });
    } else {
        alert('please fill all details');
    }
};

showassign();
function showassign() {
        $.ajax({
            type: 'POST',
            url: "ajax/getallassign.php",
            data: {
                //token: token
            },
            success: function(data) {
                $('#listclass').html(data);
            }
        });
    }

    function deleted(i,a){
        //alert(i);
    $.ajax({
        type: 'POST',
        url: "ajax/delassign.php",
        data: {
            id:i,
            aid:a
        },
        success: function(data) {
            alert(data);
            if (data == 0) {
                
                alert('Deleted successfully');
                window.location = "index.php";
                }
        }
    });
}
//getstudent2();
function getstudent2() {
    var id = document.getElementById('list4').value;
$.ajax({
    type: 'POST',
    url: "ajax/getstudent.php",
    data: {
        //token: token
        id:id
    },
    success: function(data) {
        $('#list5').html(data);
    }
});
}
function evaluate1(){
    var id = document.getElementById('list4').value;
    var sid = document.getElementById('list5').value;
    var idea = document.getElementById('idea').value;
    var execution = document.getElementById('execution').value;
    var viva = document.getElementById('viva').value;
    alert(id);
    alert(sid);
    //if (id != "" && sid!="") {
        $.ajax({
            type: 'POST',
            url: "ajax/evaluate.php",
            data: {
                id:id,
                sid:sid,
                idea:idea,
                execution:execution,
                viva:viva
            },
            success: function(data) {
                alert(data);
                if (data == 0) {
                    alert('evaluated successfully');
                    //window.location = "index.php";
                }else{
                    alert('Input the values');
                }
            }
        });
    /*} else {
        alert('please fill all details');
    }*/
}


    </script>
    <script type=text/javascript>
    $('form').submit(function(e) {
        e.preventDefault();
    });
    </script>
</html>