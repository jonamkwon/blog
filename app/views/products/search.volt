
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("Products/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("Products/new", "Create ") }}
        </td>
    <tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Products Of Types</th>
            <th>Name</th>
            <th>Price</th>
            <th>Active</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for Product in page.items %}
        <tr>
            <td>{{ Product.id }}</td>
            <td>{{ Product.products_types_id }}</td>
            <td>{{ Product.name }}</td>
            <td>{{ Product.price }}</td>
            <td>{{ Product.active }}</td>
            <td>{{ link_to("Products/edit/"~Product.id, "Edit") }}</td>
            <td>{{ link_to("Products/delete/"~Product.id, "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("Products/search", "First") }}</td>
                        <td>{{ link_to("Products/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("Products/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("Products/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    <tbody>
</table>
