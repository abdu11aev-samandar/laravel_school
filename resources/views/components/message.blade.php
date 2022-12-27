{% if messages %}
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    {% for message in messages %}
    <div class="alert {% if message.tags %} alert-{{ 'message.tags' }}{% endif %}">{{ 'message|safe' }}</div>
    {% endfor %}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
{% endif %}
