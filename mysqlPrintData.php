<?php
// Enable full error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// -- 1. Connect to database
$conn = mysqli_connect("localhost","root","","aruv");
if (!$conn) {
    die("DB connection error: " . mysqli_connect_error());
}

// -- 2. DELETE
if (isset($_GET['del_id'])) {
    $id = intval($_GET['del_id']);
    mysqli_query($conn, "DELETE FROM student WHERE Sl_no = $id");
    header("Location: students.php");
    exit;
}

// -- 3. INSERT or UPDATE
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    if (!empty($_POST['edit_id'])) {
        $id = intval($_POST['edit_id']);
        mysqli_query($conn, "
            UPDATE student
            SET Name='$name', Email='$email', Phone_No='$phone'
            WHERE Sl_no=$id
        ");
    } else {
        mysqli_query($conn, "
            INSERT INTO student (Name,Email,Phone_No)
            VALUES ('$name','$email','$phone')
        ");
    }
    header("Location: students.php");
    exit;
}

// -- 4. Prefill form if editing
$edit = null;
if (isset($_GET['edit_id'])) {
    $id = intval($_GET['edit_id']);
    $res = mysqli_query($conn, "SELECT * FROM student WHERE Sl_no=$id");
    $edit = mysqli_fetch_assoc($res);
}

// -- 5. Fetch all rows
$all = mysqli_query($conn, "SELECT * FROM student ORDER BY Sl_no");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student CRUD</title>
  <style>
    /* ... (same CSS from previous response) ... */
  </style>
</head>
<body>

  <!-- Form -->
  <form method="post" action="students.php">
    <input type="hidden" name="edit_id" value="<?= ($edit['Sl_no'] ?? '') ?>">
    <input name="name" placeholder="Name" required
           value="<?= ($edit['Name'] ?? '') ?>">
    <input name="email" type="email" placeholder="Email" required
           value="<?= ($edit['Email'] ?? '') ?>">
    <input name="phone" placeholder="Phone (+91...)" required
           value="<?= ($edit['Phone_No'] ?? '') ?>">
    <button type="submit"><?= $edit ? 'Update' : 'Add' ?> Student</button>
  </form>

  <!-- Table -->
  <div class="table-responsive">
    <table class="table">
      <thead><tr>
        <th>#</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th>
      </tr></thead>
      <tbody>
        <?php if (mysqli_num_rows($all) > 0): ?>
          <?php while ($row = mysqli_fetch_assoc($all)): ?>
            <tr>
              <td data-label="#"><?= $row['Sl_no'] ?></td>
              <td data-label="Name"><?= ($row['Name']) ?></td>
              <td data-label="Email"><?= ($row['Email']) ?></td>
              <td data-label="Phone"><?= ($row['Phone_No']) ?></td>
              <td data-label="Action">
                <a href="?edit_id=<?= $row['Sl_no'] ?>" class="action-btn btn-edit">Edit</a>
                <a href="?del_id=<?= $row['Sl_no'] ?>"
                   class="action-btn btn-delete"
                   onclick="return confirm('Are you sure?')">Delete</a>
              </td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr><td colspan="5">No records found.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

</body>
</html>
