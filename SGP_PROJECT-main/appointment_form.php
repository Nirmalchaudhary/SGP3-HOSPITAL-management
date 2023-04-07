<?php
$servername="localhost";
$username="root";
$password="";
$database="application details";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
die("some error has occured!!");
?>
        <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $pno = $_POST['pno'];
                    $email = $_POST['email'];
                    $date = $_POST['date'];
                    $subject = $_POST['subject'];
                    $topic = $_POST['topic'];
                    $chapter = $_POST['chapter'];
                    $desc = $_POST['desc'];
                    $sql="INSERT INTO `form` (`s no.`, `first name`, `last name`, `phone no.`, `email`, `app date`, `doc type`, `doc name`, `app time`, `app description`, `form filling time`) VALUES (NULL, '$fname','$lname','$pno', '$email','$date','$subject','$topic','$chapter', '$desc', current_timestamp())";
                   
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your entry has been submitted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
                }
                ?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background: url(/Forms/appointment_bg1.jpg)no-repeat center center/cover;">
    <div class="container mt-5">
        <div class="row" >
            <div class="col-md-6 offset-md-3 border p-4 shadow bg-light" >
                <div class="col-12" >
                    <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Appointment form</h3>
                </div>
                <form action="/om/appointment_form.php" method="post">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" required pattern="[A-Za-z]*">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" required pattern="[A-Za-z]*">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" name="pno" id="pno" class="form-control" placeholder="+91 Phone Number" required  pattern="[0-9]{10}">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required >
                        </div>
                        <div class="col-md-6">
                            <input type="date" name="date" id="date" class="form-control" placeholder="Enter Date" required >
                        </div>
                        <script>
                            const dateE1 =document.getElementById('date');
                            const today=new Date().toISOString().split('T')[0];
                            dateE1.setAttribute('min',today);
                        </script>
                        <div class="col-12">
                            <select name="subject" id="subject" class="form-select" style="margin-bottom: -32px;" required>
                                <option value="" selected="selected">Select Doctor Type</option>
                            </select>
                            <br><br>
                            <select name="topic" id="topic" class="form-select" style="margin-bottom: -32px;" required>
                                <option value="" selected="selected">Please Select Doctor Type First</option>
                            </select>
                            <br><br>
                            <select name="chapter" id="chapter" class="form-select" style="margin-bottom: -47px;" required>
                                <option value="" selected="selected">Please Select Doctor First</option>
                            </select>
                            <br><br>
                        </div>
                        <script>
                            var subjectObject = {
                                "Cardiologist": {
                                    "Dr. Kushal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Vatsal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Aryan": ["9:00", "11:00", "1:00", "3:00"]
                                },
                                "Urologist": {
                                    "Dr. Kushal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Vatsal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Aryan": ["9:00", "11:00", "1:00", "3:00"]
                                },
                                "Neurologist": {
                                    "Dr. Kushal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Vatsal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Aryan": ["9:00", "11:00", "1:00", "3:00"]
                                },
                                "Dentist": {
                                    "Dr. Kushal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Vatsal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Aryan": ["9:00", "11:00", "1:00", "3:00"]
                                },
                                "Dermatologist": {
                                    "Dr. Kushal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Vatsal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Aryan": ["9:00", "11:00", "1:00", "3:00"]
                                },
                                "Orthopedic": {
                                    "Dr. Kushal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Vatsal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Aryan": ["9:00", "11:00", "1:00", "3:00"]
                                },
                                "Physiotherapy": {
                                    "Dr. Kushal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Vatsal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Aryan": ["9:00", "11:00", "1:00", "3:00"]
                                },
                                "Pediatric": {
                                    "Dr. Kushal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Vatsal": ["9:00", "11:00", "1:00", "3:00"],
                                    "Dr. Aryan": ["9:00", "11:00", "1:00", "3:00"]
                                }
                            }
                            window.onload = function () {
                                var subjectSel = document.getElementById("subject");
                                var topicSel = document.getElementById("topic");
                                var chapterSel = document.getElementById("chapter");
                                for (var x in subjectObject) {
                                    subjectSel.options[subjectSel.options.length] = new Option(x, x);
                                }
                                subjectSel.onchange = function () {

                                    chapterSel.length = 1;
                                    topicSel.length = 1;
    
                                    for (var y in subjectObject[this.value]) {
                                        topicSel.options[topicSel.options.length] = new Option(y, y);
                                    }
                                }
                                topicSel.onchange = function () {
                    
                                chapterSel.length = 1;
        
                                    var z = subjectObject[subjectSel.value][this.value];
                                    for (var i = 0; i < z.length; i++) {
                                        chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
                                    }
                                }
                            }
                        </script>
                        <div class="col-12">
                            <textarea name="desc" id="desc" class="form-control" placeholder="Write your problem here" required></textarea>
                        </div>
                        <div class="col-12 mt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/om/index.php" type="button" class="btn btn-secondary float-end me-2 bg-success">home</a>
                            <button type="button" class="btn btn-outline-secondary float-end me-2" onclick="goBack()">Cancel</button>
                            
                           
                        </div>
                    </div>
                </form>
        
                   <script>
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
                </script>
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            </div>
        </div>
    </div>
</body>

</html>
