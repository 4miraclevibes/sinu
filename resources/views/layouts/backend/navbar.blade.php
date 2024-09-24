        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu">
            <div class="app-brand demo">
              <a href="{{ route('landing') }}" class="app-brand-link">
                <span class="app-brand-logo demo">
                  <img src="https://1.bp.blogspot.com/-eQaLq4sqKdU/YARIIRtlYpI/AAAAAAAAIbM/bu3J4geILWgLU1Qm73gkiUT1yGlhOdFTwCLcBGAsYHQ/w1200-h630-p-k-no-nu/Download-Logo-Nahdlatul-Ulama-PNG-dan-CDR.jpg" style="max-width: 150px" alt="">
                </span>
              </a>
  
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>
  
            <div class="menu-inner-shadow"></div>
  
            <ul class="menu-inner py-1 mt-3">
              <!-- Dashboard -->
              <li class="menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-home"></i>
                  <div data-i18n="Dashboard">Dashboard</div>
                </a>
              </li>

              <!-- Announcements -->
              <li class="menu-item {{ Route::is('announcements*') ? 'active' : '' }}">
                <a href="{{ route('announcements.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-message-square-detail"></i>
                  <div data-i18n="Announcements">Announcements</div>
                </a>
              </li>

              <!-- Users -->
              <li class="menu-item {{ Route::is('users*') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-user"></i>
                  <div data-i18n="Users">Users</div>
                </a>
              </li>
            </ul>
          </aside>
          <!-- / Menu -->