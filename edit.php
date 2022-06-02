<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registration</title>
</head>

<?php

include 'database/database.php';
$dbobj = new Database();
$connection = $dbobj->createconnection();

$query = "SELECT * FROM registrations WHERE id=" . $_GET['id'];
$result = mysqli_query($connection, $query);

$registration = mysqli_fetch_assoc($result);


$function = explode(',', $registration['function']);


?>

<body>
    <div class="container">
        <h1>Edit Register</h1>
        <form action="update.php" method="POST" class="needs-validation" novalidate>
            <div class="row">
                <div class='col-md-6'>
                    <div>
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" class="form-control required" name="name" id="name" value="<?php echo $registration['name']; ?>" placeholder="Enter name" required>
                    </div>
                    <div>
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control required" name="email" id="email" value="<?php echo $registration['email']; ?>" placeholder="Enter Your Email" required>
                    </div>
                    <div>
                        <label for="bloodgroup" class="form-label">Blood Group *</label>
                        <select name="bloodgroup" id="bloodgroup" class="form-select required" aria-label="Default select example" required>
                            <option value="">Select your Blood Group</option>
                            <option value="AB-ve" <?php echo ($registration['bloodgroup'] == 'AB-ve') ? 'selected' : ''; ?>>AB-ve</option>
                            <option value="b+ve" <?php echo ($registration['bloodgroup'] == 'b+ve') ? 'selected' : ''; ?>>B+ve</option>
                            <option value="o-ve" <?php echo ($registration['bloodgroup'] == 'o-ve') ? 'selected' : ''; ?>>O-ve</option>
                            <option value="B-ve" <?php echo ($registration['bloodgroup'] == 'B-ve') ? 'selected' : ''; ?>>B-ve</option>
                            <option value="o+ve" <?php echo ($registration['bloodgroup'] == 'o+ve') ? 'selected' : ''; ?>>O+ve</option>
                        </select>
                    </div>
                    <div>
                        <label for="" class="form-label"><b>Gender</b></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male" <?php echo ($registration['gender'] == 'Male') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="genderMale">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female" <?php echo ($registration['gender'] == 'Female') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="genderFemale">
                                Female
                            </label>
                        </div>
                        <div>
                            <label for="" class="form-label"><b>Function</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="function[]" id="functadd" value="Add" <?php echo (in_array('Add', $function)) ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="functadd">
                                    Add
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="function[]" id="functedit" value="Edit" <?php echo (in_array('Edit', $function)) ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="functedit">
                                    Edit
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="function[]" id="functlist" value="List" <?php echo (in_array('List', $function)) ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="functlist">
                                    List
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="function[]" id="functdelete" value="Delete" <?php echo (in_array('Delete', $function)) ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="functdelete">
                                    Delete
                                </label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" type="text" name="text" id="text2" value="<?php echo $registration['text']; ?>" style="height: 100px"></textarea>
                            <label for="floatingTextarea2" class="form-label">Text</label>
                        </div> <br>

                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02" name="upload">Upload</label>
                        </div> 

                        <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">

                        <button type="submit" class="btn btn-success mt-2">Save</button>
                    </div>
                </div>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>


</body>

</html>