from django.db import models

# Create your models here.
class About(models.Model):
    title = models.CharField(max_length=200)
    description_1 = models.TextField()
    description_2 = models.TextField()
    image = models.ImageField(upload_to='PracticaUdemy')
    created = models.DateTimeField(auto_now_add=True)
    updated = models.DateTimeField(auto_now=True)

    def __str__(self):
        return self.title
    
    class Meta:
        verbose_name = 'About'
        ordering = ['-created']