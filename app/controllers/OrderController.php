<?php

class CartController {
    public function view() {
        // Obtener productos en el carrito del usuario actual
        // Calcular el total del carrito
        // Renderizar la vista del carrito con los productos y el total
    }

    public function addToCart($productId) {
        // Agregar el producto con $productId al carrito del usuario actual
        // Redirigir de vuelta a la vista del producto o al carrito
    }

    public function removeFromCart($productId) {
        // Remover el producto con $productId del carrito del usuario actual
        // Redirigir de vuelta a la vista del carrito
    }
}
