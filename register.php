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

<body>
    <div class="container">
        <h1>Register</h1>
        <form action="create.php" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
            <div class="row">
                <div class='col-md-6'>
                    <div>
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" class="form-control required" name="name" id="name" placeholder="Enter name" required>
                    </div>
                    <div>
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control required" name="email" id="email" placeholder="Enter Your Email" required>
                    </div>
                    <div>
            <label for="bloodgroup" class="form-label">Blood Group *</label>
            <select name="bloodgroup" id="bloodgroup" class="form-select required" aria-label="Default select example" required>
              <option value="">Select your Blood Group</option>
              <option value="AB-ve">AB-ve</option>
              <option value="b+ve">B+ve</option>
              <option value="o-ve">O-ve</option>
              <option value="B-ve">B-ve</option>
              <option value="o+ve">O+ve</option>
            </select>
          </div>
                    <div>
                        <label for="" class="form-label"><b>Gender *</b></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male">
                            <label class="form-check-label" for="genderMale">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female">
                            <label class="form-check-label" for="genderFemale">
                                Female
                            </label>
                        </div>
                        <div>
                            <label for="" class="form-label"><b>Function</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Add" name="function[]" id="functadd">
                                <label class="form-check-label" for="functadd">
                                    Add
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Edit" name="function[]" id="functedit">
                                <label class="form-check-label" for="functedit">
                                    Edit
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="List" name="function[]" id="functlist">
                                <label class="form-check-label" for="functlist">
                                    List
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Delete" name="function[]" id="functdelete">
                                <label class="form-check-label" for="functdelete">
                                    Delete
                                </label>
                            </div>
                        </div><br>
                        <div class="form-floating">
                            <textarea class="form-control" type="text" name="text" id="text" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Text</label>
                        </div> <br>

                        <div class="input-group mb-3">
            <input type="file" name="image" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
                      
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