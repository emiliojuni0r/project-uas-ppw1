$(document).ready(function() {
    // Update the price range text
    $('#priceRange').on('input', function() {
        $('#priceRangeValue').text('0 - ' + $(this).val());
    });

    // Apply filters when the button is clicked
    $('#applyFilters').click(function() {
        var selectedCategories = $('#categories').val();
        var maxPrice = $('#priceRange').val();
        console.log("Selected Categories:", selectedCategories);
        console.log("Max Price:", maxPrice);
        $('.product-card-container').each(function() {
            var price = parseFloat($(this).data('price'));
            var category = parseInt($(this).data('category'), 10); // Ensure category is an integer
            console.log("Product Price:", price, "Category:", category);
            if (price <= maxPrice && (selectedCategories.length === 0 || selectedCategories.includes(category.toString()))) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

    // Sort products when the sort order is changed
    $('#sortOrder').change(function() {
        var order = $(this).val();
        var products = $('.product-card-container').toArray();
        console.log("Sort Order:", order);
        products.sort(function(a, b) {
            var priceA = parseFloat($(a).data('price'));
            var priceB = parseFloat($(b).data('price'));
            if (order === 'priceLowToHigh') {
                return priceA - priceB;
            } else if (order === 'priceHighToLow') {
                return priceB - priceA;
            } else if (order === 'newest') {
                // Assuming you have a data attribute for the date, sort by date
                // var dateA = new Date($(a).data('date'));
                // var dateB = new Date($(b).data('date'));
                // return dateB - dateA;
                return 0; // Placeholder for actual newest sorting logic
            } else {
                return 0;
            }
        });
        $('#productList').html(products);
    });
});
