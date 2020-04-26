from django.contrib import admin
from .models import Project
# Register your models here.

class ProjectAdmin(admin.ModelAdmin):
    readonly_fields = ('created','updated')
    list_display = ['title','description']
    #list_display = ['title','description','post_category']
    ordering = ['description']
    search_fields = ['title']
    #search_fields = ['title','author__username] En el caso de tener una foraneo de autor y deseamos buscar por su nombre y por el titulo
    #date_hierarchy = 'published' para buscar por fecha
    #list_filter = ['author__username'] agrego un filtro

    '''Metodo para retornar una relacion manytomany
    def post_category(self,obj):
        return ", ".join([c.name for c in obj.categories.all().order_by("name")])
    
    Para cambiar el encabezado
    post_category.short_description = "Categorías"
    '''
admin.site.register(Project,ProjectAdmin)