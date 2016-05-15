<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>
    <script>
        var addProduct = function () {
            
        };
    </script>
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>

  </head>

 <body>
    <div class="container">

      <h1>Add Product</h1>
      <div class="row">
            <span class="span4">SKU :</span>
            <span class="span8"><input type="text" name="SKU" id="SKU" value=""></span>
      </div>
      <div class="row">
            <span class="span4">Name :</span>
            <span class="span8"><input type="text" name="ProductName" id="ProductName" value=""></span>
      </div>
      <div class="row">
            <span class="span4">Price :</span>
            <span class="span8"><input type="text" name="Price" id="Price" value=""></span>
      </div>
      <div class="row">
            <span class="span4">Special Price :</span>
            <span class="span8"><input type="text" name="SpecialPrice" id="SpecialPrice" value=""></span>
      </div>
      <div class="row">
            <span class="span4">Description :</span>
            <div class="span8">
              <textarea name="Description" id="Description"></textarea>
            </div>
      </div>
      <div class="row">
            <span class="span4">Image :</span>
            <span class="span8"><input type="file" name="btnBrowseImage" id="btnBrowseImage" value=""></span>
      </div>
      <div id="ImagePreview">
           Preview
      </div>
      <div class="row">
            <span class="span4">Order No:</span>
            <span class="span8"><input type="text" name="OrderNo" id="OrderNo" value=""></span>
      </div>
      <div>
          <button id="btnCancel">Cancel</button>
          <button id="btnSave">Save</button>
      </div>
    </div> <!-- /container -->
  </body>
</html>
