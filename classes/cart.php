<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../helpers/format.php');
include_once ($filepath.'/../lib/database.php');
?>
<link rel="stylesheet" href="css/styles.css" />
<?php
class cart
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new  Database();
        $this->fm = new Format();
    }    
    public function add_to_cart($quantity, $id){
        $quantity = $this->fm->validation($quantity);
        $quantity = mysqli_real_escape_string($this->db->link, $quantity);
        $id = mysqli_real_escape_string($this->db->link, $id);
        $sId = session_id();

        $query = "SELECT * FROM tbl_product WHERE productId = '$id'";
        $result = $this->db->select($query)->fetch_assoc();

        $pr = $result['productPrice'] * $quantity;
        $query_insert = "INSERT INTO tbl_cart(productId, quantity, sId, image, price, productName) VALUES
        ('$id', '$quantity', '$sId', '" . $result['productImage'] . "', '$pr', '" . $result['productName'] . "')";
        $insert_cart = $this->db->insert($query_insert);
        if($result){
            header('Location:cart.php');
        }else{
            header('Location:404.php');
        }
    }

    // $check_cart = "SELECT * FROM tbl_cart WHERE productId = '$id' AND sId = '$sId'";
        // if($check_cart){
        //     $msg = "Product already in cart.";
        //     return $msg;
        // }else{
        //     $query_insert = "INSERT INTO tbl_cart(productId, quantity, sId, image, price, productName) VALUES
        //     ('$id', '$quantity', '$sId', '" . $result['productImage'] . "', '$pr', '" . $result['productName'] . "')";
        //     $insert_cart = $this->db->insert($query_insert);
        //     if($result){
        //         header('Location:cart.php');
        //     }else{
        //         header('Location:404.php');
        //     }
        // }
        
    public function get_product_cart()
    {
        $sId = session_id();
        $query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_quantity_cart($quantity, $cartId)
    {
        $quantity = mysqli_real_escape_string($this->db->link, $quantity);
        $cartId = mysqli_real_escape_string($this->db->link, $cartId);
        $query = "UPDATE tbl_cart SET
        quantity = '$quantity'
        WHERE cartId = '$cartId'";
        $result = $this->db->select($query);
        if(!$result){
            $successAlert = '<div class="alert alert-success alert-dismissible fade show" role="alert">Updated Successfully. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            return $successAlert;
        }else{
            $failureAlert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">Failed to Update. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            return $failureAlert;
        }
    }
    public function delete_cart($cartid)
    {
        $cartid = mysqli_real_escape_string($this->db->link, $cartid);
        $query = "DELETE FROM tbl_cart WHERE cartId = '$cartid'";
        $result = $this->db->delete($query);
        return $result;
    }
    public function check_cart()
    {
        $sId = session_id();
        $query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
        $result = $this->db->delete($query);
        return $result;
    }
    public function delete_all_data_cart()
    {
        $sId = session_id();
        $query = "DELETE FROM tbl_cart WHERE sId = '$sId'";
        $result = $this->db->delete($query);
        return $result;
    }
}

?>