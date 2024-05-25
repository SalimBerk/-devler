<?php
    
    require "libs/vars.php";
    require "libs/functions.php";  
   
    $id = $_GET["id"];
    $result = getBlogByID($id);
    $selectedMovie = mysqli_fetch_assoc($result);
    

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $title = $_POST["title"];
        $input_title = trim($title);

        if(empty($input_title)){
            $title_err = "title boş geçilemez.";
        }else if(strlen($input_title) > 150){
            $title_err = "title için çok fazla karakter kullandınız. Max: 150kr";
        }else{
            $title = control_input($input_title);
        }
        $description = $_POST["description"];
        $input_description = trim($description);

        if(empty($input_description)){
            $description_err = "description boş geçilemez.";
        }else if(strlen($input_description) < 10){
            $description_err = "description için çok az karakter kullandınız. Min: 11kr";
        }else{
            $description = $input_description;
        }
        $image = $_POST["image"];
        $url = $_POST["url"];
        $isActive =isset($_POST["isActive"]) ? 1 : 0;
        
        if(empty($title_err) && empty($description_err)){
            
            if(editBlog($id,$title,$description,$image,$url,$isActive)){
              $_SESSION["message"] = "Güncelleme işlemi Başarılı Oldu";
             
                header('Location: index.php');
              
            
              

             
             }else{
                
                 return;
             }

        }

    }
?>
<?php if(!empty($title_err) || !empty($description_err)): ?>
<div class="alert alert-danger text-center p-4 m-0" role="alert">
  <?php echo "Güncelleme Esnasında Bir Hata Oluştu" ?>
</div>
<?php endif; ?>
<?php include "views/_header.php" ?>
<?php include "views/_navbar.php" ?>

<div class="container my-3">

    <div class="row">

        <div class="col-3">
            <?php include "views/_menu.php" ?>     
        </div>
        <div class="col-9">

           <div class="card">
           
                <div class="card-body">
                    <form method="POST">

                        <div class="mb-3">
                            <label for="title" class="form-label">Başlık</label>
                            <input type="text" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid':''?>"  name="title" id="title" value="<?php echo $selectedMovie["title"] ?>">
                            <span class="invalid-feedback"><?php echo $title_err ?></span>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Açıklama</label>
                            <textarea name="description" id="description" class="form-control <?php echo (!empty($description_err)) ? 'is-invalid':''?>"><?php echo $selectedMovie["description"] ?></textarea>
                            <span class="invalid-feedback"><?php echo $description_err ?></span>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Resim</label>
                            <input type="text" class="form-control" name="image" id="image" value="<?php echo $selectedMovie["image"] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="url" class="form-label">url</label>
                            <input type="text" class="form-control" name="url" id="url" value="<?php echo $selectedMovie["url"] ?>">
                        </div>
                        <div class="form-check mb-3">
                            <label for="isActive" class="form-check-label">Is Active</label>
                            <input type="checkbox" class="form-check-input" name="isActive" id="isActive" <?php if($selectedMovie["isActive"]){echo "checked";} ?>>
                        </div>

                        <input type="submit" value="Submit" class="btn btn-primary">

                    
                    </form>
                </div>
            </div>

        </div>    
    
    </div>

</div>

<?php include "views/_footer.php" ?>

