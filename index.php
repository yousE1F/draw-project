<?php 
include 'include/connection.php';
include 'include/form.php';
include 'include/select.php';
include 'include/db_close.php';
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>


  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" data--h-bstatus="0OBSERVED">
  <div class="container">
    <div class="col-md-5 p-lg-5 mx-auto" data--h-bstatus="0OBSERVED">
      <img class="first-image" src="https://blaban.net/data/files/blabanlogo.png">
      <h1 class="display-4 fw-normal" data--h-bstatus="0OBSERVED">اكسب مع بلبن</h1>
      <br>
      <p class="lead fw-normal" data--h-bstatus="0OBSERVED">باقي على انتهاء السحب</p>
      <h3 id="demo"></h3>
    </div>
    <p class="lead fw-normal" data--h-bstatus="0OBSERVED">للسحب على قشطوطة لوتس </p>
    <div class="container">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">تابع البث المباشر</li>
        <li class="list-group-item">قم بالتسجيل</li>
        <li class="list-group-item">سيتم اختيار فائز في نهاية البث</li>
      </ul>
</div>
  </div>

  </div>


<div class="position-relative text-center" data--h-bstatus="0OBSERVED">
<div class="col-md-5 p-lg-5 mx-auto my-5" data--h-bstatus="0OBSERVED"></div>
<h3>الرجاء ادخال معلوماتك</h3>
<form action="index.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول</label>
    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" value="<?php echo $first_name ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"> <?php echo $error['fnameError'] ?> </div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" value="<?php echo $last_name ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"> <?php echo $error['lnameError'] ?> </div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"> <?php echo $error['emailError'] ?> </div>
  </div>

  <button type="submit" name="send" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
</div>

<div class="loader-con">
  <div id="loader">
    <canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
</div>


<div class="container ">
<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
  <button id="winner" type="button" class="btn btn-primary">
    اختيار الرابح
  </button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach($users as $user): ?>
          <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['first_name']) . ' ' . htmlspecialchars($user['last_name']); ?></h1>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

</div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/loader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>