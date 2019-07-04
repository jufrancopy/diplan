@extends('layouts.master')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Anális de ambiente interno</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
									<div class="card-header card-header card-header-icon">
										<div class="card-icon">
											<i class="material-icons">settings_applications
											</i>
										</div>
										<p class="card-category">Infraestructura</p>
										<h3 class="card-title">
										<small>{{$totalInfraestructura}}</small>
										</h3>
									</div>
									<div class="card-footer">
										<div class="stats">
											<i class="material-icons">visibility</i> <a href="{{route('foda-infra.infra')}}">Analizar</a>
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
									<div class="card-header card-header card-header-icon">
										<div class="card-icon">
											<i class="material-icons">people</i>
										</div>
										<p class="card-category">Talento Humano</p>
										<h3 class="card-title">{{$totalTTHH}}</h3>
									</div>
									<div class="card-footer">
										<div class="stats">
											<i class="material-icons">visibility</i> <a href="{{route('foda-tthh.tthh')}}">Analizar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
									<div class="card-header card-header card-header-icon">
										<div class="card-icon">
											<i class="material-icons">desktop_mac</i>
										</div>
										<p class="card-category">Tecnología e Información</p>
										<h3 class="card-title">{{$totalTecnologia}}</h3>
									</div>
									<div class="card-footer">
										<div class="stats">
											<i class="material-icons">visibility</i> <a href="#">Analizar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
									<div class="card-header card-header card-header-icon">
										<div class="card-icon">
											<i class="material-icons">check_box</i>
										</div>
										<p class="card-category">Logistica Interna</p>
										<h3 class="card-title">{{$totalLogInterna}}</h3>
									</div>
									<div class="card-footer">
										<div class="stats">
											<i class="material-icons">visibility</i> <a href="#">Analizar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
									<div class="card-header card-header card-header-icon">
										<div class="card-icon">
											<i class="material-icons">commute</i>
										</div>
										<p class="card-category">Logistica Externa</p>
										<h3 class="card-title">{{$totalLogExterna}}</h3>
									</div>
									<div class="card-footer">
										<div class="stats">
											<i class="material-icons">visibility</i> <a href="#">Analizar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
									<div class="card-header card-header card-header-icon">
										<div class="card-icon">
											<i class="material-icons">shopping_cart
											</i>
										</div>
										<p class="card-category">Marketing y Venta</p>
										<h3 class="card-title">{{$totalMarkVenta}}</h3>
									</div>
									<div class="card-footer">
										<div class="stats">
											<i class="material-icons">visibility</i> <a href="#">Analizar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
									<div class="card-header card-header card-header-icon">
										<div class="card-icon">
											<i class="material-icons">touch_app
											</i>
										</div>
										<p class="card-category">Operaciones Genericas</p>
										<h3 class="card-title">{{$totalOperaciones}}</h3>
									</div>
									<div class="card-footer">
										<div class="stats">
											<i class="material-icons">visibility</i> <a href="#">Analizar</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
									<div class="card-header card-header card-header-icon">
										<div class="card-icon">
											<i class="material-icons">verified_user
											</i>
										</div>
										<p class="card-category">Servicios Post-venta</p>
										<h3 class="card-title">{{$totalSerPostVenta}}</h3>
									</div>
									<div class="card-footer">
										<div class="stats">
											<i class="material-icons">visibility</i> <a href="#">Analizar</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
									<div class="card-header card-header card-header-icon">
										<div class="card-icon">
											<i class="material-icons">attach_money
											</i>
										</div>
										<p class="card-category">Compra</p>
										<h3 class="card-title">{{$totalCompras}}</h3>
									</div>
									<div class="card-footer">
										<div class="stats">
											<i class="material-icons">visibility</i> <a href="#">Analizar</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection