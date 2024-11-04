<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container my-10">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h3 class="mb-0">Registration Form</h3>
            </div>
            <div class="card-body">
                <form action="submit_registration.php" method="POST" enctype="multipart/form-data">

                    <!-- Photo Upload -->
                    <div class="form-group">
                        <label for="photo">Upload Photo</label>
                        <input type="file" class="form-control-file" id="photo" name="photo" accept="image/*" required>
                    </div>

                    <!-- Full Name -->
                    <div class="row g-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>

                    <!-- Name with Initials -->
                    <div class="form-group"><br>
                        <input type="text" class="form-control" placeholder="Name With Initials"
                            name="name_with_initials" required>
                    </div>
                    <!-- Date of Birth -->
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>

                    <!-- Email and Phone Number -->
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number"
                                name="phone_number" required>
                        </div>
                        <div class="col">
                            <input type="tel" class="form-control" id="whatsappNumber" placeholder="Whatsapp Number"
                                name="whatsapp_number" required>
                        </div>
                    </div>

                    <!-- NIC -->
                    <div class="form-group"><br>
                        <input type="text" class="form-control" id="nic" placeholder="NIC" name="nic" required>
                    </div>

                    <!-- Address -->
                    <div class="form-group">
                        <label for="streetLine1">Address</label>
                        <input type="text" class="form-control" id="streetLine1" placeholder="Street Line 1"
                            name="street_line1" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="streetLine2" placeholder="Street Line 2"
                            name="street_line2">
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <input type="text" class="form-control" id="city" placeholder="City" name="city" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="province" placeholder="Province" name="province"
                                required><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="postalCode" placeholder="Postal Code"
                            name="postal_code" required>
                    </div>

                    <!-- Gender -->
                    <div class="form-group">
                        <label>Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female"
                                required>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>

                    <!-- Marital Status -->
                    <div class="form-group">
                        <label>Status</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="married" value="Married"
                                required>
                            <label class="form-check-label" for="married">Married</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="unmarried" value="Unmarried"
                                required>
                            <label class="form-check-label" for="unmarried">Unmarried</label>
                        </div>
                    </div>

                    <!-- Start Date -->
                    <div class="form-group">
                        <label for="startDate">Start Date</label>
                        <input type="date" class="form-control" id="startDate" name="start_date" required>
                    </div>


                    <!-- Role Selection -->
                    <div class="form-group">
                        <label for="role">Who is</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="">Select</option>
                            <option value="Student">Student</option>
                            <option value="Lecture">Lecture</option>
                            <option value="Office Staff">Office Staff</option>
                            <option value="Temporary Staff">Temporary Staff</option>
                            <option value="Non-academic Staff">Non-academic Staff</option>
                            <option value="Cleaning Staff">Cleaning Staff</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="row g-3">
                        <div class="col">
                            <button type="submit" class="btn btn-dark btn-block">Submit</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-dark btn-block">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>