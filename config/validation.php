<?php
include_once "db.php";
include_once "function.php";
$imagePath="";
$errors = array();
if($_SERVER["REQUEST_METHOD"] == 'POST'){
   
    
    $data = array(
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'idNumber' => $_POST['id-number'],
        'idDate' => $_POST['id-date'],
        'phoneNumer' => $_POST['phone-number'],
        'seconderyNumber' => $_POST['secondary-number'],
        'email' => $_POST['email'],
        'company' => $_POST['company'],
        'serialNumber' => $_POST['serialnumber'],
        'gender' => $_POST['gender'] ?? '',
        'additionalInfo' => $_POST['additional'] ?? '',
        'adress' => $_POST['adress'] ?? '',
        'adress1' => $_POST['adress1'] ?? '',
        'productname' => $_POST['product-name'],
        'model' => $_POST['model'] ?? '',
        'nomed' => $_POST['nomed'] ?? '',
        'status' => $_POST['status'] ?? '',
       
       
    );
    foreach ($ovens as $row) {
        
            $id = $row['user_id'];
            if($id===$data['idNumber']){
                $errors['idNumber']= 'მომხმარებელი რეგისტრირებულია';
            }
        }
  
    if (!$data['firstname'] || !preg_match('/^[\x{10D0}-\x{10F5}]+$/u', $data['firstname'] ) || strlen($data['firstname']) < 3) {
            $errors['firstname'] =  'შეავსეთ. ქართული ასოები მინიმუმ 3';
    } 
    if (!$data['lastname'] || !preg_match('/^[\x{10D0}-\x{10F5}]+$/u', $data['lastname']) || strlen($data['lastname']) < 3) {
        $errors['lastname'] =  'შეავსეთ. ქართული ასოები მინიმუმ 3';
    }
    //selected options and radio buttons validation. if they are not seleced
   
    if(!$data['status']){
        $errors['status'] = 'აირჩიეთ.';
    }
    if(!$data['nomed']){
        $errors['nomed'] = 'აირჩიეთ.';
    }
    if(empty($data['gender'])){
        $errors['gender'] =  ' აირჩიეთ.';    
    }
    if(empty($data['adress'])){
        $errors['adress'] =  ' აირჩიეთ.';    
    }
    if(empty($data['adress1'])){
        $errors['adress1'] =  ' აირჩიეთ.';    
    }
    if(empty($data['model'])){
        $errors['model'] =  ' აირჩიეთ.';    
    }
    
    // input validation if they are empty 
    if(!$data['company']) {
        $errors['company'] = 'შეიყვანეთ';
    }
    if(!$data['serialNumber']) {
        $errors['serialNumber'] = 'შეიყვანეთ';
    }
    if(!$data['productname']) {
        $errors['productname'] = 'შეიყვანეთ';
    }
    

    if (!preg_match('^(?:(?:0[1-9]|1\d|2[0-8])\/(?:0[1-9]|1[0-2])|(?:29|30)\/(?:0[13-9]|1[0-2])|31\/(?:0[13578]|1[02]))\/\d{2}$^', $data['idDate'])) {
        
       $errors['idDate'] = 'შეიყვანეთ თარიღი DD/MM/YY';
    }
    //validation for Georgian phone number code and ID number
    if(!preg_match('/^(\+?995)?(79\d{7}|5\d{8})$/', $data['phoneNumer']) ){
        $errors['phoneNumer']= 'არასწორი ნომერი';
    }
    if(!preg_match('/^(\+?995)?(79\d{7}|5\d{8})$/', $data['seconderyNumber']) ){
        $errors['seconderyNumber']= 'არასწორი ნომერი';
    }
    if (!preg_match('/^\d{11}$/', $data['idNumber'])) {
    
        $errors['idNumber']= '11 ნიშნა';
    } 
    //email validation
    if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $data['email'])) {
        
        $errors['email']="უნდა მთავრდებოდეს @ მეილის მისამართი";
    }
    // photo upload validation
    $image = $_FILES['image'] ?? null;
 
    $allowed_ext = array("jpg" => "jpg",
                            "jpeg" => "jpeg",
                            "gif" => "gif",
                            "PNG" => "png");

    if (!is_dir('images')) {
        mkdir('images');
    }
    $path_info = pathinfo($image['name'], PATHINFO_EXTENSION);
    echo $path_info;
    
    if(!array_key_exists($path_info, $allowed_ext)){
        $errors['image'] =  'აირჩიეთ სურათი';
    }
    
    if ($image && $image['tmp_name'] && empty($errors) ) {
        $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'], $imagePath);
    }else {
        
    }


    if(empty($errors)) {
       
    $statement = $pdo->prepare("INSERT INTO ovens (first_name,last_name,user_id,date_of_id,phone_number,secondary_phone,email,
    company_name,serial_number,gender,info,adress,secondary_adress,product_name,product_model,nomed,user_status,oven_image )
    VALUES (:first_name,:last_name,:user_id,:date_of_id,:phone_number,:secondary_phone,:email,
    :company_name,:serial_number,:gender,:info,:adress,:secondary_adress,:product_name,:product_model,:nomed,:user_status,:oven_image)");
    $statement->bindValue(':first_name', $data['firstname']);
    $statement->bindValue(':last_name', $data['lastname']);
    $statement->bindValue(':user_id', $data['idNumber']);
    $statement->bindValue(':date_of_id', $data['idDate']);
    $statement->bindValue(':phone_number', $data['phoneNumer']);
    $statement->bindValue(':secondary_phone', $data['seconderyNumber']);
    $statement->bindValue(':email', $data['email']);
    $statement->bindValue(':company_name', $data['company']);
    $statement->bindValue(':serial_number', $data['serialNumber']);
    $statement->bindValue(':gender', $data['gender']);
    $statement->bindValue(':info', $data['additionalInfo']);
    $statement->bindValue(':adress', $data['adress']);
    $statement->bindValue(':secondary_adress', $data['adress1']);
    $statement->bindValue(':product_name', $data['productname']);
    $statement->bindValue(':product_model', $data['model']);
    $statement->bindValue(':product_model', $data['model']);
    $statement->bindValue(':nomed', $data['nomed']);
    $statement->bindValue(':user_status', $data['status']);
    $statement->bindValue(':oven_image', $imagePath);
    $statement->execute();
    header('Location: ../pages/product.php');
    }
}