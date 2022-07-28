<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image">
          <img src="images/faces/face5.jpg" alt="image" />
        </div>
        <div class="profile-name">
          <p class="name">
            Welcome User
          </p>
          <p class="designation">
            Super Admin
          </p>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('categories.index')}}">
        <i class="fas fa-tags menu-icon"></i>
        <span class="menu-title">Categorías</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('products.index')}}">
        <i class="fas fa-boxes menu-icon"></i>
        <span class="menu-title">Productos</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('providers.index')}}">
        <i class="fas fa-shipping-fast menu-icon"></i>
        <span class="menu-title">Proveedores</span>
      </a>
    </li>
  </ul>
</nav>