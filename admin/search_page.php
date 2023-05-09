



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
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>
   
<section class="contents">

   <h1 class="heading">contents</h1>

   <div class="box-container">

        <div class="box">
            <div class="flex">
                <div><i class="fas fa-dot-circle" style="<?php if($fecth_videos['status'] == 'active'){echo 'color:limegreen'; }else{echo 'color:red';} ?>"></i><span style="<?php if($fecth_videos['status'] == 'active'){echo 'color:limegreen'; }else{echo 'color:red';} ?>"><?= $fecth_videos['status']; ?></span></div>
                <div><i class="fas fa-calendar"></i><span><?= $fecth_videos['date']; ?></span></div>
            </div>
            <img src="../uploaded_files/<?= $fecth_videos['thumb']; ?>" class="thumb" alt="">
            <h3 class="title"><?= $fecth_videos['title']; ?></h3>
            <form action="" method="post" class="flex-btn">
                <input type="hidden" name="video_id" value="<?= $video_id; ?>">
                <a href="update_content.php?get_id=<?= $video_id; ?>" class="option-btn">update</a>
                <input type="submit" value="delete" class="delete-btn" onclick="return confirm('delete this video?');" name="delete_video">
            </form>
            <a href="view_content.php?get_id=<?= $video_id; ?>" class="btn">view content</a>
      </div>

   </div>

</section>

<section class="playlists">

   <h1 class="heading">playlists</h1>

   <div class="box-container">

   </div>

</section>

<?php include '../components/footer.php'; ?>



</body>
</html>