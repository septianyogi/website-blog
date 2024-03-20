<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary" >
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active text-primary' : 'text-dark' }}" aria-current="page" href="/dashboard">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active text-primary' : 'text-dark' }}" href="/dashboard/store">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              My Post
            </a>
          </li>
        </ul>
      </div>
</div>