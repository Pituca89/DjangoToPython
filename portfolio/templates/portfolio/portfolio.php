{% extends 'core/layout.php' %}
{% load static %}

{% block slider %}
<!--Slider -->
<div class="row slider">
	<div class="col">
		<div class="carousel slide" id="slider" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#slider" data-slide-to="0" class="active"></li>
				<li data-target="#slider" data-slide-to="1"></li>
				<li data-target="#slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{% static 'core/img/slide1.jpg' %}" class="d-block w-100" alt="Slide#1">
				</div>
				<div class="carousel-item">
					<img src="{% static 'core/img/slide2.jpg' %}" class="d-block w-100" alt="Slide#1">
				</div>
				<div class="carousel-item">
					<img src="{% static 'core/img/slide3.jpg' %}" class="d-block w-100" alt="Slide#1">
				</div>
			</div>

			<a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="carousel-control-next" href="#slider" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Siguiente</span>
			</a>
		</div>
	</div>
</div>
{% endblock %}

{% block content %}
<!--Contenido-->
<main>
	<!--Portafolios contenido -->
	<div class="container">
		<div class="row contenedor">
			<div class="col">
				<h2 class="titulo">Portafolio</h2>
				<div class="row projects justify-content-center">
					{% for proyecto in proyectos %}
					<div class="content-project col-12 col-lg-4 col-md-4">
						<a href="" data-toggle="modal" data-target="#modal">
							<img src="media/{{proyecto.image}}" class="img-fluid" alt="...">
						</a>
					</div>
					<div class="content-project col-12 col-lg-8 col-md-8">
						<h5 class="title-project">{{proyecto.title}}</h5>
						<p>{{proyecto.description}}</p>
						{% if proyecto.link %}
						<a href="{{ proyecto.link }}" class="btn link-project">Mas Información</a>
						{% endif %}
					</div>
					{% endfor %}
					<!-- Ventana Modal -->
					<div class="modal fade" id="modal">
						<div class="modal-dialog d-flex justify-content-center align-items-center">
							<div class="modal-content">
								<img src="{% static 'core/img/bg.jpg' %}" id="imagen-modal" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
{% endblock %}