<!--==================== HEADER ====================-->
<header class="header shadow-header" id="header">
   <nav class="nav container">
      <a href="#" class="nav__logo">
         <span class="nav__logo-circle">C </span>
         <span class="nav__logo-name">Mossaloji.</span>
      </a>

      <div class="nav__menu" id="nav-menu">
         <span class="nav__title">Menu</span>

         <h3 class="nav__name">Mossaloji</h3>

         <ul class="nav__list">
            <li class="nav__item">
               <a href="/" class="nav__link active-link">Home</a>
            </li>

            <li class="nav__item">
               <a href="{{ route('posts.index') }}" class="nav__link">Dashboard</a>
            </li>


            <li class="nav__item">
               <a href="{{ route('posts.create') }}" class="nav__link nav__link-button">Tambah Data</a>
            </li>
         </ul>

         <!-- Close Button -->
         <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
         </div>
      </div>

      <div class="nav__buttons">
         <!-- Theme Button -->
         <i class="ri-moon-foggy-line change-theme" id="theme-button"></i>

         <!-- Toggle Button -->
         <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-4-line"></i>
         </div>
      </div>
   </nav>
</header>
