<?php
    $products = array(
        array(
            'img' => 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1000,h_1000/global/387599/01/sv01/fnd/IDN/fmt/png/Sepatu-Sneaker-Slip-On-Anzarun-Lite',
            'judul' => 'Sepatu PUMA Slip-On Anzarun Lite',
            'desk' => 'Sepatu ini cocok untuk lari di GBK',
            'btn' => 'Beli Sekarang'
        ),
        array(
            'img' => 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1000,h_1000/global/392326/02/sv01/fnd/IDN/fmt/png/Sepatu-Sneaker-Rebound',
            'judul' => 'Sepatu PUMA Rebound Sneakers',
            'desk' => 'Sepatu ini cocok untuk pamer',
            'btn' => 'Beli Sekarang'
        ),
        array(
            'img' => 'https://dynamic.zacdn.com/KUU6-OPy715MYBXMoYIXUnE1zL4=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/oxford-society-9668-7376913-1.jpg',
            'judul' => 'Jaket Varsity Oxford Society Leeds Black',
            'desk' => 'Jaket umum digunakan untuk menonton Baseball',
            'btn' => 'Beli Sekarang'
        ),
        array(
            'img' => 'https://houseofsmith.co.id/wp-content/uploads/2021/12/63.1.jpg',
            'judul' => 'Jaket Bomber House of Smith',
            'desk' => 'Jaket untuk berpergian keluar rumah',
            'btn' => 'Beli Sekarang'
        ),
    );
?>


<x-layout>
<h3>oi kiyomasa</h3>
<div class="container py-5">
        <x-slot name="title">{{ $title }}</x-slot>

        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold text-primary border-bottom pb-2">Produk Kami</h2>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden product-card">
                        <img src="{{ $product['img'] }}" class="card-img-top" alt="{{ $product['judul'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary fw-bold">{{ $product['judul'] }}</h5>
                            <p class="card-text text-muted">{{ $product['desk'] }}</p>
                            <a href="#" class="btn btn-primary btn-hover w-100">
                                <i class="bi bi-cart-plus me-2"></i>{{ $product['btn'] }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center text-center mt-5">
            <h3 class="text-black">Lacak Pesanan Anda</h3>
            <button id="liveAlertBtn" class="btn btn-outline-primary mt-2">
                <i class="bi bi-search me-2"></i>Lacak
            </button>
            <div id="liveAlertPlaceholder"></div>
        </div>
    </div>
</x-layout>

<style>
    /* Efek Hover pada Card */
    .product-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Efek Hover pada Button */
    .btn-hover {
        transition: 0.3s;
    }

    .btn-hover:hover {
        background-color: #ff6b6b;
        border-color: #ff6b6b;
    }

    /* Animasi Fade-in */
    .animate__animated {
        animation-duration: 1s;
    }
</style>

<script>
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder');

    const appendAlert = (message, type) => {
        const wrapper = document.createElement('div');
        wrapper.innerHTML = `
            <div class="alert alert-${type} alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow-lg" 
                style="z-index: 1050; min-width: 300px;" role="alert">
                <i class="bi ${type === 'success' ? 'bi-check-circle' : 'bi-exclamation-circle'} me-2"></i>${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        alertPlaceholder.append(wrapper);

        setTimeout(() => {
            const alert = wrapper.querySelector('.alert');
            alert.classList.add('fade');
            setTimeout(() => wrapper.remove(), 1000);
        }, 3000);
    };

    document.getElementById('liveAlertBtn').addEventListener('click', () => {
        appendAlert('Anda belum memesan', 'success');
    });
</script>
