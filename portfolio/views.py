from django.shortcuts import render
from .models import Project

def portfolio(request):
    proyectos = Project.objects.all()
    return render(request,'portfolio/portfolio.php',{'proyectos':proyectos})