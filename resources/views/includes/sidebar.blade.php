<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <span data-feather="home"></span>
              Home <span class="sr-only"></span>
            </a>
          </li>
          @foreach ($pages as $page)
            <li class="nav-item">
                <a class="nav-link" href="/{{ $page->slug }}">
                    {{ $page->name }}
                    <span data-feather="file"></span>
                </a>
            </li>

        </ul>
        @endforeach

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administration</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="/admin">
              <span data-feather="file-text"></span>
              Admin Suite
            </a>
          </li>

        </ul>
      </div>
    </nav>
