<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CWB Resto</title>
    @vite(['resources/css/home.css'])
  </head>
  <body>
    <header class="app-bar">
      <div class="app-bar__logo">

      </div>
      <nav id="navigationDrawer" class="app-bar__navigation">
        <ul>
          <li>
            <button class="cart-button"><i class="fa-solid fa-cart-shopping"></i></button>
          </li>
          <li>
            <button class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
          </li>
          <li>
            <button><i class="fa-solid fa-circle-info"></i></button>
          </li>
        </ul>
      </nav>
    </header>

    <main id="mainContent">
        <section class="jumbotron">
            <figure>
                <img src="https://awsimages.detik.net.id/community/media/visual/2023/12/25/rumah-berusia-ratusan-tahun-milik-emah-84-di-dusun-hambawang-desa-padaasih-kecamatan-conggeang-sumedang-1.jpeg?w=600&q=90" alt="">
                <figcaption>
                    <h1 class="font-organetto">BUITENHOF</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#">Lihat Menu</a>
                </figcaption>
            </figure>
        </section>

        <section class="about-us">
          <h3 class="heading font-organetto">Tentang Kami</h3>

          <div class="about-us__content">      
            <figure>
              <img src="https://awsimages.detik.net.id/community/media/visual/2023/12/25/rumah-berusia-ratusan-tahun-milik-emah-84-di-dusun-hambawang-desa-padaasih-kecamatan-conggeang-sumedang-1.jpeg?w=600&q=90" alt="">
              <figcaption>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quas quibusdam dignissimos magni veniam temporibus ipsa voluptates in expedita nisi maxime doloremque quae, provident ea doloribus sapiente numquam consequuntur aperiam.
              </figcaption>
            </figure>
            <figure>
              <img src="https://awsimages.detik.net.id/community/media/visual/2023/12/25/rumah-berusia-ratusan-tahun-milik-emah-84-di-dusun-hambawang-desa-padaasih-kecamatan-conggeang-sumedang-1.jpeg?w=600&q=90" alt="">
              <figcaption>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quas quibusdam dignissimos magni veniam temporibus ipsa voluptates in expedita nisi maxime doloremque quae, provident ea doloribus sapiente numquam consequuntur aperiam.
              </figcaption>
            </figure>
          </div>
        </section>
    </main>

    @vite(['resources/js/user/home.js'])
  </body>
</html>
