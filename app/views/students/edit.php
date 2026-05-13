<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
</head>

<body>

    <h1>Edit Student</h1>

    <form action="index.php?action=update" method="POST">

        <input type="hidden" name="id" value="<?= $student['id'] ?>">

        <input type="text" name="name" value="<?= $student['name'] ?>">

        <br><br>

        <input type="email" name="email" value="<?= $student['email'] ?>">

        <br><br>

        <input type="number" name="age" value="<?= $student['age'] ?>">

        <br><br>

        <button type="submit">Update</button>

    </form>

</body>

</html>