<?php
include ('db_config.php');
$response = array();
//$category = "motor";
//$type = "personal";
//$amount = 4.80;
if (isset($_POST['type']) && isset($_POST['category']) && isset($_POST['percentage'])) {
//if($category){
//check string
    //posting the categories
    $type = $_POST['type'];
    $category = $_POST['category'];
    $percentage = $_POST['percentage'];

    //stripslashes($category);    
    //mysqli_real_escape_string($category);
    //search database
    $query = "select * from products where type='$type' and category = '$category' and percentage<='$percentage'";
    $result = mysqli_query($con, $query);

    //check if query excecuted
    if($result=mysqli_query($con, $query)){
        
        if($result->num_rows>0){
            
        while($row=$result->fetch_object()){
         echo  "<div class=\"col-lg-3\"> Name: " .$row->name. 
                 "Type: " . $row->type. 
                 "Category: ". $row->category.
                 "Company: ". $row->company.
                 "Percentage: ". $row->percentage.                 
                 "Description: " .$row->description.
                 "Validity: ". $row->validity.
                 "Last Edited: ". $row->updated_at.                            
                                
                 " <hr>
                  <button class=\"btn btn-primary \">View Details</button>
                  <button class=\"btn btn-primary \">Buy Quote</button>
            </div>";
         
        }
            
            
        }else{
            echo "There are no results for your search";
        }
        
        
    }else{
        echo "there was a problem searching quotes";
    }
    
} else {

    echo "Required fields are missing ";
}
?>