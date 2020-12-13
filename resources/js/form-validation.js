$(function () {
    $("form[name='product-add']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            sku: {
                required: true,
                remote: {
                    url: "/sku",
                    type: "post"
                },
            },
            name: "required",
            price: {
                required: true,
                number: true,
            },
            type: "required",
            size: {
                required: true,
                number: true,
            },
            height: {
                required: true,
                number: true,
            },
            width: {
                required: true,
                number: true,
            },
            length: {
                required: true,
                number: true,
            },
            weight: {
                required: true,
                number: true,
            },

        },
        // Specify validation error messages
        messages: {
            sku: {
                required: "Please enter sku identifier",
                remote: "Sku identifier must be unique",
            },
            name: "Please enter the product name",
            price: {
                required: "Please enter the price of the product",
                number: "Product price must be in the numeric format"
            },
            type: "Please select product type",
            size: {
                required: "Please enter the size of the product",
                number: "Product size must be in the numeric format"
            },
            height: {
                required: "Please enter the height of the product",
                number: "Product height must be in the numeric format"
            },
            width: {
                required: "Please enter the width of the product",
                number: "Product width must be in the numeric format"
            },
            length: {
                required: "Please enter the length of the product",
                number: "Product length must be in the numeric format"
            },
            weight: {
                required: "Please enter the weight of the product",
                number: "Product weight must be in the numeric format"
            },
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            form.submit();
        }
    });
});