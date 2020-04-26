from django.shortcuts import render
from .models import About

def about(request):
    abouts = About.objects.all()
    return render(request,'about/about.php',{'abouts':abouts})
