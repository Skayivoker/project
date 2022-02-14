<?php
include_once 'header.php';
include_once 'nav.php';
?>
    <body class="bg-light">
    <div class="container">
<main>
    <div class="py-5 text-center">
        <h2>Создайте аккаунт</h2>
    </div>
        <div class="col-md-7 col-lg-8">
            <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                            <div class="invalid-feedback">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <div class="row gy-3">
                    <div class="col-md-6">
                        <label for="cc-name" class="form-label">Password</label>
                        <input type="text" class="form-control" id="pas-name" placeholder="" required>
                        <small class="text-muted">The password must be at least eight characters long, including letters, numbers, and special characters</small>
                        <div class="invalid-feedback">
                           Password is required
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="cc-number" class="form-label">Сonfirm</label>
                        <input type="text" class="form-control" id="pas-confirm" placeholder="" required>
                        <div class="invalid-feedback">
                            Password is required
                        </div>
                    </div>
                <hr class="my-4">
                <button class="w-100 btn btn-primary btn-lg" type="submit">Зареєструватися</button>
            </form>
        </div>
    </div>
</main>
    </div>
    </body>
<?php
include_once 'footer.php';
?>