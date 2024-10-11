<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="bi bi-speedometer2"></i><span>Dashboard</span>
          </a>
      </li>
      <!-- End Dashboard Nav -->

      <li class="nav-item">
          <a class="nav-link" data-bs-target="#orders-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="orders-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="{{ route('orders.processing') }}">
                      <i class="bi bi-circle"></i><span>Order Processing</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('orders.notifications') }}">
                      <i class="bi bi-circle"></i><span>Customer Notifications</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('orders.status-update') }}">
                      <i class="bi bi-circle"></i><span>Status Updates</span>
                  </a>
              </li>
          </ul>
      </li><!-- End Orders Nav -->

      <li class="nav-item">
          <a class="nav-link" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="products-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="{{ route('products.index') }}">
                      <i class="bi bi-circle"></i><span>Product Catalog Maintenance</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('products.stock') }}">
                      <i class="bi bi-circle"></i><span>Stock Management</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('products.inventory-materials') }}">
                      <i class="bi bi-circle"></i><span>Inventory Materials</span>
                  </a>
              </li>
          </ul>
      </li><!-- End Products Nav -->

      <li class="nav-item">
          <a class="nav-link" data-bs-target="#customers-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Customers</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="customers-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
          <a href="{{ route('customers.profiles') }}">
              <i class="bi bi-circle"></i><span>Access Customer Profiles</span>
          </a>
          </li>
          <li>
          <a href="{{ route('customers.order-history') }}">
              <i class="bi bi-circle"></i><span>Order History</span>
          </a>
          </li>
          </ul>
      </li><!-- End Customers Nav -->

      <li class="nav-item"></li>
        <a class="nav-link" data-bs-target="#analytics-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-graph-up"></i><span>Analytics</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="analytics-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Income Statement</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Reconciliation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Analytics Nav -->
  </ul>

</aside><!-- End Sidebar -->