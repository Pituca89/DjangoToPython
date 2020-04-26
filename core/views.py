from django.shortcuts import render,HttpResponse

def contact(request):
    return render(request,'core/contact.php')