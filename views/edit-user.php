<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Edit User</title>
</head>
<body>
    <?php
    require "../classes/User.php";

    session_start();
    include "nav.php";

    //get variable from address
    $user_id = $_GET['user_id'];

    $u = new User; //where the edit data goes
    $user_data = $u->getUser($user_id); //get userdata as data of u
    ?>

    <div class="container mx-auto w-50 my-5">
        <form action="../actions/updateUser.php" method="post">
            <h1 class="display-6 text-center text-uppercase">EDIT USER</h1>

            <input type="hidden" name="user_id" value="<?= $user_data['id'] ?>">

            <label for="first-name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first-name" class="form-control mb-2" value="<?= $user_data["first_name"] ?>" required autofocus>

            <label for="last-name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last-name" class="form-control mb-2" value="<?= $user_data['last_name'] ?>" required>

            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" name="username" id="username" class="form-control mb-2" value="<?= $user_data['username'] ?>" required maxlength="15">

            <button type="submit" class="btn btn-warning">Save</button>
            <a href="dashboard.php" class="btn btn-secondary ms-2">Cancel</a>
        </form>

    </div>


</body>
</html>