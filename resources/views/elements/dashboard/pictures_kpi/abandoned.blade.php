<div class="col-md-2 col-sm-6 col-xs-6" @click="loadMetricasKpi">
  <div class="info-box bg-yellow">
    <span class="info-box-icon metricas-info-box-icon"><i class="fa fa-close"></i></span>
    <div class="info-box-conten metricas-info-box-content">
      <span class="info-box-text metricas-info-box-text">Abandoned</span>
      <span class="info-box-number metricas-info-box-number">@{{ abandoned }}</span>
    </div>
    <div v-else>@include('layout.recursos.loading_bar')</div>
  </div>
</div>
