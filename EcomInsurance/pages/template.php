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
                $query = "select * from products where type='$type' and category = '$category' and percentage<'$percentage' order by percentage ASC";
                $result = mysqli_query($con, $query);

                //check if query excecuted
                if ($result) {

                    if ($result->num_rows > 0) { 
                        echo "<div class=\"row\"><div class=\"btn btn-success col-lg-12\"><p>Total Results Found</p></div></div>";

                        while ($row = $result->fetch_object()) {
                            echo "<div class=\"col-md-4\">Name: " . $row->name . "<br>".
                            "Type: " . $row->type . "<br>".
                            "Category: " . $row->category . "<br>".
                            "Company: " . $row->company . "<br>".
                            "Percentage: " . $row->percentage . "% of current value <br>".
                            "Description: " . $row->description . "<br>".
                            "Validity: " . $row->validity . "Years". "<br>".
                            "Last Edited: " . $row->updated_at .                            " <hr>
                  <button class=\"btn btn-primary form-control \">Buy Quote</button>
                  <div class=\"panel-footer\"></div>
            </div>
            </div>";
                        }
                    } else {
                        echo "<div class=\"row\"><div class=\"btn btn-warning col-lg-12\"><p>Total Results Found</p></div></div>";
                        echo "There are no results for your search go back and search using different figures";
                    }
                } else {
                    echo "<div class=\"row\"><div class=\"btn btn-danger col-lg-12\"><p>Total Results Found</p></div></div>";
                    echo "<div class=\"panel-danger\"> <h3>there was a problem searching quotes<h3></div>";
                }
            } else {

                echo "<div class=\"panel-danger\"> <h3>Please fill all fields<h3></div>";
            }
            ?>