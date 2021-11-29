<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Blog</title>
</head>
<body>
    
    <div class="container mt-5">

       <?php if (isset($_REQUEST['info'])) {?> 
            <?php if ($_REQUEST['info'] == "added") {?>
                <div class="alert alert-success" role="alert">
                 Post has been added successfully
                </div>
            <?php }else if($_REQUEST['info'] == "updated"){ ?>

            <div class="alert alert-success" role="alert">
                 Post has been updated successfully
                </div>
            <?php }else if($_REQUEST['info'] == "deleted"){ ?>

            <div class="alert alert-danger" role="alert">
                 Post has been deleted successfully
                </div>
            <?php }?>
            
        <?php }?>
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">+ create a new post</a>
        </div>

        <div class="row">
                <?php foreach($query as $q){?>

                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="card text-white bg-dark mt-5">
                            <div class="card-body" style="width: 18rem;">
                                <h5 class=" card-title"><?php echo $q['title']?></h5>
                                <p class="card-text"><?php echo $q['content']?></p>
                                <a href="view.php?id=<?php echo $q['id'] ?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                            </div>
                        </div>
                    </div>

                <?php }?>
        
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>