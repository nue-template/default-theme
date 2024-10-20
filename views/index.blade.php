@extends('theme::app', ['transparent' => true])
@section('content')
    <section class="bg-gradient pt-5 pb-6">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-row align-items-center justify-content-between">
                    <div class="heading-brand">Default Theme</div>
                    <a href="https://github.com/novay/cms" class="btn btn-dark" target="_blank">Github</a>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-md-10 mx-auto text-center">
                    <h1 class="display-1">
                        <strong style="font-weight:700">Welcome to NueCMS</strong>
                    </h1>
                    <p class="lead mb-5">
                        NueCMS adalah Content Management System (CMS) berbasis Laravel yang memberikan kemudahan dan fleksibilitas penuh dalam membangun dan mengelola website.
                    </p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-9 mx-auto">
                    <div class="code-window">
                        <div class="dots">
                            <div class="red"></div>
                            <div class="orange"></div>
                            <div class="green"></div>
                        </div>
                        <pre class="language-php line-numbers mb-0"><code class="language-php">nue-template/default-theme                
--------------------------
Route File: "/theme/routes/theme.php"
Controllers: "/theme/controllers/*.php"
Views: "/theme/views/*/*.blade.php"</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <h1 class="text-center">Mengapa Memilih NueCMS?</h1>
                    <div class="row feature-grid">
                        <div class="col-sm-4">
                            <div class="media">
                                <div class="media-body text-center">
                                    <div class="icon-box mb-3">
                                        <span data-feather="check-circle" width="75" height="75"></span>
                                    </div>
                                    <h3>Pengelolaan Konten Mudah</h3>
                                    <p class="text-muted">Panel admin yang intuitif memudahkan pengelolaan konten tanpa memerlukan pengetahuan teknis mendalam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="media">
                                <div class="media-body text-center">
                                    <div class="icon-box mb-3">
                                        <span data-feather="command" width="75" height="75"></span>
                                    </div>
                                    <h3>Dukungan Template Dinamis</h3>
                                    <p class="text-muted">Pilih dan aktifkan tema melalui backend dengan mudah menggunakan sistem theme selector.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="media">
                                <div class="media-body text-center">
                                    <div class="icon-box mb-3">
                                        <span data-feather="zap" width="75" height="75"></span>
                                    </div>
                                    <h3>Pengembangan Cepat</h3>
                                    <p class="text-muted">Modular dan mudah dikustomisasi, mempercepat pengembangan fitur kustom tanpa menyentuh dasar-dasar sistem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection