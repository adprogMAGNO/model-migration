<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto d-grip gap-2">
                <div>

                </div>
            </div>
        </div>
    </div>
    <form action="{{   url('students')}}"method="POST">
        @csrf
        <div class="form-group mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="fname" class="form-controller">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="lname" class="form-controller">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">email</label>
            <input type="text" name="email" class="form-controller">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-controller">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-controller">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-controller">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Province</label>
            <input type="text" name="province" class="form-controller">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Zip</label>
            <input type="text" name="zip" class="form-controller">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Birthday</label>
            <input type="text" name="birthday" class="form-controller">
        </div>
    </form>
</body>
</html>