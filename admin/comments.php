


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style1.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>
   
<section class="comments">

   <h1 class="heading">user comments</h1>

   <div class="show-comments">
        <div class="box" style="<?php if($fetch_comment['tutor_id'] == $tutor_id){echo 'order:-1;';} ?>">
            <div class="content"><span><?= $fetch_comment['date']; ?></span><p> - <?= $fetch_content['title']; ?> - </p><a href="view_content.php?get_id=<?= $fetch_content['id']; ?>">view content</a></div>
            <p class="text"><?= $fetch_comment['comment']; ?></p>
            <form action="" method="post">
                <input type="hidden" name="comment_id" value="<?= $fetch_comment['id']; ?>">
                <button type="submit" name="delete_comment" class="inline-delete-btn" onclick="return confirm('delete this comment?');">delete comment</button>
            </form>
        </div>
   </div>
   
</section>














<?php include '../components/footer.php'; ?>

<script src="../js/admin_script.js"></script>

</body>
</html>