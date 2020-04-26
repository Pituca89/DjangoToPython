{% extends 'core/layout.php' %}
{% load static %}

{% block slider %}
<div class="row slider">
    <div class="col">
        <img src="{% static 'core/img/about-img.jpg' %}" class="w-100" alt="Responsive image">
    </div>
</div>
{% endblock %}

{% block content %}
<main>
    <!--Acerca de - contenido -->
    <div class="container">
        <div class="row contenedor">
            <div class="col">
            {% for about in abouts %}
                <h2 class="titulo">Acerca de {{about.title}}</h2>
                <div class="row projects justify-content-center">
                    <div class="col-12 col-lg-3 col-md-3">
                        <img src="{% static 'core/img/user-img.jpg' %}" class="rounded-circle w-100" alt="...">
                        <hr>
                        <p class="text-center">{{about.title}}</p>
                        <hr>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9">
                        <h5 class="title-project">{{about.title}}</h5>
                        <p>{{about.description_1}}</p>

                        <p>{{about.description_2}}</p>
                    </div>
                </div>
            {% endfor %}
                <h2 class="titulo">Conosimientos Profesionales</h2>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-3 col-md-3">
                        <p class="label text-center">PHOTOSHOP</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100">95%</div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-3">
                        <p class="label text-center">ILLUSTRATOR</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-3">
                        <p class="label text-center">ADOBE PRIMIERE</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 97%;" aria-valuenow="97"
                                aria-valuemin="0" aria-valuemax="100">97%</div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-3">
                        <p class="label text-center">COREL DRAW</p>
                    </div>
                    <div class="col-12 col-lg-9 col-md-9">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 97%;" aria-valuenow="97"
                                aria-valuemin="0" aria-valuemax="100">97%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
{% endblock %}