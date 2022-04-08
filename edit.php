<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Blog using PHP & MySQL</title>
</head>
<body>

   <div class="container mt-5">
        <?php foreach($query as $q){ ?>
            <form method="POST">
                <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                <input type="text" placeholder="Blog Title" class="form-control my-3 bg-dark text-white text-center" name="title" value="<?php echo $q['title']?>">
                <textarea name="content" class="form-control my-3 bg-dark text-white" cols="30" rows="10"><?php echo $q['content']?></textarea>
                <button class="btn btn-dark" name="update">Update</button>
            </form>
        <?php } ?>    
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>