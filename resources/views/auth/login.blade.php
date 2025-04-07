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
                    <h2 class="h4 text-center">CONNEXION</h2>
                    <h3 class="fs-6 fw-normal text-secondary text-center m-0">Entrez vos informations pour pouvoir vous connecter</h3>
                    </div>
                </div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row gy-3 overflow-hidden">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                                <label for="email" class="form-label">Email</label>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="password" value="" placeholder="Mot de passe" required>
                                <label for="password" class="form-label">Mot de passe</label>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="d-grid">
                                <button class="btn bsb-btn-xl btn-primary" type="submit">Se connecter</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('password.request') }}" class="link-primary text-decoration-none text-center">Mot de passe oublié ?</a>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <a href="/register" class="btn bsb-btn-xl btn-outline-primary" type="submit">S'inscrire</a>
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







