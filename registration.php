<?php
include_once 'header.php';
include_once 'nav.php';
?>

    <main class="bg-light">
    <div class="py-3 text-center ">
        <h2>Создайте аккаунт</h2>
    </div>
        <div class="container-md modal modal-signin position-static d-block bg-light py-2">
            <div class="row justify-content-center align-items-center">
            <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                    <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <div class="row g-2">
                    <div class="col-sm-4">
                        <label for="cc-name" class="form-label">Password</label>
                        <input type="text" class="form-control" id="pas-name" placeholder="" required>
                        <small class="text-muted">The password must be at least eight characters long, including letters, numbers, and special characters</small>
                        <div class="invalid-feedback">
                           Password is required
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="cc-number" class="form-label">Сonfirm</label>
                        <input type="text" class="form-control" id="pas-confirm" placeholder="" required>
                        <div class="invalid-feedback">
                            Password is required
                        </div>
                    </div>
                <hr class="my-1">
                        <div class="d-grid gap-2 col-4 mx-auto">
                <button class="w-100 btn btn-primary btn-lg" type="submit">Зареєструватися</button>
                        </div>
            </form>
            </div>
        </div>
</main>
    </body>
<?php
include_once 'footer.php';
?>