<?php
require_once "Includes/DB.php";
require_once "Includes/session.php";
?>

<?php
//redirection function
function Redirect_to($New_Location)
{
  header("Location:" . $New_Location);
  exit;
}

//card function
function component($productname, $productprice, $Productimg, $Productid)
{
  $Element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0 mb-md-3\">
        <form method=\"post\" action=\"healthyFood.php\">
          <div class=\"card shadow-lg border-info\">
              <img class=\"img-fluid img-sm card-img-top p-1\" src=\"Uploads/$Productimg \" alt=\"img\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">$productname</h5>
              <h6>
                <i class=\"fas fa-star\" aria-hidden=\"true\"></i>
                <i class=\"fas fa-star\" aria-hidden=\"true\"></i>
                <i class=\"fas fa-star\" aria-hidden=\"true\"></i>
                <i class=\"fas fa-star\" aria-hidden=\"true\"></i>
                <i class=\"far fa-star\" aria-hidden=\"true\"></i>
              </h6>
              <h5>
                <span class=\"price\">ksh $productprice</span>
              </h5>
              <button type=\"submit\" class=\"btn btn-warning my-2\" name=\"add\">Add to Cart<i class=\"fas fa-shopping-cart\"></i>
              <input type=\"hidden\" name=\"product_id\" value=\"$Productid\">
              </button>    
            </div>
          </div>
        </form>
      </div>";
  echo $Element;
}
//cart function
function cartElement($productimg, $productname, $productprice, $productid)
{
  $element = "
  <form action=\"MyCart.php?action=remove&product_id=$productid\" method=\"post\" class=\"cart-items\">
            <div class=\"border rounded\">
                <div class=\"row bg-white\">
                    <div class=\"col-md-3 pl-0\">
                      <img  src=\"Uploads/$productimg\" alt=\"Image1\" class=\"img-fluid\">
                    </div>
                    <div class=\"col-md-6\">
                          <h5 class=\"pt-2\">$productname</h5>
                          <small class=\"text-secondary\">Seller: Omifoods</small>
                          <h5 class=\"pt-2\">Ksh $productprice</h5>
                           <button type=\"submit\" class=\"btn btn-danger mx-2 mb-2\" name=\"remove\">Remove</button>
                    </div>
                    <div class=\"col-md-3 py-5\">
                        <div>
                             <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                            <input type=\"text\" name=\"mybtn\" value=\"1\" class=\"form-control w-25 d-inline\">
                            <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
          </div>
        </form>
        ";
  echo  $element;
}
?>

<?php
function CheckUserNameExistOrNot($Username)
{
  global $ConnectingDB;
  $sql = "SELECT  username  FROM admins WHERE username=:userName";
  $stmt = $ConnectingDB->prepare($sql);
  $stmt->bindValue(':userName', $Username);
  $stmt->execute();
  $Result = $stmt->rowCount();
  if ($Result == 1) {
    return true;
  } else {
    return false;
  }
}
function Login_Attempt($UserName, $Password)
{
  global $ConnectingDB;
  $sql = "SELECT * FROM admins WHERE username=:userName AND password=:password  LIMIT 1";
  $stmt = $ConnectingDB->prepare($sql);
  $stmt->bindValue(':userName', $UserName);
  $stmt->bindValue(':password', $Password);
  $stmt->execute();
  $Result = $stmt->rowCount();
  if ($Result == 1) {
    return $Account = $stmt->fetch();
  } else {
    return null;
  }
}

function Confirm_Login()
{
  if (isset($_SESSION["UserId"])) {
    return true;
  } else {
    // $_SESSION["ErrorMessage"] = "Login Required !";
    Redirect_to("Login.php");
  }
}

function TotalPost()
{
  global $ConnectingDB;
  $sql = "SELECT COUNT(*) FROM products";
  $stmt = $ConnectingDB->query($sql);
  $TotalRows = $stmt->fetch();
  $TotalPost = array_shift($TotalRows);
  echo $TotalPost;
}

function TotalCategories()
{
  global $ConnectingDB;
  $sql = "SELECT COUNT(*) FROM category";
  $stmt = $ConnectingDB->query($sql);
  $TotalRows = $stmt->fetch();
  $TotalCategories = array_shift($TotalRows);
  echo $TotalCategories;
}

function TotalAdmins()
{
  global $ConnectingDB;
  $sql = "SELECT COUNT(*) FROM admins";
  $stmt = $ConnectingDB->query($sql);
  $TotalRows = $stmt->fetch();
  $TotalAdmins = array_shift($TotalRows);
  echo $TotalAdmins;
}

function UserNameExists($UserName)
{
  global $ConnectingDB;
  $sql = "SELECT username FROM users WHERE username=:userName";
  $stmt = $ConnectingDB->prepare($sql);
  $stmt->bindValue(':userName', $UserName);
  $stmt->execute();
  $AllResults = $stmt->rowCount();
  if ($AllResults == 1) {
    return true;
  } else {
    return false;
  }
}

function Totalusers()
{
  global $ConnectingDB;
  $sql = "SELECT COUNT(*) FROM users";
  $stmt = $ConnectingDB->query($sql);
  $TotalRows = $stmt->fetch();
  $TotalUsers = array_shift($TotalRows);
  echo $TotalUsers;
}

//user attempt login
function Login_Attempt_User($UserName, $Password)
{
  global $ConnectingDB;
  $sql = "SELECT * FROM users WHERE username=:userName AND cpassword=:passworD LIMIT 1";
  $stmt = $ConnectingDB->prepare($sql);
  $stmt->bindValue('userName', $UserName);
  $stmt->bindValue('passworD', $Password);
  $stmt->execute();
  $Results = $stmt->rowCount();
  if ($Results == 1) {
    return $Account = $stmt->fetch();
  } else {
    return null;
  }
}

//
function Confirm_User_Login()
{
  if (isset($_SESSION["UserId"])) {
    return true;
  } else {
    //$_SESSION["ErrorMessage"] = "Login Required !";
    Redirect_to("UserLogin.php");
  }
}
?>