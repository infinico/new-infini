<?php
    $nameErr = "";
    $emailErr = "";
    $emailFormatErr = "";
    $subjectErr = "";
    $commentErr = "";
    
    if(isset($_POST["submit"])){
        $counter = 0;
        if(empty($_POST["name"])){
            $nameErr = "Please enter your first name.";
            $counter = 1;
        }
        
        if(empty($_POST["email"])){
            $emailErr = "Please enter your email.";  
            $counter = 1;
        }
        
        else if(!preg_match("/^([0-9a-zA-Z]+[-._+&amp;])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$/", $_POST["email"])){
            $emailFormatErr = "Please enter the right email format. ex: example@gmail.com";
            $counter = 1;
        }
        
        if(empty($_POST["subject"])){
            $subjectErr = "Please enter the subject.";
            $counter = 1;
        }
        
        if(empty($_POST["comment"])){
            $commentErr = "Please enter the comment."; 
            $counter = 1;
        }
        
        if($counter != 1){
            $emailTo = "jja4740@rit.edu";
            $subject = $_POST["subject"];
            $body = $_POST["comment"];
            $header = "Cc: " . $_POST["email"] . "\r\n";
            mail($emailTo, $subject, $body, $header);
        }
           
    }

    $title = "Infini | Contact";
    include("assets/inc/header.inc.php");

?>

<script>
    
    var contact = document.getElementById("navContact");
    contact.className += " is-active";
    
    document.getElementById("navContact").style.color = "black";
</script>
                    <div class="block">
                        <div id="formWrapper">
                            <form method="post" id="form" action="contact.php" onsubmit="">
                                <h2>Contact us if you have any question. Don't be hesitated!</h2>

                                <span>Name: </span>
                                <input type="text" id="name" name="name" maxlength="30" size="30" placeholder="Enter your name"/>
                                <span class = "error"><?php echo $nameErr ?></span>

                                <br/><br/>

                                <span>Email: </span>
                                <input type="text" id="email" name="email" size="30" placeholder="Enter your email" />
                                <span class = "error">
                                    <?php 
                                        if($emailErr){
                                            echo $emailErr;
                                        } 
                                        else { 
                                            echo $emailFormatErr; 
                                        } 
                                    ?>
                                </span>

                                <br/><br/>

                                <span>Subject: </span>
                                <input type="text" id="subject" name="subject" maxlength="30" size="30"
                                       placeholder="Enter the subject" /> 
                                <span class = "error"><?php echo $subjectErr ?></span>

                                <br/><br/>

                                <span id="comment">Comment: </span>
                                <textarea placeholder="Enter your comment" name="comment"></textarea> 
                                <span class = "error"><?php echo $commentErr ?></span>

                                <br/><br/>

                                <input type="submit" value="Submit" id="submit" name="submit" />
                            </form>
                        </div>
                    </div>
<?php 
    include("assets/inc/footer.inc.php");
?>