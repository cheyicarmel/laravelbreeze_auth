<x-guest-layout>
    <!-- Login 7 - Bootstrap Brain Component -->
    <section class="bg-light p-3 p-md-4 p-xl-5 m-5">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
            <div class="card border border-light-subtle rounded-4">
            <div class="card-body p-3 p-md-4 p-xl-5">
                <div class="row">
                <div class="col-12">
                    <div class="mb-5">
                    <!-- <div class="text-center mb-4">
                        <a href="#!">
                        <img src="./assets/img/bsb-logo.svg" alt="BootstrapBrain Logo" width="175" height="57">
                        </a>
                    </div> -->
                    <h3 class="fs-6 fw-normal text-secondary text-center m-0">
                        Vous avez oublié votre mot de passe ? Pas de problème, nous allons vous aider à le reinitialiser. 
                        Veuillez renseigner votre adresse email.
                    </h3>
                    </div>
                </div>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="row gy-3 overflow-hidden">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required autofocus>
                                <label for="email" class="form-label">Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button class="btn bsb-btn-xl btn-outline-primary" type="submit">Confirmer</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <a href="login" class="btn bsb-btn-xl btn-outline-primary" type="submit">Se connecter</a>
                            </div>
                        </div>
                    </div>  
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</x-guest-layout>








