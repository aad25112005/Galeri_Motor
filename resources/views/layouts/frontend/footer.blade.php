<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Lokasi</h3>
            <a href="https://www.google.com/maps/place/Padang,+Kota+Padang,+Sumatera+Barat/@-0.9342364,100.2264541,11z/data=!3m1!4b1!4m6!3m5!1s0x2fd4b942e2b117bb:0xb8468cb5c3046ba5!8m2!3d-0.9470832!4d100.417181!16zL20vMDRndjVj?entry=ttu">Padang, Sumbar</a>
        </div>

        <div class="box">
            <h3>Ikuti Kami</h3>
            <a href="#"><img src="{{ asset('image/logo_fb.png') }}" alt="facebook" width="27"> Facebook</a>
            <a href="#"><img src="{{ asset('image/logo_twitter2.png') }}" alt="facebook" width="27"> Twitter</a>
            <a href="#"><img src="{{ asset('image/logo_ig3.png') }}" alt="facebook" width="27"> Instagram</a>
        </div>

        <div class="box">
            <h3>Info Kontak</h3>
            <a href="#">+62895602588130</a>
            <a href="#">+6285271243245</a>
            <a href="#">+6282283196638</a>
        </div>

    </div>
    <div class="card text-center" data-bs-theme="dark">
        <div class="card-footer text-body-secondary">
            <div class="credit"> &copy; Copyright <?= date('Y') ?> <span> <b>Athariq Ahmad Day</b> </span>
            </div>
        </div>
    </div>
</section>
<!-- footer section ends -->
<style>
    :root {
        --green: #27ae60;
        --black: #192a56;
        --light-color: #666;
        --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    }

    section {
        padding: 2rem 9%;
    }

    section:nth-child(even) {
        background: #eee;
    }

    .footer {
        background-color: #2b3035;
    }

    .footer .box-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
        gap: 1.5rem;
    }

    .footer .box-container .box h3 {
        padding: .5rem 0;
        font-size: 1.3rem;
        color: white;
    }

    .footer .box-container .box a {
        display: block;
        padding: .5rem 0;
        font-size: 1.1rem;
        color: white;
        text-decoration: none;
    }

    .footer .box-container .box a:hover {
        color: var(--green);
        text-decoration: underline;
    }

    .footer .credit {
        color: lightblue;
    }

    .footer .credit span {
        color: var(--green);
    }

    @media (max-width:991px) {
        section {
            padding: 2rem;
        }

    }
</style>
