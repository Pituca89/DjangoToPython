{% extends 'core/layout.php' %}
{% load static %}

{% block slider %}
<div class="row slider">
    <div class="col">
        <img src="{% static 'core/img/contact-img.jpg' %}" class="w-100" alt="Responsive image">
    </div>
</div>
{% endblock %}

{% block content %}
<main>
    <!--Acerca de - contenido -->
    <div class="container">
        <div class="row contenedor">
            <div class="col">
                <h2 class="titulo">Contactar a Carlos Masuchi</h2>
                <div class="row contacto justify-content-center align-items-center">
                    <div class="col-12 col-lg-2 col-md-2">
                        <a href="#" class="icono icon-phone phone"></a>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3">
                        <p class="text-center">+025 456 878</p>
                    </div>
                    <div class="col-12 col-lg-7 col-md-7">
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante </p>
                    </div>
                </div>

                <div class="row contacto justify-content-center align-items-center">
                    <div class="col-12 col-lg-2 col-md-2">
                        <a href="#" class="icono icon-mail mail"></a>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3">
                        <p class="text-center">nombre@ejemplo.com</p>
                    </div>
                    <div class="col-12 col-lg-7 col-md-7">
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante </p>
                    </div>
                </div>

                <div class="row contacto justify-content-center align-items-center">
                    <div class="col-12 col-lg-2 col-md-2">
                        <a href="#" class="icono icon-whatsapp whatsapp"></a>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3">
                        <p class="text-center">+051 000 000 000
                        </p>
                    </div>
                    <div class="col-12 col-lg-7 col-md-7">
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
{% endblock %}