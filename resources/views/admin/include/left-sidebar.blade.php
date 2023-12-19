<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('back-end-assets') }}/assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('back-end-assets') }}/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">

      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>

      {{-- Dashboard --}}

      <li class="nav-item menu-items" title="Dashboard">
        <a class="nav-link" href="{{ route('dashboard') }}" >
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

        {{-- Dashboard --}}

            {{-- Category menu --}}

      <li class="nav-item menu-items" title="Category">
        <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
          <span class="menu-icon">
            <i class="mdi mdi-format-list-bulleted"></i>
          </span>
          <span class="menu-title">Category</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="category">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a href="{{ route('categories.create') }}" class="nav-link" >Add Category</a></li>
            <li class="nav-item"> <a href="{{ route('categories.index') }}"  class="nav-link">Manage Category</a></li>
          </ul>
        </div>
      </li>

      {{-- Category menu --}}

      {{-- PORTFOLIO menu --}}

      <li class="nav-item menu-items" title="Portfolio">
        <a class="nav-link" data-toggle="collapse" href="#portfolio" aria-expanded="false" aria-controls="portfolio">
          <span class="menu-icon">
            <i class="mdi mdi-file-tree"></i>
          </span>
          <span class="menu-title">Portfolio</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="portfolio">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a href="{{ route('portfolios.create') }}" class="nav-link" >Add Portfolio</a></li>
            <li class="nav-item"> <a href="{{ route('portfolios.index') }}"  class="nav-link">Manage Portfolio</a></li>
          </ul>
        </div>
      </li>

      {{-- PORTFOLIO menu --}}


      {{-- Testimonial  --}}

      <li class="nav-item menu-items" title="Testimonial">
        <a class="nav-link" data-toggle="collapse" href="#testimonial" aria-expanded="false" aria-controls="testimonial">
            <span class="menu-icon">
              <i class="mdi mdi-comment-account-outline"></i>
            </span>
            <span class="menu-title">Testimonial</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="testimonial">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a href="{{ route('testimonials.create') }}" class="nav-link" >Add Testimonial</a></li>
              <li class="nav-item"> <a href="{{ route('testimonials.index') }}"  class="nav-link">Manage Testimonial</a></li>
          </ul>
        </div>
        </li>

      {{-- Testimonial  --}}

      {{-- Team  --}}
      <li class="nav-item menu-items" title="Team">
        <a class="nav-link" data-toggle="collapse" href="#team" aria-expanded="false" aria-controls="team">
            <span class="menu-icon">
              <i class="mdi mdi-comment-account-outline"></i>
            </span>
            <span class="menu-title">Team</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="team">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a href="{{ route('teams.create') }}" class="nav-link" >Add Member</a></li>
              <li class="nav-item"> <a href="{{ route('teams.index') }}"  class="nav-link">Manage Meamber</a></li>
          </ul>
        </div>
        </li>

      {{-- Team  --}}

      {{-- contact  --}}
      <li class="nav-item menu-items" title="Contact">
        <a class="nav-link" data-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="contact">
            <span class="menu-icon">
              <i class="mdi mdi-contact-mail"></i>
            </span>
            <span class="menu-title">Contact</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="contact">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a href="{{ route('contacts.index') }}"  class="nav-link">Manage Contacts</a></li>
          </ul>
        </div>
        </li>

      {{-- contact menu --}}


    </ul>
  </nav>
