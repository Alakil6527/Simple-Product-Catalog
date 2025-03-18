$(document).ready(function () {
    let cart = JSON.parse(sessionStorage.getItem("cart")) || [];

    function updateCart() {
        let total = 0;
        let cartHtml = "";
        cart.forEach((item, index) => {
            let subtotal = item.price * item.quantity;
            total += subtotal;
            cartHtml += `
                <tr>
                    <td>${item.name}</td>
                    <td>$${item.price}</td>
                    <td><input type="number" class="quantity" data-index="${index}" value="${item.quantity}" min="1"></td>
                    <td>$${subtotal}</td>
                    <td><button class="btn btn-danger remove" data-index="${index}">Remove</button></td>
                </tr>
            `;
        });

        //10% discount on 3 plus items
        let discount = cart.length >= 3 ? total * 0.1 : 0;
        let finalTotal = total - discount;

        $("#cart-body").html(cartHtml);
        $("#total").text(total.toFixed(2));
        $("#discount").text(discount.toFixed(2));
        $("#final-total").text(finalTotal.toFixed(2));

        sessionStorage.setItem("cart", JSON.stringify(cart));
    }

    $(".add-to-cart").click(function () {
        let productId = $(this).data("id");
        let productName = $(this).data("name");
        let productPrice = $(this).data("price");

        let existing = cart.find(item => item.id === productId);
        if (existing) {
            existing.quantity += 1;
        } else {
            cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
        }

        updateCart();
    });

    $(document).on("change", ".quantity", function () {
        let index = $(this).data("index");
        cart[index].quantity = parseInt($(this).val());
        updateCart();
    });

    $(document).on("click", ".remove", function () {
        let index = $(this).data("index");
        cart.splice(index, 1);
        updateCart();
    });

    updateCart();
});
