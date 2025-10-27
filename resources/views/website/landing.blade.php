<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MJS Organics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/website/css/style.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">MJS Organics</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500x500.png?text=Organic+Honey" class="img-fluid" alt="Product Image">
                <h2 class="mt-3">Organic Honey</h2>
                <p>Our organic honey is sourced from the finest bees and flowers, ensuring a pure and natural taste. It's perfect for your tea, toast, or as a natural sweetener.</p>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Order Now</h3>
                        <form>
                            <div class="mb-3">
                                <label for="userName" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="userName" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Payment Method</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="cod" value="cod" checked>
                                    <label class="form-check-label" for="cod">
                                        Cash on Delivery (COD)
                                    </label>
                                </div>
                            </div>
                            <div class="order-checkout">
                                <h3 class="order-title">Your order</h3>
                                <table class="checkout-table table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">PRODUCT</th>
                                            <th class="product-total">TOTAL</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span>Organic Honey</span>
                                                    <div class="input-group w-50">
                                                        <button class="btn btn-outline-secondary" type="button" id="button-minus">-</button>
                                                        <input type="text" class="form-control text-center" id="quantity" value="1" readonly>
                                                        <button class="btn btn-outline-secondary" type="button" id="button-plus">+</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-total">$59.00</td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th class="subtotal">Subtotal</th>
                                            <td class="subtotal text-end">$59.00</td>
                                        </tr>
                                        <tr class="order-total">
                                            <th class="total">Total</th>
                                            <td class="total text-end">$59.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Confirm Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Order Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="productName" class="form-label">Selected Product</label>
                            <input type="text" class="form-control" id="productName" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="button-minus">-</button>
                                <input type="text" class="form-control text-center" id="quantity" value="1" readonly>
                                <button class="btn btn-outline-secondary" type="button" id="button-plus">+</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="userName" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="userName" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Payment Method</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="cod" value="cod" checked>
                                <label class="form-check-label" for="cod">
                                    Cash on Delivery (COD)
                                </label>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Confirm Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; 2025 MJS Organics. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/website/js/main.js') }}"></script>
</body>
</html>

