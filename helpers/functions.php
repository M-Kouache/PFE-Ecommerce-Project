<?php  

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'azuul_db');

function get_connection(){
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if ($conn == true) {
        # code...
        return $conn;
    }
    return die("ERROR: Could not connect. " . mysqli_connect_error());
}

// create coperative account
function register_coperative($id_co,$name,$address,$postal_code,$creation_date,$email,$password,$co_type){

    $password_hashed = password_hash($password,PASSWORD_DEFAULT);
    $vkey = md5(time(). $name);

    if (check_coperative_existance($id_co) != true) {
    
        $query = " INSERT INTO coperative VALUES('". $id_co ."','". $name ."','". $email ."','". $postal_code ."','". $password_hashed ."','". $address ."','". $co_type ."','". $creation_date ."','','". $vkey ."',675472194) ";

        if (mysqli_query(get_connection(),$query)) {
            if (send_verification_email($email,$vkey,"coperative")) {
                header("location:email-not-verifi.html");
            }else {
                die(" wrong!");
            }
        } else {
            die("something went wrong!". mysqli_error(get_connection()));
        }
        
    }else {
        echo '<script> alert("this assocaition alredy existed /n contact us if have problems with your account")</script>';
    }

    mysqli_close(get_connection());
}

// check if the coperative is already existed
function check_coperative_existance($id_co){

    $query = " SELECT * FROM coperative WHERE id_coperative = '". $id_co ."'";

    $result = mysqli_query(get_connection(),$query);

    if (mysqli_num_rows($result) >= 1 ) {
        return true;
    }

    return false;
}

// create client account
function register_client($name,$email,$password){

    $password_hashed = password_hash($password,PASSWORD_DEFAULT);
    $vkey = md5(time(). $name);

    if (check_client_existance($email) != true) {
    
        $query = " INSERT INTO client VALUES('','". $name ."','". $email ."','". $password_hashed ."','". $vkey ."','') ";

        if (mysqli_query(get_connection(),$query)) {
            if (send_verification_email($email,$vkey,"client")) {
                header("location:admin/create-acount/email-not-verifi.html");
            }else {
                die(" wrong!");
            }
        } else {
            die("something went wrong!". mysqli_error(get_connection()));
        }
        
    }else {
        echo '<script> alert("this assocaition alredy existed /n contact us if have problems with your account")</script>';
    }

    mysqli_close(get_connection());
}

// check if the client is already existed
function check_client_existance($email){

    $query = " SELECT * FROM client WHERE email = '". $email ."'";

    $result = mysqli_query(get_connection(),$query);

    if (mysqli_num_rows($result) >= 1 ) {
        return true;
    }

    return false;
}

function check_email_existacne($email){

    $query = "SELECT * FROM coperative WHERE email ='". $email ."'";
    $sql = "SELECT * FROM client WHERE email ='". $email ."'";

    $result = mysqli_query(get_connection(),$query);
    $rset = mysqli_query(get_connection(),$sql);
    

    if(mysqli_num_rows($result) >= 1 || mysqli_num_rows($rset) >= 1){
        echo "this account already existed in the database !";
    }else {
        echo "";
    } 

}

// sending a verification email to make sure email address is valid
function send_verification_email($email,$vkey,$who){

    $subject = "Verification Email";
    $messege = "<a href='http://localhost/PFE/PFE-Ecommerce-Project/admin/create-acount/email-verified.php?vkey=$vkey&who=$who'> Verifie your email! </a> ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: mohamedkouache27@gmail.com' . "\r\n";

    return mail($email,$subject,$messege,$headers);

}

// reuseable function for login a user 
function login_credantials($email,$password,$table){
    $id="";
    if ($table==="coperative") {
        $id="id_coperative";
    }else {
        $id="client_id";
    }

    $query = "SELECT * FROM  `$table`  WHERE email ='". $email ."'";

    if ($result = mysqli_query(get_connection(),$query)) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row["email"] == $email && password_verify($password,$row["password"])) {
                    if ($row["verfied"]) {
                        return  array("id"=>$row[$id], "name"=>$row["name"], "email"=>$row["email"]);
                    }else {
                        return "unverified";
                    }
                }
            }
    } 

}

// select user's (client/coperative) data ;
function user_data($table,$id){

    echo $id;
    $query = "SELECT * FROM `$table` WHERE id_coperative = '".$id."' ";
    $result = mysqli_query(get_connection(),$query);

    while ($row = mysqli_fetch_assoc($result)) {
        return $row;        
    }
}

// update user's data ;
function update_user_data($id_co,$name,$address,$postal_code,$email,$co_type,$phone_number){

    $query = " UPDATE coperative SET  name = '". $name ."', email = '". $email ."', postal_code = '". $postal_code ."', address = '". $address ."', co_type = '". $co_type ."', phone_number='". $phone_number ."'
    WHERE id_coperative ='". $id_co ."' ";

    if (mysqli_query(get_connection(),$query)) {
        return true;
    } else {
        return false;
    }

}

// add product to stock 
function add_product($id_coperative,$name,$qtn,$price,$thumbnail,$imgs,$cat,$desc,$date){

    $query = " INSERT INTO product VALUES('','". $name ."','". $desc ."','". $price ."','". $id_coperative ."','". $qtn ."','". $cat ."','".$date."') ";
    
    if (mysqli_query(get_connection(),$query)) {
        if($result = mysqli_query(get_connection(),"SELECT product_id FROM product WHERE name='".$name."'")){
            $row = mysqli_fetch_assoc($result);
            $RandomNum   = time();
            $output_dir = "../../../lib/images";/* Path for file upload */
            $ImageName      = str_replace(' ','-',strtolower($thumbnail['name']));
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
                    
            /* Try to create the directory if it does not exist */
            if (!file_exists($output_dir))
            {
                @mkdir($output_dir);
            }               
            move_uploaded_file($thumbnail["tmp_name"],$output_dir."/".$NewImageName );
            $sql = "INSERT INTO `image` VALUES ('','".$NewImageName."','".$row['product_id']."',1)";
            if (mysqli_query(get_connection(), $sql)) {
                $file_count = count($imgs);
                for($i=0;$i<$file_count;$i++) {

                    $ImgName = str_replace(' ','-',strtolower($imgs['name'][$i]));
                    $ImgExt = substr($ImgName, strrpos($ImgName, '.'));
	                $ImgExt = str_replace('.','',$ImgExt);
                    $ImgName   = preg_replace("/\.[^.\s]{3,4}$/", "", $ImgName);
                    $NewImgName = $ImgName.'-'.$RandomNum.'.'.$ImgExt;
            
                    move_uploaded_file($imgs["tmp_name"][$i],$output_dir."/".$NewImgName );
                    $sql_imgs = "INSERT INTO `image` VALUES ('','".$NewImgName."','".$row['product_id']."',0)";
                    if(mysqli_query(get_connection(),$sql_imgs) && $i == $file_count-1){
                        return true;
                    }
                }
            }else {
                return false;
            }
        }
    }

}


// load products to home page
function load_products(){
    $query = "SELECT * FROM product";

    if ($result=mysqli_query(get_connection(),$query)) {
        while ($row = mysqli_fetch_assoc($result)) {

            $sql = "SELECT name FROM image WHERE product = '".$row["product_id"]."' AND thumbnail = 1";
            $imgs= mysqli_query(get_connection(),$sql);
            $img = mysqli_fetch_assoc($imgs);

            echo "<a href='product-detail.php?id=".$row['product_id']."' class='product-card'>";
            echo "<div class='product-image-container'>";
            echo "<img src='lib/images/".$img['name']."' alt='product-image'>";
            echo "</div>";
            echo "<h3 class='product-name'>".$row['name']."</h3>";
            echo "<p class='product-name'>".$row['description']."</p>";
            echo "<h3 class='product-price'>".$row['price']." MAD</h3></a>"; 
        }
    }
}





?>



