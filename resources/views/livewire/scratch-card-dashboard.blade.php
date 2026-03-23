
<div class="row">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
  </div>

</div>
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow-1">
      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Total Cards</h6>
            </div>
            <h3 class="mb-2">{{ $totalCards }}</h3>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Used Cards</h6>
            </div>
            <h3 class="mb-2">{{ $usedCards }}</h3>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Unused Cards</h6>
            </div>
            <h3 class="mb-2">{{ $unusedCards }}</h3>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Expired Cards</h6>
            </div>
            <h3 class="mb-2">{{ $expiredCards }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Add the rest of your dashboard layout here, including charts, tables, and other cards as in your design. Use static or placeholder data where dynamic data is not yet available. -->
