<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CWB Resto</title>
    @vite(['resources/css/admin.css'])
  </head>
  <body>
    <header class="app-bar">
      <div class="app-bar__menu">
        <button id="hamburgerButton">☰</button>
      </div>
      <nav id="navigationDrawer" class="app-bar__navigation">
        <ul>
          <li><a href="/admin/home">
            <img src="/icons/bx_bxs-store-alt.svg" alt="">
          </a></li>
          <li><a href="#">
            <img src="/icons/Frame 65.svg" alt="">
          </a></li>
          <li><a href="#">
            <img src="/icons/Frame 66.svg" alt="">
          </a></li>
          <li><a href="/admin/setting">
            <img src="/icons/Frame 67.svg" alt="">
          </a></li>
        </ul>
      </nav>
    </header>

    <main id="mainContent">
      @yield('content')
    </main>

    @vite(['resources/js/admin/admin.js'])
  </body>
</html>