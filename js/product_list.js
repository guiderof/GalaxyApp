$(document).ready(function() {
    getProducts();
});

function getProducts() {
    $.ajax({
        url: 'http://128.199.107.16/api/productList.php',
        method: 'POST',
        dataType: 'json',
        success: function(data) {
            var result = '';

            for (var i=0; i < data.length; i ++) {
                result += '<div class="product-list panel panel-default">' +
                    '<div class="panel-body text-center">' +
                        '<form action="/confirm_order.php" method="GET">' +
                            '<img class="list-img" src="image/product.jpg"/>' +
                            '<div class="row list-details">' +
                                '<div class="col-md-8 text-left">' +
                                    '<h5>' + data[i]['ProductName'] + '</h5>' +
                                '</div>' +
                                '<div class="col-md-4 text-right">' +
                                    '<p>' + data[i]['Price'] + 'THB</p>' +
                                '</div>' +
                            '</div>' +
                            '<input name="Quantity" type="text" value="1">' +
                            '<input name="SKU" type="hidden" value"' + data[i]['SKU'] + '">' +
                            '<input name="ProductName" type="hidden" value"' + data[i]['ProductName'] + '">' +
                            '<input name="Price" type="hidden" value"' + data[i]['Price'] + '">' +
                            '<button type="submit" class="btn btn-primary">สั่งซื้อ</button>' +
                        '</form>' +
                    '</div>' +
                '</div>';
            }

            $('#product_list_container').html(result);
        }
    });
}
