<?php include '../config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="../style/index.css">
    <title>Product</title>
</head>
<body>
   
    <a  href="registration.php" class="link_button">ახალი რეგისტრაცია</a>
 
   
   

<!-- მომხმარებლის ცხრილი -->

<table>
  <thead>
    <tr>
      <th>სახელი</th>
      <th>გვარი</th>
      <th>პირადობა</th>
      <th>პირადობის ვადა</th>
      <th>სქესი</th>
      <th>ტელეფონის ნომერი</th>
      <th>დამატებითი ტელეფონის ნომერი</th>
      <th>ელექტრონული ფოსტის მისამართი</th>
      <th>იურიდიული მისამართი</th>
      <th>ფაქტიური მისამართი</th>
      <th>სოციალურად დაუცველი</th>
      <th>მომთაბარე</th>
      <th>დამატებითი ინფორმაცია</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td><?= $last_created['first_name'] ?></td>
        <td><?= $last_created['last_name'] ?></td>
        <td><?= $last_created["user_id"] ?></td>
        <td><?= $last_created["date_of_id"] ?></td>
        <td><?= $last_created['gender'] ?></td>
        <td><?= $last_created["phone_number"] ?></td>
        <td><?= $last_created['secondary_phone'] ?></td>
        <td><?= $last_created['email'] ?></td>
        <td><?= $last_created['adress'] ?></td>
        <td><?= $last_created['secondary_adress'] ?></td>
        <td><?= $last_created['user_status'] ?></td>
        <td><?= $last_created['nomed'] ?></td>
        <td><?= $last_created['info'] ?></td>
    </tr>
    

  </tbody>
</table>
<!-- პროდუქტის ცხრილი -->
<img style="margin:40px 70px"  src="<?php echo $last_created['oven_image'] ?>" class="prod_img">
<table style="margin-top: 0px;">
  <thead>
    <tr>
      <th>პროდუქტის დასახელება</th>
      <th>მწარმოებელი კომპანია</th>
      <th>სერიული N</th>
      <th>მოდელი</th>
      
      
    </tr>
  </thead>
  <tbody>
    <tr>
        <td><?= $last_created['product_name'] ?></td>
        <td><?= $last_created['company_name'] ?></td>
        <td><?= $last_created['serial_number'] ?></td>
        <td><?= $last_created['product_model'] ?></td>
        
    </tr>
    

  </tbody>
</table>






    
</body>
</html>