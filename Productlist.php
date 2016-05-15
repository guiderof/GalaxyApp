<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Product List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/product-list.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 20px; /* 60px to make the container go all the way to the bottom of the topbar */
        max-width: 1024px;
        width: 100%;

      }
      .btn-product {
        float: right;

      }
      .table{
        max-width: 900px;
        width: 100%;
      }
    </style>
    <script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>
    <script>
        var goAddProduct = function () {
            window.location.href = "http://128.199.107.16/AddProduct.php";
        };
    </script>
  </head>

  <body>
    <div class="container">
      <div class="span6">
          <h1>Product List</h1><div class="btn-product"><input type="button" id="addProduct" value="Add" class="btn" onclick="javascript : goAddProduct();"></div> <!-- /container -->
            <table class="table table-bordered" id="listProduct">
              <tbody>
                <thead class="table-bordered">
                <tr>
                  <th style="text-align: center;" align="center">SKU</th>
                  <th style="text-align: center;" align="center">Product Name</th>
                  <th style="text-align: center;" align="center">Price</th>
                </tr>
                </thead>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                </tr>
              </tbody>
            </table>
          </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    </div>
  </body>
</html>
