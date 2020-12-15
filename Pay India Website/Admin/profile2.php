<?php include("Admin2_backend/head_check.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../Distributor/style.css">
</head>

<body>
    <?php include("sidenav2.php"); ?>
    <?php include("navbar2.php"); ?>
    <div class="row padding-sidenav px-0 pr-md-0">
        <div class="col-12">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'payindia');
            $sql = "SELECT * FROM admin2_replies";
            $result = mysqli_query($conn, $sql);
            $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
            ?>
            <div class="table-responsive">
                <table class="table " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Comments</th>
                            <th>Date</th>
                            <th>Reply</th>
                            <th>Status and Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ans as $value) { ?>
                            <?php
                            $type = $value['type'];
                            $id = $value['q_id'];
                            $sql = "SELECT * FROM $type WHERE id = $id";
                            $result = mysqli_query($conn, $sql);
                            $r_ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
                            ?>
                            <tr>
                                <td><?php echo $value['type']; ?></td>
                                <td><?php echo $value['comments']; ?></td>
                                <td><?php echo $value['date']; ?></td>
                                <td><a href="../reply/<?php echo $value['reply']; ?>">Document</a></td>
                                <td><text><?php echo ($r_ans[0]['status']) . " and " . ($r_ans[0]['id']) ?></text></td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>