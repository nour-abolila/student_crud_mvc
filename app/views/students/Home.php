<!DOCTYPE html>
<html>

<head>
    <title>Students</title>
</head>

<body>

    <h1>Students List</h1>

    <a href="index.php?action=create">Add Student</a>

    <table cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = $students->fetch_assoc()) { ?>

            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['age'] ?></td>

                <td>
                    <a href="index.php?action=edit&id=<?= $row['id'] ?>">
                        Edit
                    </a>

                    <a href="index.php?action=delete&id=<?= $row['id'] ?>">
                        Delete
                    </a>
                </td>
            </tr>

        <?php } ?>

    </table>

</body>

</html>