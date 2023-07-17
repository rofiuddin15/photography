@extends('depan.index')

@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Beranda</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        <div class="contact__form">
                            <h5>MENDAFTAR</h5>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <input type="hidden" name="role" value="user">
                                <input type="text" name="name" placeholder="Tulis Nama anda" required>
                                <input type="text" name="email" placeholder="Tulis email anda" required>
                                <input type="text" name="no_hp" placeholder="Tulis nomor hp anda" required>
                                <input type="password" name="password" placeholder="tulis password anda" required>
                                <textarea name="alamat" placeholder="Tulis alamat lengkap anda"></textarea>
                                <button type="submit" class="site-btn">DAFTAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
