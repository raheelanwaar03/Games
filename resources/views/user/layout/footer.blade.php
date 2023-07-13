<script>
    function updateQuantity(operation) {
        var quantityElement = document.getElementById('quantity');
        var quantity = parseInt(quantityElement.value);

        // Increase or decrease the quantity based on the operation
        if (operation === 'plus') {
            quantity += 1;
        } else if (operation === 'minus') {
            if (quantity > 1) {
                quantity -= 1;
            }
        }

        // Update the quantity input field
        quantityElement.value = quantity;
    }
</script>



<!-- JS file links -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
