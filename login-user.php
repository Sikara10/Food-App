<?php require_once 'headlinks.php'?>

<div class="lgn-main">
    <div class="lgn-gd-lft">
        <h3>User Potral</h3>
        <form>
            <!-- Email input -->
            <div class="mb-4">
                <input type="email" placeholder="Email Address" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="mb-4">
                <input placeholder="Password" type="password" class="form-control" />
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>
                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>
            <!-- Submit button -->
            <button type="button" class="btn btn-primary btn-block mb-4"><a href="menu.php">Sign in</a></button>
            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a class="text-muted pointer">Register</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating m-0 p-0">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating m-0 p-0">
                    <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating m-0 p-0">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating m-0 p-0">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="lgn-gd-rt">

    </div>
</div>