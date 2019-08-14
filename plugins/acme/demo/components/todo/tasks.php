{% for task in tasks %}

    <li  class="list-group-item">
        {{ task}}
        <button class="close pull-rigth"> &times; </button>
    </li>

{% endfor %}
