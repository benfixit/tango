<?php
require "config.php";
$num_rows = (int)\Fr\LS::allArticleCount();
include('src/paginator.class.php'); 
$pages = new Paginator; 
$content = $pages->displayHtmlPages($_GET['page'],$num_rows);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
    <title>Write an Article</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="css/bootstrap.css" rel="stylesheet">  
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="../bower_components/medium-editor/dist/css/medium-editor.min.css">
    <link rel="stylesheet" href="../bower_components/medium-editor/dist/css/themes/default.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/css/medium-editor-insert-plugin.min.css">
    <style>
        .medium-insert-images.medium-insert-images-grid.small-grid figure {
            width: 10%;
        }

        @media (max-width: 750px) {
            .medium-insert-images.medium-insert-images-grid.small-grid figure {
                width: 20%;
            }
        }

        @media (max-width: 450px) {
            .medium-insert-images.medium-insert-images-grid.small-grid figure {
                width: 25%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
      <div class="row">      
        <div class="container" style="background-color: black; padding: 5px">
            <a class="navbar-brand aa-logo" href="./" style="border:2px solid #fff;color: #fff;font-family: "Poppins", sans-serif;font-size: 30px;padding: 15px;line-height: 13px;"> Alan&Grant </a>        
            <p>
              <a href="logout.php" class="pull-right" style="color: #fff;margin:10px"><strong>Log Out</strong></a>
            </p>
        </div>    
      </div>
    </div>

    <div class="container">
        <h1 align="center"><em>Write an Article</em></h1>
    </div>

    <div id="container" style="border: 1px solid #cccccc;">
            <div style="margin-bottom: 15px;">
              <label for="productName">Author </label>
              <input type="text" class="form-control" name="author" id="author" placeholder="Author" maxlength="255">
            </div>
            <div style="margin-bottom: 15px;">
              <label for="productName">Title </label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Title" maxlength="255">
            </div>
            <div class="editable" data-placeholder="Type some text" id="a_content">
                
                    <h2>Edit this for you title</h2>
                    <p>Add content here...</p>
               
            </div>
            <footer>
                <button id="submitArticle" style="background-color:transparent;border: 1px solid #cccccc;"><span class="fa fa-floppy-o"></span> </button>
                <button id="refresh" onclick="location.reload();" style="background-color:transparent;border: 1px solid #cccccc;"><span class="fa fa-refresh"></span> </button>
            </footer>

    </div>

    <div class="container" style="margin-top: 200px;">
      <div class="row">
        <div class="small-12 columns">
          <h2>All Articles</h2>
          
          <!-- Articles Rows -->
          <div class="row">
            <?php
                //get rows query
                $page_no = (isset($_GET['page']) && is_int ((int)$_GET['page'])) ? $_GET['page'] - 1 : 0;
                $query = \Fr\LS::loadAllArticle($page_no);

                $results = $query->fetchAll(\PDO::FETCH_ASSOC);
                $articleCount = $query->rowCount();
                
                if($articleCount == 0){
                  echo "<h2>No Article.</p>", "<p>There are currently no article.</p>";
                }else{
                     echo "<table class='table table-bordered'><thead>";
                      echo "<th width='15%'>Actions</th>";
                      $description = array(
                        "S/N" => "",
                        "author" => "author: Author of article",
                        "title" => "title: Title of article",
                        "created" => "created: The date when the article was created"
                      );
                      
                      $sql = \Fr\LS::descArticle();
                      foreach($sql->fetchAll() as $null => $column){
                        $column_name = $column['Field'];
                        if($column_name != "content"){
                            $column_name = $column_name == "id" ? "S/N" : $column_name;
                            echo "<th title='". (isset($description[$column_name]) ? $description[$column_name] : $column_name) ."'>". ucfirst($column_name) ."<a class='removeColumn' title='Delete Column' data-column='$column_name'></a></th>";
                        }
                      }
                    echo "</thead><tbody>";
                    foreach($results as $r){
                      $id = $r['id'];
                ?>
                      <tr>
                        <td><?php
                        echo "<form id='clear_form' action='del.php' method='POST' style='display: inline-block;'><input type='hidden' name='remove_article' value='$id'/><a class='btn red' onclick=\"confirm('Are you sure you want to delete the user ?') ? $(this).parents('form').submit() : '';\">Remove</a></form>";
                        ?></td>
                        <td><?php echo $id;?></td>
                        <?php
                        foreach($r as $column_name => $column_value){
                          if($column_name != "id" && $column_name != "content"){
                            echo "<td>". $column_value ."</td>";
                          }
                        }
                        ?>
                      </tr>
                   <?php
                    }
                    echo "</tbody></table>";
                      ?>
                  <?php }?>
           </div>
        </div>

          <div class="row">
            <div class="small-12 columns">
              <div class="paginate">
                <ul class="pagination text-center" role="navigation" aria-label="Pagination">
                  <?php echo $content; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="../bower_components/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="../bower_components/blueimp-file-upload/js/jquery.fileupload.js"></script>
    <script src="../bower_components/medium-editor/dist/js/medium-editor.js"></script>
    <script src="../bower_components/handlebars/handlebars.runtime.min.js"></script>
    <script src="../bower_components/jquery-sortable/source/js/jquery-sortable-min.js"></script>

    <!--<script src="../dist/js/medium-editor-insert-plugin.min.js"></script>-->
    <script src="../src/js/templates.js"></script>
    <script src="../src/js/core.js"></script>
    <script src="../src/js/embeds.js"></script>
    <script src="../src/js/images.js"></script>

    <script>
        var editor = new MediumEditor('.editable');

        $(function () {
            $('.editable').mediumInsert({
                editor: editor,
                addons: {
                    images: {
                        fileUploadOptions: {
                            url: 'upload.php'
                        }
                    }
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#submitArticle").click(function(){
                var author = $("#author").val();
                var title = $("#title").val();
                var content = document.getElementById('a_content').innerHTML.trim();
                // Returns successful data submission message when the entered information is stored in database.
                var dataString = 'author='+ author + '&title='+ title + '&content='+ content;
                if(author==''||title==''||content=='')
                {
                    alert("Please Fill All Fields");
                }
                else
                {
                    // AJAX Code To Submit Form.
                    $.ajax({
                        type: "POST",
                        url: "ajaxsubmit.php",
                        data: dataString,
                        cache: false,
                        success: function(result){
                            alert(result);
                            location.reload()
                        }
                    });
                }
                return false;
            });
        });
    </script>
</body>
</html>
