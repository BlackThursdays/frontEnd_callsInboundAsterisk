<div class="col-md-3 col-sm-6 col-xs-6 " @click="loadMetricasKpi">
  <div class="info-box bg-blue" v-if="textDateServer != '-'">
    <span class="info-box-icon metricas-info-box-icon"><i class="fa fa-fw fa-calendar"></i></span>
    <div class="info-box-conten metricas-info-box-content" >
    	<span class="info-box-text metricas-info-box-text">@{{ textDateServer }}</span>
    	<span class="info-box-number metricas-info-box-number">@{{ hourServer }}</span>
    </div>
  </div>
  <div v-else>@include('layout.recursos.loading_bar')</div>
</div>
