<?php
include("includes/header.php");

if($userRole > 1) {
    header("Location: http://localhost/quizproject/quizhomepage.php");    
    exit();
}

if(isset($_GET['message'])) {
    $message = $_GET['message'];
}


$subjectOptions = array(
    "DBMS" => "DBMS",
    "CNS" => "CNS",
    "UNIX" => "UNIX",
    "DSA" => "DSA",
    "APTITUDE" => "APTITUDE",
    "PYTHON" => "PYTHON",
    "GENERAL KNOWLEDGE" => "GENERAL KNOWLEDGE",
    "HISTORY" => "HISTORY"
);

?>
    
       
        <div class="container" style="margin-top: 20px;">
            <div style="text-align: center; font-weight: bold;">
                <p><?php if(isset($message)) {echo $message;} ?></p>
            </div>
            <form id="deleteForm" method="POST" action="delete_handler.php" name="deleteSubjectForm">
                <input type="hidden" name="userLoggedIn" value="<?php echo $userLoggedIn; ?>">
                <input type="hidden" name="userRole" value="<?php echo $userRole; ?>">
                <div class="form-group row">
                    <label for="subjects" class="col-sm-2 col-form-label">Choose subject to delete</label>
                    <div class="col-sm-10">
                        <select type="select" class="form-control" id="subject" name="subjects[]" multiple>
                            <?php
                             foreach($subjectOptions as $key => $value)
                             {
                                ?>                                
                                <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                <?php
                             }
                            ?>
                        </select>           
                    </div>                    
                </div>
                        
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" id="submitDeleteSubject" name="submitDeleteSubject">Proceed</button>                
                    </div>
                </div>            
            </form>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>