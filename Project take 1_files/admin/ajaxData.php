<?php
 
include('../mietproject.php');
if(!empty($_POST['state_id'])){ 
    $id=$_POST['state_id'];
$query  ="select * from cities where state_id = '$id'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
     
    // Generate HTML of city options list 
    if($no > 0){ 
        echo '<option value="">Select city</option>'; 
        while($no>0){  
            echo '<option value="'.$row['id'].'">'.$row['city'].'</option>'; 
            $no--;
            $row    = mysqli_fetch_array($result);
        } 
    }
}
else if(!empty($_POST['city_id'])){ 
    $id=$_POST['city_id'];
$query  ="select * from villages where city_id = '$id'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
     
    // Generate HTML of city options list 
    if($no > 0){ 
        echo '<option value="" selected>Select Village</option>'; 
        while($no>0){  
            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>'; 
            $no--;
            $row    = mysqli_fetch_array($result);
        } 
    }
}
else if(!empty($_POST['village_id'])){ 
    $id=$_POST['village_id'];
    $st=$_POST['id'];
$query  ="select * from tbl_products_master where village_id = '$id' and level='$st'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
     
    // Generate HTML of city options list 
    if($no > 0){ 
        
        while($no>0){  
            
      echo'      <div class="col-md-4" id="'.$row['id'].'">
          <div class="card mb-4 shadow-sm">
              <br><a href="#" style=" margin-left: auto; margin-right: auto; width: 116px; ">
            <img src="../'.$row['image'].'" style="width: 116px;"></a>
            <div class="card-body">
              <p class="card-text"><a href="#" style="color:#784212">Product Name - '.$row['name'].'</a></p>
              <p class="card-text">Product Price - '.$row['price'] .'per Unit</p>
              <p class="card-text">Listed on - '.$row['created_at'].'</p>
              <div class="d-flex justify-content-between align-items-center">
                <p style=" text-align: center; ">
                    <form class="approve"  name="'.$row['id'].'">
                    <button class="btn btn-primary my-2" style="background: #61af1a; border-color: #61af1a" onmouseover="this.style.background=\'#7bf10f\'" onmouseout="this.style.background=\'#61af1a\'">Approve Product</button>
                    <br>
                    </form>
                    <form class="decline"  name="'.$row['id'].'">
                    <button class="btn btn-primary my-2" style="background: #e31212; border-color: #e31212" onmouseover="this.style.background=\'#ef2b2b\'" onmouseout="this.style.background=\'#e31212\'" >Decline Product</button>
                    
                    </form>
                    
                 </p>
              </div>
            </div>
          </div>
        ';
            echo '<script> $(".approve").click(function(e) {

                e.preventDefault();
                var a = $(this).attr("name");
                var b = "#"+a;
                $.ajax({
                        type: "POST",
                        url: "ajaxData.php",
                        data: \'approve=\' + a,
                        success: function(whatigot) {
                        $(b).remove();
                        
                        } //END success fn
                    }); //END $.ajax
                });
                </script>';
                
                echo '<script> $(".decline").click(function(e) {

                e.preventDefault();
                var a = $(this).attr("name");
                var b = "#"+a;
                $.ajax({
                        type: "POST",
                        url: "ajaxData.php",
                        data: \'decline=\' + a,
                        success: function(whatigot) {
                        $(b).remove();
                        } //END success fn
                    }); //END $.ajax
                });
                </script></div>';
            
            $no--;
            $row    = mysqli_fetch_array($result);
        } 
    }
}

else if(!empty($_POST['decline'])){ 
            $id=$_POST['decline'];
            $query  ="select * from tbl_products_master where id = '$id'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
     
     
    if($no > 0){ 
        $dec=0;
        $query  ="update tbl_products_master set status='$dec' where id = '$id'";
            $result =mysqli_query($conn,$query);
    }
}
else if(!empty($_POST['approve'])){ 
            $id=$_POST['approve'];
            $query  ="select * from tbl_products_master where id = '$id'";
            $result =mysqli_query($conn,$query);
            $row    = mysqli_fetch_array($result);
            $no     = mysqli_num_rows($result);
            
    
    if($no > 0){ 
        $lel    = $row['level'];
        if($lel<3){
        $app=1;
        $lel++;
        $query  ="update tbl_products_master set status='$app', level='$lel' where id = '$id'";
            $result =mysqli_query($conn,$query);
    } 
        
    }
}

?>