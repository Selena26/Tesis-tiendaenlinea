$(document).ready(function() {
    // Manejar clic en el botón "Añadir al carrito"
    $('#addToCartBtn').click(function() {
        // Obtener los datos del formulario
        var formData = $('#productForm').serializeArray();
        
        // Mostrar la fila del producto agregado
        $('#rowProductoAgregado').removeClass('d-none');
        
        // Ocultar la fila después de 5 segundos
        setTimeout(function() {
            $('#rowProductoAgregado').addClass('d-none');
        }, 5000); // 5000 milisegundos = 5 segundos
        
        // Guardar los datos del producto en un array (puedes enviarlo mediante AJAX a tu backend)
        var productData = {};
        $(formData).each(function(index, obj){
            productData[obj.name] = obj.value;
        });
        console.log('Producto agregado:', productData);
    });
});
