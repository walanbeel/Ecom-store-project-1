<?PHP
require("app/models/database.php");
require("core/db.php");
class brand{
   public  $db;
    function __construct(){
        $this->db=new DB();
    }
    function  getData(){
        $cols=array("*");
        $tbls=array("brand");
        return  $this->db
        ->select($cols)
        ->from($tbls)
        ->build()
        ->exeucte();
    }
    function addData($data){
        $this->db->insert("brand",$data);
    }
    function  updateBrand(){
        $id= $_GET['brand_id'];
        $cols=array('*');
        $tbls=array("brand");
        return  $this->db
        ->select($cols)
        ->from($tbls)
        ->where("brand_id","=",$id)
        ->build()
        ->exeucte();
    }
    function update($data){
        $value= $_POST['brand_id'];
        $this->db->updateBrand("brand",$data,$value);
    }
    function delet(){
        $value= $_POST['brand_id'];
        $tbls=array("brand");
        return $this->db
        ->delete()
        ->from($tbls)
        ->where("brand_id","=",$value)
        ->build()
        ->delete_execute();
        
    }
}

?>