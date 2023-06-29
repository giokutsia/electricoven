<?php include '../config/validation.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="../style/index.css">
    
    <title>Registration</title>
    
</head>
<body>
    <div class="main-div">
        <div class="reg">
            <div class="default-info">
                <form method="post" enctype="multipart/form-data">
                        <label for="upload"  class="img-lbl" >
                        <input type="file" id="upload" name="image"/>
                        Image</label>
                        <span>ენერგოეფექტური ღუმელების თანადაფინანსების პროგრამა</span>
                        <?= $errors['image'] ?? '' ? '<span class="error">' . ($errors['image'] ?? '') . '</span>' : '' ?>
                        <h5>ახალი განცხადების დამატება</h5>
                        <span>ფილიალის დასახელება&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;</span> </br>
                        <span>ოპერატორი&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;</spa>
                        </br>     
                        <h5>ზოგადი ინფორმაცია განმცხადებლის შესახებ</h5>
                    
                    
                    <div class="container">
                        <div>
                            <label for="firstname">განმცადებლის სახელი</label>
                            <input type="text" id="firstname" name="firstname" placeholder="სახელი.." value="<?= $data['firstname'] ?? "" ?>">
                            
                            <?= $errors['firstname'] ?? '' ? '<span class="error">' . ($errors['firstname'] ?? '') . '</span>' : '' ?>
                             
                        </div>
                        
                        <div>
                            <label for="lastname">განმცადებლის გვარი</label>
                            <input type="text" id="lastname" name="lastname" placeholder="გვარი.." value="<?= $data['lastname'] ?? "" ?>">
                            <?= $errors['lastname'] ?? '' ? '<span class="error">' . ($errors['lastname'] ?? '') . '</span>' : '' ?>
                        </div>
                        <div>
                            <label for="id-number">განმცადებლის პირადი ნომერი</label>
                            <input type="text"  id="id-number" name="id-number" placeholder="პირადი ნომერი.."  value="<?= $data['idNumber'] ?? "" ?>">
                            <?= $errors['idNumber'] ?? '' ? '<span class="error">' . ($errors['idNumber'] ?? '') . '</span>' : '' ?>
                        </div>
                       
                        
                        <div>
                            <label for="id-date">პირადობის მოწმობის მოქმედების ვადა</label>
                            <input type="text" id="id-date" name="id-date" placeholder="DD/MM/YY .." value="<?= $data['idDate'] ?? "" ?>">
                            <?= $errors['idDate'] ?? '' ? '<span class="error">' . ($errors['idDate'] ?? '') . '</span>' : '' ?>
                        </div>
                        <div>
                            <label for="gender">განმცხადებლის სქესი</label>
                            <select name="gender" id="select-id">
                                    <option value="" disabled selected >აირჩიეთ</option>
                                    <option value="ქალი" <?= (isset($_POST['gender']) && $_POST['gender'] === 'ქალი') ? 'selected' : ''; ?>>მდედრობითი</option>
                                    <option value="კაცი" <?= (isset($_POST['gender']) && $_POST['gender'] === 'კაცი') ? 'selected' : ''; ?>>მამრობითი</option>
                            </select>
                            <?= $errors['gender'] ?? '' ? '<span class="error">' . ($errors['gender'] ?? '') . '</span>' : '' ?>
                        </div>
                        
                    </div>
                    <div class="container">
                        <div>
                            <label for="phone-number">განმცხადებლის ტელეფონის ნომერი</label>
                            <input type="text" id="phone-number" name="phone-number" placeholder="ნომერი.." value="<?= $data["phoneNumer"] ?? "" ?>">
                            <?= $errors['phoneNumer'] ?? '' ? '<span class="error">' . ($errors['phoneNumer'] ?? '') . '</span>' : '' ?>
                        </div>
                        <div>
                            <label for="secondary-number">დამატებითი ტელეფონის ნომერი</label>
                            <input type="text" id="secondary-number" name="secondary-number" placeholder="დამატებითი ნომერი.." value="<?= $data['seconderyNumber'] ?? "" ?>">
                            
                            <?= $errors['seconderyNumber'] ?? '' ? '<span class="error">' . ($errors['seconderyNumber'] ?? '') . '</span>' : '' ?>
                        </div>
                        <div>
                            <label>ელექტრონული ფოსტის მისამართი</label>
                            <input type="text" id="email" name="email" placeholder="ელექტრონული ფოსტის მისამართი.." value="<?= $data['email'] ?? "" ?>">
                            <?= $errors['email'] ?? '' ? '<span class="error">' . ($errors['email'] ?? '') . '</span>' : '' ?>
                        </div>
                        
                        <div class="select-div">
                        <label>განმცხადებლის იურიდიული მისამართი</label>
                            <select name="adress" id="select-id" value="<?= $data['adress'] ?? "" ?>">
                                    <option value="" disabled selected>აირჩიეთ</option>
                                    <option value="თბილისი" <?= isset($_POST['adress']) && $_POST['adress'] === 'თბილისი' ? 'selected' : ''; ?>>თბილისი</option>
                                    <option value="ზუგდიდი" <?= isset($_POST['adress']) && $_POST['adress'] === 'ზუგდიდ' ? 'selected' : ''; ?>>ზუგდიდი</option>
                            </select>
                            <br><?= $errors['adress'] ?? '' ? '<span class="error">' . ($errors['adress'] ?? '') . '</span>' : '' ?>
                        </div>
                        <div>
                            <label>განმცხადებლის ფაქტიური მისამართი</label>
                            <select name="adress1" id="select-id" value="<?= $data['adress1'] ?? "" ?>">
                                    <option value="0" disabled selected> აირჩიეთ</option>
                                    <option value="თბილისი" <?= isset($_POST['adress1']) && $_POST['adress1'] === 'თბილისი' ? 'selected' : ''; ?>>თბილისი</option>
                                    <option value="ზუგდიდ" <?= isset($_POST['adress1']) && $_POST['adress1'] === 'ზუგდიდ' ? 'selected' : ''; ?>>ზუგდიდი</option>
                            </select>
                            <?= $errors['adress1'] ?? '' ? '<span class="error">' . ($errors['adress1'] ?? '') . '</span>' : '' ?>
                        </div>
                    </div>
                    
                        <h5>ზოგადი ინფორმაცია განმცხადებლის შესახებ</h5>
                        <h7>გაქვთ თუ არა სოციალურად დაუცველის სტატუსი</h7></br>
                        <input type="radio" name="status" value="კი" id="status" <?= (isset($_POST['status']) && $_POST['status'] === 'კი') ? 'checked' : ''; ?>>
                        <label for="yes">კი</label>&nbsp;&sol;</span>
                        <input type="radio" name="status" value="არა" id="status" <?= (isset($_POST['status']) && $_POST['status'] === 'არა') ? 'checked' : ''; ?>>
                        <label for="no">არა</label>
                        <?= $errors['status'] ?? '' ? '<span class="error">' .'*'. '</span>' : '' ?>
                        </br>
                        <h7>ხართ თუა რა მომთაბარე</h7></br>
                        <input type="radio" name="nomed" value="კი" id="nomed" <?= (isset($_POST['nomed']) && $_POST['nomed'] === 'კი') ? 'checked' : ''; ?>> 
                        <label for="yes">კი&nbsp;&sol;
                        <input type="radio" name="nomed" value="არა" id="nomed" <?= (isset($_POST['nomed']) && $_POST['nomed'] === 'არა') ? 'checked' : ''; ?>>
                        <label for="no">არა</label>
                        <?= $errors['nomed'] ?? '' ? '<span class="error">' .'*'. '</span>' : '' ?>
                        </br>
                       
                        <h7>დამატებითი ინფორმაცია</h7>
                        </br>
                        <textarea name="additional" id="additional" cols="30" rows="10"><?php echo isset($_POST['additional']) ? $_POST['additional'] : ''; ?></textarea>
                        
                        </br>
                        </br>
                        <h5>ინფორმაცია ხარჯების შესახებ</h5></br>
                        <div class="second-container">
                            <label for="product-name">პროდუქტის დასახელება</label>
                            <input type="text" name="product-name" value="<?= $data['productname'] ?? "" ?>">
                            <?= $errors['productname'] ?? '' ? '<span class="error">' . ($errors['productname'] ?? '') . '</span>' : '' ?>
                            </br></br>
                            <label for="model">მოდელი</label>
                            <select name="model" id="select-id">
                                <option value="0" disabled selected>აირჩიეთ..</option>
                                <option value="oven1"  <?= isset($_POST['model']) && $_POST['model'] === 'oven1' ? 'selected' : ''; ?>>Oven1</option>
                                <option value="oven2" <?= isset($_POST['model']) && $_POST['model'] === 'oven2' ? 'selected' : ''; ?>>Oven2</option>
                            </select>
                            <?= $errors['model'] ?? '' ? '<span class="error">' . ($errors['model'] ?? '') . '</span>' : '' ?>
                            </br></br>
                            <label for="company">მომწოდებელი კომპანიის დასახელება</label>
                            <input type="text" name="company" value="<?= $data['company'] ?? "" ?>">
                            <?= $errors['company'] ?? '' ? '<span class="error">' . ($errors['company'] ?? '') . '</span>' : '' ?>
                            </br></br>
                            <label for="serialnumber">სერიული ნომერი</label>
                            <input type="text" name="serialnumber" value="<?= $data['serialNumber'] ?? "" ?>">
                            <?= $errors['serialNumber'] ?? '' ? '<span class="error">' . ($errors['serialNumber'] ?? '') . '</span>' : '' ?>
                            </br></br>
                           
                        </div>
                        <button class="submit-button"  value="submit">შენახვა</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>